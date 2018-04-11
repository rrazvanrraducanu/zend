<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Vederi\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HomeController extends AbstractActionController
{
    public function indexAction()
    {
        $viewModel = new ViewModel();
	$viewModel->setTemplate('vederi/home/index');
	return $viewModel;

    }
    public function numeAction()
    {
        $name="Popescu Bogdan";
        //$name="Popescu <span style='color:red'>Bogdan</span>";
        $viewModel = new ViewModel(array('name' => $name));
	$viewModel->setTemplate('vederi/home/test');
	return $viewModel;
    }
    public function prenumeAction()
    {
        $data=array('nume'=>'Popescu','prenume'=>'Bogdan');
        
        //$name="Popescu <span style='color:red'>Bogdan</span>";
        $viewModel = new ViewModel(array('data' => $data));
	$viewModel->setTemplate('vederi/home/data');
	return $viewModel;
    }
}