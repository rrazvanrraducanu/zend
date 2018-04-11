<?php
namespace Forme\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FormController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
      public function helloAction()
    {
       $form=new \Forme\Form\MyForm(); 
        if(!isset($_POST["nume"])){
            $msg="Hello! Please enter your name: <br/>";
        }else{
            $msg="Welcome <b>".$_POST["nume"]."</b>!<br/>";
        }        
        
        $viewModel = new ViewModel(array('msg' => $msg,'form'=>$form));
	$viewModel->setTemplate('forme/index/hello');
	return $viewModel;
    }
    public function popescuAction()
    {
       $form=new \Forme\Form\MyForm(); 
        
        $viewModel = new ViewModel(array('form'=>$form));
	$viewModel->setTemplate('forme/index/popescu_form');
	return $viewModel;
    }
     public function showpopescuAction()
    { 
        if(empty($_POST["nume"])){
            $msg="Hello! Please return and enter your name: <br/>";
        }else{
            $msg="Welcome <b>".$_POST["nume"]."</b>!<br/>";
        }        
        
        $viewModel = new ViewModel(array('msg' => $msg));
	$viewModel->setTemplate('forme/index/popescu_show');
	return $viewModel;
    }
    public function copy1Action()
    {
       $form=new \Forme\Form\MyForm(); 
        
        $viewModel = new ViewModel(array('form'=>$form));
	$viewModel->setTemplate('forme/index/copy1_form');
	return $viewModel;
    }
    
    public function showcopy1Action()
    { 
        $form=new \Forme\Form\MyForm(); 
        
        if(empty($_POST["nume1"])){
            $msg="Hello! Please return and enter your name: <br/>";
        }else{
            $msg=$_POST["nume1"];
        }        
        
        $viewModel = new ViewModel(array('msg' => $msg,'form'=>$form));
	$viewModel->setTemplate('forme/index/copy1_show');
	return $viewModel;
    }
}
