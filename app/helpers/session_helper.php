<?php
// flash message set up
function flashSet($name, $message, $class = 'alert alert-success'){
  if(!empty($_SESSION[$name])){
    unset($_SESSION[$name]);
  }
  if(!empty($_SESSION[$name.'_class'])){
    unset($_SESSION[$name.'_class']);
  }
  $_SESSION[$name] = $message;
  $_SESSION[$name.'_class'] = $class;
}
// flash message show
function flashShow($name){
  if(!empty($_SESSION[$name])){
    $message = $_SESSION[$name];
    $class = (!empty($_SESSION[$name.'_class'])) ? $_SESSION[$name.'_class'] : '';
    echo '<div class="'.$class.'">'.$message.'</div>';
    unset($_SESSION[$name]);
    unset($_SESSION[$name.'_class']);
  }
}
