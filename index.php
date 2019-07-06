<?php
 include_once 'includes/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset = "utf-8">
        <title></title>
    </head>
    <body>
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
        <?php
            //filter part
        ?>
        </div>    
        <!--index part   -->
        <div id="top">
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
        <h2 id="A">A</h2><ul></ul></div><a href="#top">back to top</a>
        <h2 id="B">B</h2><br/><a href="#top">back to top</a>
        <h2 id="C">C</h2><br/><a href="#top">back to top</a>
        <h2 id="D">D</h2><br/><a href="#top">back to top</a>
        <h2 id="E">E</h2><br/><a href="#top">back to top</a>
        <h2 id="F">F</h2><br/><a href="#top">back to top</a>
        <h2 id="G">G</h2><br/><a href="#top">back to top</a>
        <h2 id="H">H</h2><br/><a href="#top">back to top</a>
        <h2 id="I">I</h2><br/><a href="#top">back to top</a>
        <h2 id="J">J</h2><br/><ul>
            <?php 
                mysqli_set_charset($conn,'utf8');
                $sql = "SELECT * FROM restaurant_main WHERE pin_yin_name Like 'J%';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<a href=>".$row['restaurant_chinese_name']."</a>";
                    }
                }
        ?></ul>
            <br/><a href="#top">返回顶部</a>
        <h2 id="K">K</h2><br/><a href="#top">back to top</a>
        <h2 id="L">L</h2><br/><a href="#top">back to top</a>
        <h2 id="M">M</h2><br/><a href="#top">back to top</a>
        <h2 id="N">N</h2><br/><a href="#top">back to top</a>
        <h2 id="O">O</h2><br/><a href="#top">back to top</a>
        <h2 id="P">P</h2><br/><a href="#top">back to top</a>
        <h2 id="Q">Q</h2><br/><a href="#top">back to top</a>
        <h2 id="R">R</h2><br/><a href="#top">back to top</a>
        <h2 id="S">S</h2><br/><a href="#top">back to top</a>
        <h2 id="T">T</h2><br/><a href="#top">back to top</a>
        <h2 id="U">U</h2><br/><a href="#top">back to top</a>
        <h2 id="V">V</h2><br/><a href="#top">back to top</a>
        <h2 id="W">W</h2><br/><a href="#top">back to top</a>
        <h2 id="S">S</h2><br/><a href="#top">back to top</a>
        <h2 id="Y">Y</h2><br/><a href="#top">back to top</a>
        <h2 id="Z">Z</h2><br/><a href="#top">back to top</a>
           
            
        
        
        </div>
    

    
    </body>

</html>
