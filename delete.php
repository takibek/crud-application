
    <?php
//  query of deleting user
    if(isset($_POST['delete'])){
        $id=$_POST['id'];
     $query="delete from User where id=".$id;
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("problem of updating data");
    }
    }
    
    ?>