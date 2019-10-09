<?php

App::uses('Helper', 'View');

//App::uses('AppHelper', 'View/Helper');

class FormAdminHelper extends AppHelper {

    public $helpers = array('Form');
    public $inputsConfig = array(
        "before" => '<div class="form-group">',
        "between" => '<div class="col-md-9 controls" >',
        "after" => "</div></div>",
        "class" => "form-control",
        'label' => array("class" => 'col-md-2 control-label'));
    public $formConfigs = array("class" => "form form-horizontal validate-form FrmPrincipal",
        "style" => "margin-bottom: 0; padding-top: 15px;",
        "enctype" => "multipart/form-data",
        "inputDefaults" => array(
            "before" => '<div class="form-group">',
            "between" => '<div class="col-md-9 controls" >',
            "after" => "</div></div>",
            "class" => "form-control",
            'label' => array("class" => 'col-md-2 control-label')),
    );
    public $btnConfig = array(
        "type" => 'button',
        "class" => "col-sm-2 control-label btn btn-default",
        "label" => array(
            'class' => 'col-sm-2 control-label',
            'text' => false));

    public function CreateConfiguredForm($name) {

        $form = $this->Form->create($name, array('role' => 'form',
            'action' => $action,
            'controller' => $controller,
            'method' => $method,
            'id' => $id,
            'class' => $class,
            "inputDefaults" => $this->inputsConfig
        ));
        //$link = $this->Html->link($title, $url, array('class' => 'edit'));

        return $form;
    }

}
