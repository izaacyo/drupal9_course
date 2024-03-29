<?php

namespace Drupal\creating_field_example\Plugin\Field\Fieldtype;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterace;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'field_example_rgb' field type
 * 
 * @FieldType(
 *  id= "field_example_rgb",
 *  label = @Translation("example Color RHB"),
 *  module = "field_example",
 *  description = @Translation("Demonstrates a field composed of an RGB color."),
 *  default_widget = "Field_example_text",
 *  default_formatter = "field_example_simple_text"
 * )
 */

 class RgbItem extends FieldItemBase {
     /**
      * {@inheritdoc}
      */

      public static function schema(FieldStorageDefinitionInterface $field_definition) {
          return [
              'columns'=> [
                'value' => [
                    'type' => 'text',
                    'size' => 'tiny',
                    'not null' => FALSE,
                ],
            ],     
        ];
      }


/**
 * {@inheritdoc}
 */

 public function isEmpty(){
     $value - $this->get('value') -> getValue();
     return $value === NULL || $value === '';
 }

 /**
  * {@inheritdoc}
  */

  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition){
      $properties['value'] = DataDefinition::create('string')
      ->setLabel(t('Hex value'));

      return $properties;
  }

 }