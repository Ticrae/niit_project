<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        /* Test (database and table needs to exist before this works)
        public function getUsers() {
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();

            return $result;
        }
        */

        public function register($data) {
            $this->db->query('INSERT INTO users(username, email, password) VALUES(:username, :email, :password)');
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email'] );
            $this->db->bind(':password', $data['password']);

            if($this->db->execute()) {
                return true;
            }else{
                return false;
            }
        }

        public function findByEmail($email) {
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $email);

            $userEmail = $this->db->single();
            if($userEmail){
                return true;
            }else{
                return false;
            }
        }

        public function findByUsername($username) {
            $this->db->query('SELECT * FROM users WHERE username = :username');
            $this->db->bind(':username', $username);

            $user = $this->db->single();
            if($user){
                return true;
            }else{
                return false;
            }
        }

        public function login($username, $password){
            $this->db->query('SELECT * FROM users WHERE username = :username');
            $this->db->bind(':username', $username);

            $row = $this->db->single();

            $hashedPassword = $row->password;
            if(password_verify($password, $hashedPassword)){
                return $row;
            }else{
                return false;
            }
        }

        public function find_all_posts(){
            $this->db->query("SELECT * FROM posts");
            $all_posts = $this->db->resultSet();
            return $all_posts;
        } 
    }
