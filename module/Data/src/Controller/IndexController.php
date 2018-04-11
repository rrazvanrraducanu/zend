<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $table;
    public function __construct($table)
    {
        $this->table=$table;
    }
    
    public function indexAction()
    {
        $flower=$this->table->fetchAll();
        
        return new ViewModel(array('flower'=>$flower));
    }
    public function addAction()
    {
        $form=new \Data\Form\MyForm();
        $form->get('submit');
        $request=$this->getRequest();
     
        if(!$request->isPost()){
              return new ViewModel(['form'=>$form]);
        }
        
         $flower=new \Data\Model\Flower();
        $form->setData($request->getPost());
        if(!$form->isValid()){
            exit('not valid');
        }
        $flower->exchangeArray($form->getData());
        $this->table->saveFlower($flower);
        return $this->redirect()->toRoute('data',['action'=>'index']);
           
    }
    public function viewAction()
    {
          $id=(int)$this->params()->fromRoute('id',0);
        if($id==0){
            exit('invalid id');
        }
        try{
            $flower=$this->table->getFlower($id);
        } catch (\Exception $e) {
            exit('Error!');
        }
        $request=$this->getRequest();
        
        $viewModel = new ViewModel(array('flower'=>$flower));
	$viewModel->setTemplate('data/index/view');
	return $viewModel;      
    }
    
    public function deleteAction()
    {
        $id=(int)$this->params()->fromRoute('id',0);
        if($id==0){
            exit('invalid id');
        }
       
        $flower=$this->table->getFlower($id);
        
        $request=$this->getRequest();
        
        if(!$request->isPost())
            {
            return new ViewModel(['flower'=>$flower,'id'=>$id]);
        }
       
        $del=$request->getPost('del','No');
        if($del=='Yes'){
            $id=(int)$flower->getId();
            $this->table->deleteFlower($id);
        }
        $this->redirect()->toRoute('data',['action'=>'index']);
    }
   public function editAction()
    {
        $id=(int)$this->params()->fromRoute('id',0);
        if($id==0){
            exit('invalid id');
        }
       
        $flower=$this->table->getFlower($id);
        
        $form=new \Data\Form\MyForm();
        $form->bind($flower);
        
        $request=$this->getRequest();
        
        if(!$request->isPost())
            {
            return new ViewModel(['form'=>$form,'id'=>$id]);
        }
        $form->setData($request->getPost());
        
        if(!$form->isValid()){
           exit('not valid');
       }
       $this->table->saveFlower($flower);
       
     $this->redirect()->toRoute('data',['action'=>'index']);       
    }
    
}
