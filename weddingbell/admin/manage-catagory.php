<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Catagory</h1>
        <br/>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add']; //displaying session message
                unset($_SESSION['add']); //removing session message
            }
            if(isset($_SESSION['remove']))
            {
                echo $_SESSION['remove']; 
                unset($_SESSION['remove']); 
            }
            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete']; 
                unset($_SESSION['delete']); 
            }
            if(isset($_SESSION['no-catagory-found']))
            {
                echo $_SESSION['no-catagory-found']; 
                unset($_SESSION['no-catagory-found']); 
            }
        ?>

<br/>

        <!-- Button to Add admin -->
        <a href="<?php echo SITEURL; ?>admin/add-catagory.php" class="btn-primary">Add Catagory</a>
                <br/><br/>

                <table class="tbl-full1">
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM tbl_catagory";
                    $res = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);

                    $sn=1;

                    if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $name = $row['name'];
                            $image_name = $row['image_name'];
                            $featured = $row['featured'];
                            $active = $row['active'];

                            ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $name; ?></td>
                                <td>
                                    <?php 
                                        if($image_name!="")
                                        {
                                            ?>
                                            <img src="<?php echo SITEURL; ?>images/catagory/<?php echo $image_name; ?>" width="100px">
                                            <?php
                                        }
                                        else
                                        {
                                            echo "<div class='error'>no image.</div>";
                                        }
                                    ?>
                                </td>
                                <td><?php echo $featured; ?></td>
                                <td><?php echo $active; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-catagory.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-catagory.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-cross">Delete</a>
                                </td>
                            </tr>

                            <?php
                        }
                    }
                    else
                    {
                        ?>
                        <tr>
                            <td colspan=""><div class="error">NO Catagory added.</div></td>
                        </tr>
                        <?php
                    }


                    ?>
                    
                </table>

    </div>

</div>


<?php include('partials/footer.php'); ?>