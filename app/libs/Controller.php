<?php

/**
 *
 * Class Controller
 * Loads views and models
 */
class Controller
{
  // load view
  public function view($viewFile, $data = array()){
    if(file_exists('../app/views/'.$viewFile.'.php')){
      require_once '../app/views/'.$viewFile.'.php';
    } else {
      die($viewFile.'.php does not exist');
    }
  }

  // load model
  public function model($modelFile){
    require_once '../app/models/'.$modelFile.'.php';
    $model = new $modelFile();
    return $model;
  }
}