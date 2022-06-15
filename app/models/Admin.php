<?php
    class Admin {
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
            $this->db->query('INSERT INTO admin(username, email, password) VALUES(:username, :email, :password)');
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email'] );
            $this->db->bind(':password', $data['password']);

            if($this->db->execute()) {
                return true;
            }else{
                return false;
            }
        }

        public function find_all_users(){
            $this->db->query("SELECT * FROM users");
            $all_users = $this->db->resultSet();
            return $all_users;
        } 

        public function find_all_admins(){
            $this->db->query("SELECT * FROM admin");
            $all_admins = $this->db->resultSet();
            return $all_admins;
        } 

        public function findByEmail($email) {
            $this->db->query('SELECT * FROM admin WHERE email = :email');
            $this->db->bind(':email', $email);

            $userEmail = $this->db->single();
            if($userEmail){
                return true;
            }else{
                return false;
            }
        }

        public function findByUsername($username) {
            $this->db->query('SELECT * FROM admin WHERE username = :username');
            $this->db->bind(':username', $username);

            $user = $this->db->single();
            if($user){
                return true;
            }else{
                return false;
            }
        }

        public function findByUsernames($username) {
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
            $this->db->query('SELECT * FROM admin WHERE username = :username');
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
        
        public function create_post ($data){
            $this->db->query("INSERT INTO posts (title, description, author) 
            VALUES (:title, :description, :author)
            ");
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':author', $data['author']);
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }  
        public function find_by_id ($id){
            $this->db->query("SELECT * FROM  posts WHERE id = :id");
            $this->db->bind(':id', $id);
            $post = $this->db->single();
            return $post;
        }
        public function update_post ($data){
            $this->db->query('UPDATE posts SET author = :author, 
            description = :description, title = :title WHERE id = :id' );
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':author', $data['author']);
            $this->db->bind(':id', $data['id']);
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
        public function delete_post ($id) {
            $this->db->query('DELETE FROM posts WHERE id = :id ');
            $this->db->bind(":id", $id);
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        } 
    
    }
