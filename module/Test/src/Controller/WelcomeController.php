<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Test\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class WelcomeController extends AbstractActionController
{
    public function indexAction()
    {
     $viewModel = new ViewModel();
	$viewModel->setTemplate('test/welcome/index');
	return $viewModel;
    }
     public function contactAction()
    {
        $viewModel = new ViewModel();
	$viewModel->setTemplate('test/welcome/contact');
	return $viewModel;
    }
}