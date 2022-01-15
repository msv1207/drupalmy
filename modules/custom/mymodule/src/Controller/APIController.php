<?php

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  public function showContent() {
    return [
      '#type' => 'markup',
      '#markup' => \Drupal::config('mymodule.settings')->get('terms_and_conditions')['value'],
    ];
  }
}
