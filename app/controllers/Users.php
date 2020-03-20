<?php


class Users extends Controller
{
  public function __construct(){
    $this->userModel = $this->model('User');
  }

  public function login(){
    // check post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // process form
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // init data
      $data = array(
        'email' => trim($_POST['email']),
        'pass' => trim($_POST['pass']),
        'email_err' => '',
        'pass_err' => ''
      );
      // validate email
      if(empty($data['email'])){
        $data['email_err'] = 'Please enter the email';
      } else if(!$this->userModel->findUserByEmail($data['email'])){
        $data['email_err'] = 'No user found';
      }
      // validate password
      if(empty($data['pass'])){
        $data['pass_err'] = 'Please enter the password';
      }
      // if errors are empty - login user
      if(empty($data['email_err']) and empty($data['pass_err']) ){
        // set log in
        $loggedInUser = $this->userModel->login($data['email'], $data['pass']);
        if(!$loggedInUser){
          $data['pass_err'] = 'Password is incorrect';
          $this->view('users/login', $data);
        } else {
          $this->createUserSession($loggedInUser);
        }
      } else {
        // load view with errors
        $this->view('users/login', $data);
      }
    } else {
      $this->view('users/login');
    }
  }

  public function register(){
    // check post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // process form
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // init data
      $data = array(
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'pass' => trim($_POST['pass']),
        'pass2' => trim($_POST['pass2']),
        'name_err' => '',
        'email_err' => '',
        'pass_err' => '',
        'pass2_err' => ''
      );
      // validate name
      if(empty($data['name'])){
        $data['name_err'] = 'Please enter the name';
      }
      // validate email
      if(empty($data['email'])){
        $data['email_err'] = 'Please enter the email';
      } else if($this->userModel->findUserByEmail($data['email'])){
        $data['email_err'] = 'Email is already taken';
      }
      // validate password
      if(empty($data['pass'])){
        $data['pass_err'] = 'Please enter the password';
      } else if(strlen($data['pass']) < 6){
        $data['pass_err'] = 'Password must be at least 6 characters';
      }
      // validate password confirmation
      if(empty($data['pass2'])){
        $data['pass2_err'] = 'Please enter the confirm password';
      } else if($data['pass'] != $data['pass2']){
        $data['pass2_err'] = 'Passwords do not match';
      }
      // if errors are empty - register user
      if(empty($data['name_err']) and empty($data['email_err']) and empty($data['pass_err']) and empty($data['pass2_err'])){
        // hash password
        $data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);
        // register user
        if($this->userModel->register($data)){
          flashSet('register_success', 'You are registered and can log in', 'alert alert-info');
          redirect('users/login');
        } else {
           die('Sometrhing went wrong');
        }
      } else {
        $this->view('users/register', $data);
      }
    } else {
      $this->view('users/register');
    }
  }
  // create session
  public function createUserSession($user){
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_name'] = $user->name;
    $_SESSION['user_email'] = $user->email;
    redirect();
  }
  // logout user
  public function logout(){
    session_unset();
    session_destroy();
    redirect();
  }
}