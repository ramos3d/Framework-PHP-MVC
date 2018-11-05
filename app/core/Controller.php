<?php
/**
 * @model The model that will be loaded
 * @view The respective view that will be loaded as well
 */
class Controller
{

    public function model ($model){
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }
    public function view ($view, $data = []){
        require_once '../app/views/'.$view.'.php';
    }
}
