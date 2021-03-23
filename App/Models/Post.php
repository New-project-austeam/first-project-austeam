<?php

class Post
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPosts()
  {

    $sql = 'SELECT posts.*, users.user_name FROM posts JOIN users on posts.user_id = users.id';
    $this->db->query($sql);

    return $this->db->resultSet();
  }


  public function getUserPosts($userID)
  {
    $this->db->query("SELECT * FROM posts WHERE user_id = :user_id");
    $this->db->bind(':user_id', $userID);

    return $this->db->resultSet();
  }

  public function getPostDetails($postID)
  {

    $sql = "SELECT posts.*, users.user_name FROM posts JOIN users on posts.user_id = users.id WHERE post_id = :post_id";
    $this->db->query($sql);
    $this->db->bind(':post_id', $postID);
    return $this->db->single();
  }

  public function register($data)
  {

    $sql = 'INSERT INTO Posts (user_id, event_title, event_date, event_location, event_category, event_clothe, event_equipment, event_level, event_details) VALUES(:user_id, :event_title, :event_date, :event_location, :event_category, :event_clothe, :event_equipment, :event_level, :event_details)';

    $this->db->query($sql);
    $this->db->bind(':user_id', $_SESSION['user_id']);
    $this->db->bind(':event_title', $data['event_title']);
    $this->db->bind(':event_date', $data['event_date']);
    $this->db->bind(':event_location', $data['event_location']);
    $this->db->bind(':event_category', $data['event_category']);
    $this->db->bind(':event_clothe', $data['event_clothe']);
    $this->db->bind(':event_equipment', $data['event_equipment']);
    $this->db->bind(':event_level', $data['event_level']);
    $this->db->bind(':event_details', $data['event_details']);
    return $this->db->execute();
  }

  public function delete($post_id)
  {

    $post_data = $this->getPostDetails($post_id);
    $this->db->query("DELETE FROM posts WHERE post_id = :post_id");
    $this->db->bind(':post_id', $post_id);
    $result = [
      "result" => $this->db->execute(),
      "post_data" => $post_data
    ];
    return $result;
  }

  public function edit($data)
  {



    $sql = 'UPDATE Posts SET ';
    $sql .= 'event_title = :event_title, ';
    $sql .= 'event_date = :event_date, ';
    $sql .= 'event_location = :event_location, ';
    $sql .= 'event_category = :event_category, ';
    $sql .= 'event_clothe = :event_clothe, ';
    $sql .= 'event_equipment = :event_equipment, ';
    $sql .= 'event_level = :event_level, ';
    $sql .= 'event_details = :event_details ';
    $sql .= 'WHERE post_id = :post_id ';


    $this->db->query($sql);
    $this->db->bind(':event_title', $data['event_title']);
    $this->db->bind(':event_date', $data['event_date']);
    $this->db->bind(':event_location', $data['event_location']);
    $this->db->bind(':event_category', $data['event_category']);
    $this->db->bind(':event_clothe', $data['event_clothe']);
    $this->db->bind(':event_equipment', $data['event_equipment']);
    $this->db->bind(':event_level', $data['event_level']);
    $this->db->bind(':event_details', $data['event_details']);
    $this->db->bind(':post_id', $_SESSION['post_id']);
    return $this->db->execute();
  }
}