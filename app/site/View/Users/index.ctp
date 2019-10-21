<h1>CakePHP Registration Form</h1>

<?php
  echo $form->create('User', array('action' => 'register'));
  echo $form->input('username');
  echo $form->input('password', array('type' => 'password'));
  echo $form->input('password_confirm', array('type' => 'password'));
  echo $form->submit();
  echo $form->end();
?>