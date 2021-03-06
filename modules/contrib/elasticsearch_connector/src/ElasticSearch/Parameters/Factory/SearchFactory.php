<?php

namespace Drupal\elasticsearch_connector\ElasticSearch\Parameters\Factory;

use Drupal\elasticsearch_connector\ElasticSearch\Parameters\Builder\SearchBuilder;
use Drupal\search_api\Item\FieldInterface;
use Drupal\search_api\Query\QueryInterface;
use Elastica\ResultSet as ElasticResultSet;
use Drupal\search_api\Query\ResultSetInterface;

/**
 * Class SearchFactory.
 */
class SearchFactory {

  /**
   * Build search parameters from a query interface.
   *
   * @param \Drupal\search_api\Query\QueryInterface $query
   *   Search API query object.
   *
   * @return array
   *   Array of parameters to send along to the Elasticsearch _search endpoint.
   */
  public static function search(QueryInterface $query) {
    $builder = new SearchBuilder($query);

    return $builder->build();
  }

  /**
   * Parse a Elasticsearch response into a ResultSetInterface.
   *
   * TODO: Add excerpt handling.
   *
   * @param \Drupal\search_api\Query\QueryInterface $query
   *   Search API query.
   * @param \Elastica\ResultSet $result_set
   *   ResultSet.
   *
   * @return \Drupal\search_api\Query\ResultSetInterface
   *   The results of the search.
   */
  public static function parseResult(QueryInterface $query, ElasticResultSet $result_set): ResultSetInterface {
    $index = $query->getIndex();
    $fields = $index->getFields();

    // Set up the results array.
    $results = $query->getResults();
    $results->setExtraData('elasticsearch_response', $result_set);
    $results->setResultCount($result_set->getTotalHits());

    /** @var \Drupal\search_api\Utility\FieldsHelper $fields_helper */
    $fields_helper = \Drupal::getContainer()->get('search_api.fields_helper');

    // Add each search result to the results array.
    foreach ($result_set->getResults() as $result) {
      $result = $result->getHit();
      $result_item = $fields_helper->createItem($index, $result['_id']);
      $result_item->setScore($result['_score']);

      // Set each item in _source as a field in Search API.
      foreach ($result['_source'] as $elasticsearch_property_id => $elasticsearch_property) {
        // Make everything a multifield.
        if (!is_array($elasticsearch_property)) {
          $elasticsearch_property = [$elasticsearch_property];
        }
        $field = $fields_helper->createField($index, $elasticsearch_property_id, ['property_path' => $elasticsearch_property_id]);
        $field->setValues($elasticsearch_property);
        $result_item->setField($elasticsearch_property_id, $field);
      }

      $results->addResultItem($result_item);
    }

    return $results;
  }

}
