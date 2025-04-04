<?php

declare(strict_types=1);

namespace Drupal\custom_tokens\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for custom_tokens routes.
 */
final class custom_tokensController extends ControllerBase {

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
