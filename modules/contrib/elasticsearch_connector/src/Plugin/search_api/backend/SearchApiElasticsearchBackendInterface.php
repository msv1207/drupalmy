<?php

namespace Drupal\elasticsearch_connector\Plugin\search_api\backend;

use Drupal\search_api\Backend\BackendInterface;

/**
 * Defines an interface for Elasticsearch backend plugins.
 */
interface SearchApiElasticsearchBackendInterface extends BackendInterface {

  /**
   * Get a list of supported data types.
   *
   * @return array
   *   Returns an array of strings representing supported data types.
   */
  public function getSupportedDataTypes();

}
