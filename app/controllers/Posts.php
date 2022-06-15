<?php
class Posts extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $posts = $this->postModel->find_all_posts();
        $data = [
            'posts' => $posts
        ];

        $this->view('post/index', $data);
    }
    public function create () {
        $data = [
            'title' => "",
            "description" => "",
            'author' => ""
        ];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $title = htmlspecialchars($_POST['title']);
            $author = htmlspecialchars($_POST['author']);
            $description = htmlspecialchars($_POST['description']);
            $data = [
                'title' => $title,
                "description" => $description,
                'author' => $author
            ];
            if($this->postModel->create_post($data)){
                header('location: ' . URLROOT . '/posts/index');
            }else{
                die("Something went wrong, try again");
            }
        }
        $this->view('post/create', $data);
    }
    public function update ($id){
        $post = $this->postModel->find_by_id($id);
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $title = htmlspecialchars($_POST['title']);
            $author = htmlspecialchars($_POST['author']);
            $description = htmlspecialchars($_POST['description']);
            $data = [
                'title' => $title,
                "description" => $description,
                'author' => $author,
                'id' => $id
            ]; 
            if($this->postModel->update_post($data)){
                header('location: ' . URLROOT . '/posts/index');
            }else{
                die("Something went wrong, Try again");
            }
        }
        $data = [
            'post'=> $post,
            'id'=>$id
        ];
        $this->view('post/update', $data);
    }
    public function viewmore($id){
        $post = $this->postModel->find_by_id($id);
        $data = [
            'post'=> $post,
            'id'=>$id
        ];
        $this->view('post/viewmore', $data);
    }
    public function delete ($id) {
        //$post = $this->postModel->find_by_id($id);
        if($_SERVER["REQUEST_METHOD"] ==='POST'){
            if($this->postModel->delete_post($id)){
                header('location: ' . URLROOT . '/posts/index');
            }else{
                die("Something went wrong");
            }
        }
    }
}