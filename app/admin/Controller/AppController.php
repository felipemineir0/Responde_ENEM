<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package   app.Controller
 * @link    http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

  public $helpers = array('FormAdmin', 'Link');
    //public $colorTheme = "blue";
    //$this->Session->set("colorTheme", 'blue');
  public $components = array(
    'Session',
    'Auth' => array(
      'authenticate' => array
      (
        'Form' => array(
          'fields' => array('username' => 'email', 'password' => 'password')
          )
        ),
      'loginRedirect' => array("admin" => true, 'controller' => 'Users', 'action' => 'index'),
      'logoutRedirect' => array('controller' => 'Users', 'action' => 'index')
      ),
        //'AuthExtension',
        //'DebugKit.Toolbar',
    'Cookie',
    'Paginator',
    );

  public function beforeFilter() {
    $this->Paginator->settings = array(
      'limit' => 10
      );
    $this->renovaLogin(false);

    $this->Auth->allow('');
  

  }

 

  public function beforeRender() {

    $this->Session->write('colorTheme', 'contrast-blue');
     $trace = debug_backtrace();
    $this->log($this->Session->id().':' ."beforeRender Called, initiated in {$trace[1]['file']} on line {$trace[1]['line']}\r\n", LOG_DEBUG);
    $this->renovaLogin(false);

    $usuario = $this->Auth->user();
    $this->set('usuario', $usuario);
       //exit(debug($usuario));
  }

  public function renovaLogin($redirect = false)
  {
    
    $this->log($this->Session->id().':' ."renovaLogin Called\r\n", LOG_DEBUG);
    $cookie_user = $this->Cookie->read('User');
    $auth_user = $this->Auth->user();

    //debug($this->Auth->allowedActions);
    //die();
    if (!empty($cookie_user) && empty($auth_user)) {
      $this->log("renovaLogin: Lina 90\r\n", LOG_DEBUG);
      $this->Auth->login($cookie_user);
      if ($redirect) {
        $this->log("renovaLogin: Lina 93\r\n", LOG_DEBUG);
       return $this->redirect($this->Auth->redirect());   
     }
   }
 }

}
