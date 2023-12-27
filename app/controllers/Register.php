<?php
class Register extends Controller{
    public function index(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return $this->view('Register/index');
        } 
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->model('User_model');
            if($user->Register($_POST['username'], $_POST['password'])){
                header('Location: ' . BASEURL . '/login');
            }
            else{
                echo "Error!";
                echo("<br><a href=" . BASEURL . "/register>Try again</a>");
            }
        }
        else{
            echo "Error: Request method not recognized.";
        } 
    }
}