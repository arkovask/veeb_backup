<?php


class Users extends Controller
{
  public function login(){
    $this->view(viewFile: 'users/login');
  }
}