<?php

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the salutation message
 */

 class HelloWorldControler extends ControllerBase {

/**
 * Hello World Drupal 
 * @return array
 * Our message
 */


 public function helloWorld(){
     return[
         '#markup' => $this.t('Hello World Drupal 9'),
     ];
 }


 }