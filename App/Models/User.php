<?php

class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function register($data)
  {
    $this->db->query('INSERT INTO users (user_name, user_password, user_email) VALUES(:name, :password, :email)');

    $this->db->bind(':name', $data['user_name']);
    $this->db->bind(':password', $data['user_password']);
    $this->db->bind(':email', $data['user_email']);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  public function login($email, $password)
  {
    $this->db->query("SELECT * FROM users WHERE user_email = :email");
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    $hashed_password = $row->user_password;
    if (password_verify($password, $hashed_password)) {
      return $row;
    } else {
      return false;
    }
  }


  // Find user by email
  public function findUserByEmail($email)
  {

    $this->db->query('SELECT * FROM users WHERE user_email = :email');

    $this->db->bind(':email', $email);
    $row = $this->db->single();

    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
}