 <?php 
               
                
                mysqli_set_charset($conn,'utf8');
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li><a href=>".$row['restaurant_chinese_name']."</a></li>";
                    }
                }
?>