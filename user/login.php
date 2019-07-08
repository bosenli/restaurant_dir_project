<?php require_once 'controllers/authController.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <title>会员登录</title>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
                <form action="login.php" method="post">
                    <h3 class="text-center">会员登录</h3>
                    
                     <?php if(count($errors)>0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error):?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach;?>
                        </div
                    <?php endif; ?>
                            
                    <div class="form-group">
                        <label for="username">用户名或者邮箱</label>
                        <input type="text" name="username"  value="<?php echo $username;?>" class="form-control form-control-lg">
                    </div>
                   
                  
                     <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>
                     
                    <div class="form-group">
                       <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">登录</button>
                    </div>
                    <p class="text-center">还不是会员?<a href="signup.php">免费注册</a></p>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    </body>





</html>