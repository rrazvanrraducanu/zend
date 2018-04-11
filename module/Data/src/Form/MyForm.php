<?php
namespace Data\Form;

// Define an alias for the class name
use Zend\Form\Form;

// A feedback form model
class MyForm extends Form
{
  // Constructor.   
  public function __construct()
  {
     parent::__construct('myform');//my_form este numele formei
      $this->setAttribute('method', 'post');
      //text
      $this->add([
          'type'=>'text',
          'name'=>'nume',
          'options'=>[
              'label'=>'Nume'
          ]
       ]);
      //text
       $this->add([
          'type'=>'text',
          'name'=>'culoare',
          'options'=>[
              'label'=>'Culoare'
          ]
       ]);
        //text
      $this->add([
          'type'=>'text',
          'name'=>'nume',
          'options'=>[
              'label'=>'Nume'
          ]
       ]);
      //text
       $this->add([
          'type'=>'text',
          'name'=>'culoare',
          'options'=>[
              'label'=>'Culoare'
          ]
       ]);
    
       //submit
       $this->add([
          'type'=>'submit',
          'name'=>'submit',
          'attributes'=>[
              'value'=>'Submit'
          ]
      ]);
 //hidden
       $this->add([
          'type'=>'hidden',
          'name'=>'id',
      ]);
  }
}