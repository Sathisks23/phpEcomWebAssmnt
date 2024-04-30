<?php require('partial/nav.php') ;require('partial/connection.php')  ;?>


<div id="productContainer">
    
   <?php
   
   $sql = "Select * from product";
$result = $con->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      ?>

<div id="product">
    <img id='proImage' src="image/<?php echo $row['image']?>" alt="">
      <h3 class='name' ><?php echo $row['name'] ?></h3>
      <a href="productInfo.php?id=<?php echo $row['pid'] ?>">View Details</a>
</div>

<?php
}

}


   ?>
    
</div>
<?php require('partial/footer.php') ?>

