<?php
namespace Forme\Form;

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
    //  $this->setAttribute('action', '/showcopy');
      //text
      $this->add([
          'type'=>'text',
          'name'=>'nume1',
          'options'=>[
              'label'=>'Nume1'
          ]
       ]);
      //text
       $this->add([
          'type'=>'text',
          'name'=>'nume2',
          'options'=>[
              'label'=>'Nume2'
          ]
       ]);
      //text
         //text
       $this->add([
          'type'=>'text',
          'name'=>'nume',
          'options'=>[
              'label'=>'Prenume'
          ]
       ]);
      //text
       $this->add([
           'type'=>'text',
          'name'=>'prenume',
           'value'=>'',
          'options'=>[
              'label'=>'Prenume'
          ]
      ]);
       //password
         $this->add([
           'type'=>'password',
          'name'=>'password',
          'options'=>[
              'label'=>'Password'
          ]
      ]);
         //textarea
         $this->add([
           'type'=>'textarea',
          'name'=>'textarea',
             'attributes'=>[
                 'rows'=>'5',
                 'cols'=>'30',
             ],
          'options'=>[
              'label'=>'Textarea',
          ]
      ]);
        //radio 
          $this->add([
           'type'=>'radio',
           'name'=>'radio',
          'options'=>[
              'label'=>'Choose: ',
              'value_options'=>[
                '0'=>'Negruzzi',
                '1'=>'National',
                '2'=>'Informatica',
               ],
          ]
      ]);
        //checkbox1  
           $this->add([
           'type'=>'checkbox',
           'name'=>'check1',
          'options'=>[
              'label'=>'Iasi',
              'check_value'=>'Iasi',
              'uncheck_value'=>'0'
          ]
      ]);
           //checkbox2 
           $this->add([
           'type'=>'checkbox',
           'name'=>'check2',
          'options'=>[
              'label'=>'Bucuresti',
              'check_value'=>'Bucuresti',
              'uncheck_value'=>'0'
          ]
      ]);
           //checkbox3  
           $this->add([
           'type'=>'checkbox',
           'name'=>'check3',
          'options'=>[
              'label'=>'Cluj',
              'check_value'=>'Cluj',
              'uncheck_value'=>'0'
          ]
      ]);
        //select
            $this->add([
           'type'=>'select',
           'name'=>'dropdown',
          'options'=>[
              'label'=>'Choose: ',
              'value_options'=>[
                '0'=>'Negruzzi',
                '1'=>'National',
                '2'=>'Informatica',
               ],
          ]
      ]);
        //list select
            $this->add([
           'type'=>'MonthSelect',
           'name'=>'month',
          'options'=>[
              'label'=>'Select a month and a year. ',
              'min_year'=>'2000',
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
 
  }
}