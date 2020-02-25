<?php
/*
 * http://hostname/veeb/kontroller/meetod/parameeter(id)
 * $_GET['url'] = 'kontroller/meetod/parameeter(id)'
 * http://hostname/veeb/pages/show/19/02/2020
 */

class Core
{
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = array();

  public function __construct()
  {
    $url = $this->getUrl();
    // set up the controller
    if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
      $this->currentController = ucwords($url[0]);
      unset($url[0]);
    }
    // create controller object
    require_once '../app/controllers/'.$this->currentController.'.php';
    $this->currentController = new $this->currentController();
    // check the method exist and set up it
    if(isset($url[1])){
      if(method_exists($this->currentController, $url[1])){
        $this->currentMethod = $url[1];
        unset($url[1]);
      }
    }
    // set up params
    $this->params = $url ? array_values($url) : array();

    // call a callback function with array of params
    call_user_func_array(array($this->currentController, $this->currentMethod), $this->params);
  }

  // get url from link and prepare for use
  public function getUrl(){
    if(isset($_GET['url'])){
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url,FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
}