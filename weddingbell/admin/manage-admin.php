<?php include('partials/menu.php'); ?>

        <!--Main Content Section starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br/>

                <?php
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //displaying session message
                        unset($_SESSION['add']); //removing session message
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete']; 
                        unset($_SESSION['delete']); 
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update']; 
                        unset($_SESSION['update']); 
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found']; 
                        unset($_SESSION['user-not-found']); 
                    }

                    if(isset($_SESSION['pwd-not-matched']))
                    {
                        echo $_SESSION['pwd-not-matched']; 
                        unset($_SESSION['pwd-not-matched']); 
                    }

                    if(isset($_SESSION['pwd-changed']))
                    {
                        echo $_SESSION['pwd-changed']; 
                        unset($_SESSION['pwd-changed']); 
                    }

                ?>

                <br/><br/>

                <!-- Button to Add admin -->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br/><br/>

                <table class="tbl-full1">
                    <tr>
                        <th>S.N</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                        //query to get all admin
                        $sql = "SELECT * FROM tbl_admin";
                        //execute the query
                        $res = mysqli_query($conn, $sql);

                        //check wether the query is executed or not
                        if($res==TRUE)
                        {
                            //count rows to check wether we have data in database or not
                            $count = mysqli_num_rows($res);

                            $sn=1; //create a variable and assign the value

                            //check the num of rows
                            if($count>0)
                            {
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    ?>

                                    <tr>
                                        <td><?php echo $sn++; ?>.</td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                            <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-cross">Delete</a>
                                        </td>
                                    </tr>
                                    <?php

                                }
                            }
                            else
                            {

                            }
                        }
                    ?>

                </table>
            </div>
            
        </div>
        <!--Main Content Section ends -->


<?php include('partials/footer.php'); ?>