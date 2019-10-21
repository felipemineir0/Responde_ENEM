<?php

class UsersController extends AppController
{
    var $name = 'Users';
    var $scaffold;

    # needed for 'register'
    var $helpers = array('Html', 'Form');

    function beforeFilter()
    {
        // tell Auth not to check authentication when doing the 'register' action
        $this->Auth->allow('register');
    }

    function login()
    { }

    function logout()
    {
        $this->redirect($this->Auth->logout());
    }

    # TODO do some data validation here
    function register()
    {
        if (!empty($this->data)) {
            if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm'])) {
                $this->User->create();
                if ($this->User->save($this->data)) {
                    $this->Auth->login($this->data);
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
    }
}
?>