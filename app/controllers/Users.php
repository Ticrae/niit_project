<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $posts = $this->userModel->find_all_posts();
        $data = [
            'posts' => $posts
        ];

        $this->view('index', $data);
    }

    public function register() {
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
                    header('location:' . URLROOT . '/users/login');
                }else{
                    die('Sorry unable to register user');
                }
            }
        }
        
        $this->view('users/register', $data);
    }

    public function login(){
        $data = [
            'username' => '',
            'password' => '',
            'username_error' => '',
            'password_error' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $data = [
                'username' => $username,
                'password' => $password,
                'username_error' => '',
                'password_error' => ''
            ];

            if(empty($data['username'])){
                $data['username_error'] = '* Username field cannot be empty';
            }
            if(empty($data['password'])){
                $data['password_error'] = '* Password field cannot be empty';
            }
            if(empty($data['username_error']) && empty($data['password_error'])){
                $loggedInUser = $this->userModel->login($data['username'],$data['password']);
                if($loggedInUser){
                    $this->session($loggedInUser);
                }else{
                    $data['username_error'] = 'Username or Password is incorrect';
                }
            }
        }else{
            $data = [
                'username' => '',
                'password' => '',
                'username_error' => '',
                'password_error' => ''
            ];
        }

        $this->view('users/login', $data);
    }

    public function session($data){
        $_SESSION['id'] = $data->id;
        $_SESSION['username'] = $data->username;
        $_SESSION['email'] = $data->email;
        header('location: ' . URLROOT );
    }

    public function logout() {
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location: ' . URLROOT );
    }
}
