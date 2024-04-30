<?php require('partial/nav.php');require('partial/connection.php')  ;

?>


<div id="blogContainer">
    <?php
    $sql = "Select * from blog";
    $result  = $con->query($sql);
    
    if($result->num_rows>0){
        while($row= $result ->fetch_assoc()){
            ?>
    
            <div>
                <h2 class='name'><?php echo $row['title'] ?></h2>
                <img src="image/<?php echo $row['image'] ?>" alt="">
                <a href="bloginfo.php?id=<?php echo $row['b_id'] ?>">See More</a>
                
            </div>
    
            <?php
        }
    }
    ?>

</div>

<?php require('partial/footer.php') ?>
