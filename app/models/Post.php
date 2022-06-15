<?php
class Post {
    private $db;
    public function __construct(){
        $this->db = new Database;
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