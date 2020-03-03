<?php


class User
{
  private $db;

  public function __construct(){
    $this->db = new Database();
  }
  // check email
  public function findUserByEmail($email){
    $this->db->query('SELECT * FROM users WHERE email=:email');
    $this->db->bind(':email', $email);
    $this->db->execute();
    if($this->db->rowCount() > 0){
      return true;
    } else {
      return false;
    }
  }
  // register user
  public function register($data){
    $this->db->query('INSERT INTO users (name, email, pass) VALUES (:name, :email, :pass )');
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':pass', $data['pass']);
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
  // login user
  public function login($email, $pass){
    $this->db->query('SELECT * FROM users WHERE email=:email');
    $this->db->bind(':email', $email);
    $user = $this->db->getOne();
    $userHashedPass = $user->pass;
    if(password_verify($pass, $userHashedPass)){
      return $user;
    } else {
      return false;
    }
  }
}