<?php
    include('../config/constants.php');

    //1. get the id of Admin to be deleted
    $id = $_GET['id'];

    //2. create sql query to delete admin
    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    
    $res = mysqli_query($conn, $sql);

    if($res==TRUE)
    {
        //echo "Admin deleted";
        $_SESSION['delete']="<div class='success'>Admin deleted sucessfully</div>";
        //redirect page to manage admin
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //echo "Admin not deleted";
        $_SESSION['delete']="<div class='error'>Admin not deleted</div>";
        //redirect page to manage admin
        header("location:".SITEURL.'admin/manage-admin.php');
    }

    //3. redirect to admin page

?>
