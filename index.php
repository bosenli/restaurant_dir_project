<?php
    include_once 'includes/connection.php';
    
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

        <title>美食网</title>
    </head>
    <body>
        <div class="container">
        <div>
         <a href="#forum">美食论坛</a>
         <a href="#forum">美食占卜</a>
         <a href="#contact">网站联系</a>
         <a href="#registration">登入</a>
         <a href="#report">爆料</a>
            
        
        </div>
        <div>
        <?php 
            //lastest coupon/discount;
        ?>
        </div>
        <div>
        <?php
            //grand opening;    
        ?>
        </div>
        <div>
            <input type="text" placeholder="搜索餐馆名或菜品，如川菜，烧烤">
            <select>
                <option>曼哈顿下城</option>
                <option>曼哈顿中城</option>
                <option>曼哈顿上城</option>
                <option>布鲁克林</option>
                <option>皇后区</option>
            </select>
            <button>搜索</button>
        </div> 
        
        <div>
        <?php
            //filter part
        ?>
        </div>    
        <!--index part   -->
        <div id="top">  <!--float div stick to bottom of screen   -->
        <p>按餐厅名字的首个字母拼音搜索</p>
        <a href="#A">A</a>
        <a href="#B">B</a>
        <a href="#C">C</a>
        <a href="#D">D</a>
        <a href="#E">E</a>
        <a href="#F">F</a>
        <a href="#G">G</a>
        <a href="#H">H</a>
        <a href="#I">I</a>
        <a href="#J">J</a>
        <a href="#K">K</a>
        <a href="#L">L</a>
        <a href="#M">M</a>
        <a href="#N">N</a>
        <a href="#O">O</a>
        <a href="#P">P</a>
        <a href="#Q">Q</a>
        <a href="#R">R</a>
        <a href="#S">S</a>
        <a href="#T">T</a>
        <a href="#U">U</a>
        <a href="#V">V</a>
        <a href="#W">W</a>
        <a href="#X">X</a>
        <a href="#Y">Y</a>
        <a href="#Z">Z</a>
        
        
        </div>
        <div>
        <h2 id="A">A</h2><br/>
        <h2 id="B">B</h2><br/>
        <h2 id="C">C</h2><br/>
        <h2 id="D">D</h2><br/>
        <h2 id="E">E</h2><br/>
        <h2 id="F">F</h2><br/>
        <h2 id="G">G</h2><br/>
        <h2 id="H">H</h2><br/>
        <h2 id="I">I</h2><br/>
        <h2 id="J">J</h2><br/>
            <?php 
                $sql = "SELECT * FROM restaurant_main WHERE pin_yin_name Like 'J%';";
                mysqli_set_charset($conn,'utf8');
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<ul><a href=>".$row['restaurant_chinese_name']."</a></ul>";
                    }
                }
        ?>
            
        <h2 id="K">K</h2><br/>
        <h2 id="L">L</h2><br/>
        <h2 id="M">M</h2><br/>
        <h2 id="N">N</h2><br/>
        <h2 id="O">O</h2><br/>
        <h2 id="P">P</h2><br/>
        <h2 id="Q">Q</h2><br/>
        <h2 id="R">R</h2><br/>
        <h2 id="S">S</h2><br/>
        <h2 id="T">T</h2><br/>
        <h2 id="U">U</h2><br/>
        <h2 id="V">V</h2><br/>
        <h2 id="W">W</h2><br/>
        <h2 id="X">X</h2><br/>
            <?php 
                $sql = "SELECT * FROM restaurant_main WHERE pin_yin_name Like 'X%';";
                mysqli_set_charset($conn,'utf8');
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<ul><a href=>".$row['restaurant_chinese_name']."</a></ul>";
                    }
                }
            ?>
            
        <h2 id="Y">Y</h2><br/>
        <h2 id="Z">Z</h2><br/>
           
            
        
        
        </div>
        <br/><a href="#top">返回顶部</a>

       
        <div id="footer">
        <!--sticky botton: refer https://www.youtube.com/watch?v=cvc46gG2O6w-->
            
        
        </div>

        </div>
    </body>
    

</html>
