<?php
class Admins extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Admin');
    }

    public function index() {
        $posts = $this->userModel->find_all_posts();
        $users = $this->userModel->find_all_users();
        $admins = $this->userModel->find_all_admins();
        $data = [
            'posts' => $posts,
            'users' => $users,
            'admins' => $admins
        ];

        $this->view('admin/index', $data);
    }

    public function admin_reg() {
        $data = [
        'username' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'usernameError' => '',
        'emailError' => '',
        'passwordError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $confirm_password = htmlspecialchars($_POST['confirm_password']);

            $data = [
                'username' => trim($username),
                'email' => trim($email),
                'password' => trim($password),
                'confirm_password' => trim($confirm_password),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => ''
            ];
    
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
    
            if(empty($data['username'])){
                $data['usernameError'] = '* Username field cannot be empty';
            }
            if(empty($data['email'])){
                $data['emailError'] = '* Email field cannot be empty';
            }
            if(empty($data['password'])){
                $data['passwordError'] = '* Password field cannot be empty';
            }elseif(strlen($data['password']) < 8){
                $data['passwordError'] = '* Password cannot be less than 8 characters';
            }
            if(!preg_match($nameValidation, $data['username'])){
                $data['usernameError'] = '* Username should only contain alphabets and numbers';
            }
            if(preg_match($passwordValidation, $data['password'])){
                $data['passwordError'] = '* Password should include letters and numbers';
            }
            if($data['password'] !== $data['confirm_password']){
                $data['passwordError'] = '* Passwords do not match';
            }
            if($this->userModel->findByUsername($data['username'])){
                $data['usernameError'] = '* Username already exist';
            }
            if($this->userModel->findByEmail($data['email'])){
                $data['emailError'] = '* Email already used';
            }
            if(empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError'])){
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if($this->userModel->register($data)){
                    header('location:' . URLROOT . '/admins/admin_login');
                }else{
                    die('Sorry unable to register user');
                }
            }
        }
        
        $this->view('admin/admin_reg', $data);
    }

    public function admin_login(){
        $datas = [
            'username' => '',
            'password' => '',
            'username_error' => '',
            'password_error' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $datas = [
                'username' => $username,
                'password' => $password,
                'username_error' => '',
                'password_error' => ''
            ];

            if(empty($datas['username'])){
                $datas['username_error'] = '* Username field cannot be empty';
            }
            if(empty($datas['password'])){
                $datas['password_error'] = '* Password field cannot be empty';
            }
            if(empty($datas['username_error']) && empty($datas['password_error'])){
                $loggedInAdmin = $this->userModel->login($datas['username'],$datas['password']);
                if($loggedInAdmin){
                    $this->session($loggedInAdmin){
                        header('location: ' . URLROOT . '/admins')
                    };
                }else{
                    $datas['username_error'] = 'Username or Password is incorrect';
                }
            }
        }else{
            $datas = [
                'username' => '',
                'password' => '',
                'username_error' => '',
                'password_error' => ''
            ];
        }

        $this->view('admin/admin_login', $datas);
    }

    public function session($datas){
        $_SESSION['id'] = $datas->id;
        $_SESSION['username'] = $datas->username;
        $_SESSION['email'] = $datas->email;
        header('location: ' . URLROOT . '/admins');
    }

    public function logout() {
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location: ' . URLROOT . '/admins');
    }

    public function create () {
        $data = [
            'title' => '',
            'description' => '',
            'author' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $title = htmlspecialchars($_POST['title']);
            $author = htmlspecialchars($_POST['author']);
            $description = htmlspecialchars($_POST['description']);
            $data = [
                'title' => $title,
                'description' => $description,
                'author' => $author
            ];
            if($this->userModel->create_post($data)){
                header('location: ' . URLROOT . '/admins');
            }else{
                die("Something went wrong, try again");
            }
        }
        $this->view('admin/create', $data);
    }
    public function update ($id){
        $post = $this->userModel->find_by_id($id);
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
            if($this->userModel->update_post($data)){
                header('location: ' . URLROOT . '/admins');
            }else{
                die("Something went wrong, Try again");
            }
        }
        $data = [
            'post'=> $post,
            'id'=>$id
        ];
        $this->view('admin/update', $data);
    }
    public function viewmore(){
        $post = $this->userModel->find_all_posts();
        $data = [
            'posts'=> $post,
        ];
        $this->view('admin/viewmore', $data);
    }
    public function delete ($id) {
        //$post = $this->postModel->find_by_id($id);
        if($_SERVER["REQUEST_METHOD"] ==='POST'){
            if($this->userModel->delete_post($id)){
                header('location: ' . URLROOT . '/admins/index');
            }else{
                die("Something went wrong");
            }
        }
    }
}
?>