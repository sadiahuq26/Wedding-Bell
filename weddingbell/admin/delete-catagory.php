<?php

    include('../config/constants.php');


    //echo "delete";
    if(isset($_GET['id']) && isset($_GET['image_name']))
    {
        //echo "delete";
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        if($image_name != "")
        {
            $path = "../images/catagory/".$image_name;
            $remove = unlink($path);

            if($remove==false)
            {
                $_SESSION['remove'] = "<div class='error'>Failed to remove image.</div>";
                header('location:'.SITEURL.'admin/manage-catagory.php');
                die();
            }
        }

        $sql = "DELETE FROM tbl_catagory WHERE id=$id";

        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $_SESSION['delete'] = "<div class='success'>deleted sucessfully</div>";
            header('location:'.SITEURL.'admin/manage-catagory.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'>not deleted</div>";
            header('location:'.SITEURL.'admin/manage-catagory.php');
        }

    }
    else
    {
        header('location:'.SITEURL.'admin/manage-catagory.php');
    }
?>