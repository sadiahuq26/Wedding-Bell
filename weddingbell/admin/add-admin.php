<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br/>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add']; //displaying session message
                unset($_SESSION['add']); //removing session message
            }
        ?>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter Name"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="Enter username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Enter password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                    
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include('partials/footer.php'); ?>


<?php
    //process the value from and save it in Database
    //Check wether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Button clicked
        //echo "Button clicked";
        //1. get the data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //2. sql query to save data into database
        $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        //3. executing query and saving data into database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //4. check wether the (query is executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
            //Data inserted
            //echo "Data inserted";
            //create a session variable to display message
            $_SESSION['add']="Admin added sucessfully";
            //redirect page to manage admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //failed
            //echo "Failed to insert data";
            //create a session variable to display message
            $_SESSION['add']="Admin not added";
            //redirect page to add admin
            header("location:".SITEURL.'admin/add-admin.php');
        }
    
    }
    

?>