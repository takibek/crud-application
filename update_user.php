<?php
require("opendatabase.php");


?>
<!DOCTYPE html>
<html>

<head>
    
    <title>users</title>
    
     <style>
            label{
            
        display: inline-block;
        width:80px;
        text-align: right;
      
            }
            .form-center{
                display:flex;
                justify-content: center;
            }
            .submit{
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
       
         <br><a href="users.php">show users</a><br/>
    <a href="insert_user.php">insert new user</a><br/>
    <a href="delete_user.php">delete user</a><br/>
        <div class="form-center">
    <form class="form" action="" method="post">
        <h1 style="color:orange">UPDATE USER:</h1>
        <br><label>ID:</label><input type="number" name="id" ><br>
        <br><label>fullname:</label><input type="text" name="fullname"><br>
        <br><label>email:</label><input type="text" name="email"><br>
        <br><label>username</label><input type="text" name="username"><br>
        <br><label>password:</label><input type="password" name="password"><br>
        <br><label>status:</label><input type="text" name="status"><br>
        <br><label>role:</label><input type="text" name="role"><br>
        <br><label>created:</label><input type="text" name="created"><br>
        <br><div class="submit"><input type="submit" name="update" value="update" style="background:orange"><br></div>
        <?php
        require("update.php");
        ?>
        
        </form>
        </div>
    </body>
</html>
    
 