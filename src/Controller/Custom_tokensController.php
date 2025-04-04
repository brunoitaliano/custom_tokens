<?php

declare(strict_types=1);

namespace Drupal\custom_token\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for custom_token routes.
 */
final class custom_tokenController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function hello(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
