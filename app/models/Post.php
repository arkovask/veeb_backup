<?php


class Post
{
  private $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function getAllPosts(){
    $this->db->query('SELECT *,
                        posts.id as postID,
                        users.id as userID,
                        users.created_at as userCreated
                        FROM posts 
                        INNER JOIN users
                        ON posts.user_id = users.id 
                        ORDER BY posts.created_at DESC');
    $posts = $this->db->getAll();
    if($this->db->rowCount() > 0){
      return $posts;
    } else {
      return false;
    }
  }

  public function getPostById($id){
    $this->db->query('SELECT * FROM posts WHERE id = :id');
    $this->db->bind(':id', $id);
    $post = $this->db->getOne();
    return $post;
  }

  public function addPost($data){
    $this->db->query('INSERT INTO posts (title, user_id, content) VALUES (:title, :user_id, :content)');
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':user_id', $data['user_id']);
    $this->db->bind(':content', $data['content']);
    if($this->db->execute()){
      // query is submitted
      return true;
    } else {
      return false;
    }
  }

}