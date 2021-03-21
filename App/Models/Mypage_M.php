<?php

class Mypage_M
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }


  public function getUserInfo()
  {

    if (isset($_SESSION['user_name'])) {


      $user_email = $_SESSION['user_email'];
      $this->db->query("SELECT * FROM users WHERE user_email = :email");
      $this->db->bind(':email', $user_email);
      $row = $this->db->single();
      return $row;
    };
  }


  // Find user by email
  public function editUserInfo($data)
  {

    $sql = 'UPDATE users SET user_name = :user_name, ';
    $sql .= 'user_intro = :user_intro, user_experience = ';
    $sql .= ':user_experience, user_hobbies = :user_hobbies, user_location = :user_location, user_image = :user_image ';
    $sql .= 'WHERE  user_email = :user_email;';

    $this->db->query($sql);

    $this->db->bind(':user_name', $data['user_name']);
    $this->db->bind(':user_intro', $data['user_intro']);
    $this->db->bind(':user_experience', $data['user_experience']);
    $this->db->bind(':user_hobbies', $data['user_hobbies']);
    $this->db->bind(':user_location', $data['user_location']);
    $this->db->bind(':user_email', $data['user_email']);
    $this->db->bind(':user_image', $data['user_image']);
    $result = $this->db->execute();

    if ($result) {
      return true;
    } else {
      return false;
    }
  }
}