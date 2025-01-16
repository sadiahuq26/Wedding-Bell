<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Catagory</h1>
        <br/>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add']; //displaying session message
                unset($_SESSION['add']); //removing session message
            }
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload']; //displaying session message
                unset($_SESSION['upload']); //removing session message
            }
        ?>
        <br/>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-80">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="name" placeholder="Name"></td>
                </tr>
                <tr>
                    <td>Image: </td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td>Feature: </td>
                    <td><input type="radio" name="featured" value="Yes">Yes</td>
                    <td><input type="radio" name="featured" value="No">No</td>
                </tr>
                <tr>
                    <td>Active: </td>
                    <td><input type="radio" name="active" value="Yes">Yes</td>
                    <td><input type="radio" name="active" value="No">No</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add" class="btn-secondary">
                    </td> 
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST['submit']))
            {
                //echo "clicked";
                $name = $_POST['name'];

                if(isset($_POST['featured']))
                {
                    $featured = $_POST['featured'];
                }
                else
                {
                    $featured = "No";
                }
                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No";
                }

                if(isset($_FILES['image']['name']))
                {
                    $image_name = $_FILES['image']['name'];
                    if($image_name != "")
                    {
                        $ext = end(explode('.',$image_name));
                        $image_name = "weddingbell".rand(000, 999).'.'.$ext;
                        $source_path = $_FILES['image']['tmp_name'];
                        $destination_path = "../images/catagory/".$image_name;
                        $upload = move_uploaded_file($source_path, $destination_path);
                        if($upload==false)
                        {
                            $_SESSION['upload'] = "<div class='error'> failed to Upload image. </div>";
                            header("location:".SITEURL.'admin/add-catagory.php');
                            die();
                        }
                    }
                }
                else
                {
                    $image_name="";
                }

    

                $sql = "INSERT INTO tbl_catagory SET 
                    name='$name',
                    image_name='$image_name',
                    featured='$featured',
                    active='$active'
                ";

                $res = mysqli_query($conn, $sql);

                if($res==TRUE)
                {
                    //create a session variable to display message
                    $_SESSION['add']="<div class='success'>added sucessfully. </div>";
                    //redirect page to manage catagory
                    header("location:".SITEURL.'admin/manage-catagory.php');
                }
                else
                {
                    $_SESSION['add']="<div class='error'>not added";
                    //redirect page to add catagory
                    header("location:".SITEURL.'admin/add-catagory.php');
                }
            } 
        ?>

    </div>
</div>



<?php include('partials/footer.php'); ?>