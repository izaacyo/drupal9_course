<?php

namespace Drupal\basic_custom_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the basic custom module
 */

 class BasicCustomerExampleController extends ControllerBase {


    /**
     * Simple basic custom module controller method
     * @return array
     * Returns just an array with a piece of markup to render in screen
     */
 

 public function basicCustom() {

    return [
        'markup' => $this->t('This is a basic custom drupal 9 module example')
    ];
 }

}
