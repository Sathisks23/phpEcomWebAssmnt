<?php require('partial/nav.php');require('partial/connection.php')  ;  

if($_GET['id']){
    $sql  = "Select * from blog where b_id={$_GET['id']}";
    $result = $con->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
?>
        <div class='viewblog'>
          <div class="blog_header"><h4><?php echo $row['authour'] ?></h2> <small><?php echo $row['created_at'] ?></small></div>
            <h2 class='blog_title'><?php echo $row['title']  ?></h2>
            <img src="image/<?php echo $row['image'] ?>" alt="">
            <p><?php echo $row['content'] ?></p>
            

        </div>
<?php
    
        }
    }else{
    header('Location:kgfenterprise.com');

    }

}else{
    header('Location:kgfenterprise.com');
}





?>

<?php require('partial/footer.php') ?>
