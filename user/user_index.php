<?php 
    require_once 'controllers/authController.php';
    
    if (!isset($_SESSION['id']){
        header ('location: login.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <title>首页</title>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                
            <?php if(isset($_SESSION['message'])):?>
               <div class="alert <?php echo $_SESSION['alert-class'];?>"> 
                    <?php 
                        echo $_SESSION['message']; 
                        unset($_SESSION['message']);
                        unset($_SESSION['alert-class']);
                    ?>
                
                </div>
            <?php endif; ?>
                <h3>欢迎用户, <?php echo $_SESSION['username']; ?></h3>
                
                <!--log out-->
                <a href="user_index.php?logout=1" class="logout">登出</a>
                
                <?php if(!$_SESSION['verified']):?>
                <div class="alert alert-warning">
                    您必须验证你的账户。
                    登录您的电子邮箱，然后点击本站发给您的链接进行验证
                    <strong> <?php echo $_SESSION['email']; ?></strong>
                
                </div>
                <?php endif; ?>
                
                <?php if($_SESSION['verified']):?>
                    <button class="btn btn-block btn-lg btn-primary">恭喜！您已验证！欢迎加入本站！</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    </body>





</html>