<?php 
    include "inc/header.php";
?>
 

    <div class="para">
        <?php
            $dsn = "mysql:dbname=userdata; host=localhost;";
            $user = "root";
            $pass = "";
            
            try {
                $pdo=new PDO($dsn,$user,$pass);
           } catch (PDOException $s) {
                echo "Connectin fail....".$s->getMessage();
            }
          $sql="select *from tbl_user";
 
            $result=$pdo->query($sql);
            foreach ($result as $value){
                echo $value['name']."<br>";
            }
       
            
 
        ?>
       
    </div>
 
<?php include "inc/footer.php"; ?>