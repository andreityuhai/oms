<?php

namespace Drupal\oms_dashboard\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An dashboard controller.
 */
class DashboardController extends ControllerBase {

  /**
   * Returns a render-able array.
   */
  public function content() {
    $build = [
      'add_widget' => [
        '#type' => 'container',
        '#attributes' => [
          'class' => 'add-widget-wrapper'
        ],
        'add_widget_button' => [
          '#type' => 'button',
          '#value' => $this->t('Add widget'),
          '#attributes' => [
            'class' => ['btn', 'btn-primary'],
          ],
          '#submit' => [$this, 'addWidget']
        ],
      ],
    ];
    return $build;
  }

  public function addWidget() {
    $er = 0;
  }

}