<?php
session_start();

require 'config/db.php';

$errors = array();
$username = "";
$email = "";
//if user clicks on the sign up botton receive all the values on the sign up form
 if(isset($_POST['signup-btn'])){
    //receive value from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];
    
    //validation on thoes values
    if (empty($username)){
        $errors['username'] = "必须填写用户名";
        
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "邮箱地址无效";
    }
     if (empty($email)){
        $errors['email'] = "必须填写邮箱";
        
    }
     if (empty($password)){
        $errors['password'] = "密码必须填写";
        
    }
    if ($password !== $passwordConf){
        $errors['password']= "确认密码不符合前密码"; }
    
    //unique email validation
    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn ->prepare($emailQuery);
    $stmt -> bind_param('s',$email);
    $stmt ->execute();
    $result = $stmt ->get_result();
    $userCount = $result->num_rows;
    $stmt ->close();
    
    
    if($userCount > 0 ){
        $errors['email'] = "邮箱已经注册";
        
    }
     
     //check no errors on the form
    if(count($errors) === 0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = false;
        
        $sql = "INSERT INTO users (username,email, verified, token, password) VALUES (?,?,?,?,?)";
        $stmt = $conn ->prepare($sql);
        $stmt -> bind_param('ssbss',$username, $email, $verified, $token, $password); //string ,string, boolean,string, string
        if ($stmt ->execute()){
            
           //login user
            $user_id = $conn ->inser_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;
           // set flash message
            $_SESSION['message']= "恭喜！你已登录！";
            $_SESSION['alert-class'] = "alert-success";
            header('location:user_index.php');
            exit();
    }else {
            $errors['db_error'] = "数据库错误: 注册失败";
        }
}
}
//if user clicks on the login button

if(isset($_POST['login-btn'])){
    //receive value from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //no email validation?
    if (empty($username)){
        $errors['username'] = "必须填写用户名";
        
    }
    
     if (empty($password)){
        $errors['password'] = "密码必须填写";
        
    }
    
    if (count($errors) === 0){
         $sql = "SELECT * FROM users WHERE email=? OR username =? LIMIT 1";
    $stmt = $conn ->prepare($sql);
    $stmt ->bind_param('ss', $email, $username);
    $stmt ->execute();
    $result = $stmt ->get_result();
    $user = $result ->fetch_assoc();
    
    //verify password
    if (password_verify($password, $user['password'])){
        //login scuess

            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] = $user['verified'];
           // set flash message
            $_SESSION['message']= "恭喜！你已登录！";
            $_SESSION['alert-class'] = "alert-success";
            header('location:user_index.php');
            exit();
    } else {
        $errors['login_fail'] = "登入资料含有错误";
    }
    }
   
}

//logout user
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    header('location:login.php');
    exit();
}