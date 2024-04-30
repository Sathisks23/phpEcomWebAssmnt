

<?php
require('partial/nav.php') ;require('partial/connection.php')  ;

if($_GET['id']){
    $sql = "Select * from product where pid = {$_GET['id']}";
    $result = $con->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            ?>

           <div class='viewProduct'>
              <img id='proImage' src="image/<?php echo $row['image']?>" alt="">
              <h2><?php echo $row['name'] ?></h2>
              <small><?php echo $row['price']?></small>
               <p><?php echo $row['description']?></p>

           </div>
<?php
        }
        
    }else{
        header('Location:kgfenterprise.com.php');
    }
}else{
    header('Location:kgfenterprise.com.php');
}

?>

<?php require('partial/footer.php') ?>
