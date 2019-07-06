 <?php 
                mysqli_set_charset($conn,'utf8');
                $sql = "SELECT * FROM restaurant_main where pin_yin_name Like 'J%';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<a href=>".$row['restaurant_chinese_name']."</a>";
                    }
                }
?>