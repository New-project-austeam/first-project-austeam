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
    $this->db->query("SELECT * FROM posts ");

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

    $sql = "SELECT * FROM posts WHERE post_id = :post_id";
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
}