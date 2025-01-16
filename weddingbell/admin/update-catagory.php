<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Category</h1>

        <?php
            if(isset($_GET['id']))
            {
                //echo "data"; 
                $id = $_GET['id'];
                $sql = "SELECT * FROM tbl_catagory WHERE id=$id";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    $row=mysqli_fetch_assoc($res);

                    $name = $row['name'];
                    $current_image = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                }
                else
                {
                    $_SESSION['no-catagory-found'] = "<div class='error'>Catagory </div>";
                    header('location:'.SITEURL.'admin/manage-catagory.php');
                
                }
            }
            else
            {
                header('location:'.SITEURL.'admin/manage-catagory.php');
            }
        ?>

        <br><br>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                    <tr>
                        <td>Full Name: </td>
                        <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                    </tr>
                    <tr>
                        <td>Current Image: </td>
                        <td><?php
                                if($current_image != "")
                                {
                                    ?>

                                    <img src="<?php echo SITEURL; ?>images/catagory/<?php echo $current_image; ?>" width="150px">

                                    <?php

                                }
                                else
                                {
                                    echo "<div class='error'>Image not added</div>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>New Image: </td>
                        <td><input type="file" name="image"></td>
                    </tr>
                    <tr>
                        <td>Featured: </td> <!-- akhn thk shuru .. video 6>1:00:01-->
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
                            <input type="submit" name="submit" value="Update" class="btn-secondary">
                        </td> 
                    </tr>
                </table>
        </form>

    </div>

</div>


<?php include('partials/footer.php'); ?>