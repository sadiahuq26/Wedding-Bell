<?php include('partials-front/menu.php') ?>;

    <section class="client-search text-center">
        <div class="container" >
        <form action="food-search.html" method="POST"></form>
            <input type="search" name="search" placeholder="Search for preference.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>



        </div>
    </section>


    <section class="categories">
        <div class="client-menu" >
            <h1 class="text-center">Services</h1>
            <div class="box-3 float-container">
                <h4>Customer Service</h4><br>
                <p>We provide customer support from
                    10 a.m. to 6 p.m. Clients can contact
                    with us via email, phone and
                    Facebook messenger. We try to give
                    simple and expeditious solutions to
                    your problems.</p>
                    <br>
            </div>
            <div class="box-3 float-container">
                <h4>Special consultancy</h4><br>
                <p>We advice on how to make your
                    profile stand out. If you are a
                    premium customer, we will aid you in
                    search of suitable matches based on
                    your preferences. We will aid you by
                    providing some links of potential
                    bride/groom based on your
                    preference.</p>
                    <br>
            </div>
            <div class="box-3 float-container">
                <h4>Security and privacy ensured</h4><br>
                <p>Your photo, real name and complete
                    profile will not be seen by any other
                    user without your permission. For
                    contact information user have to go
                    through two step security process.
                    We also verify mobile number and
                    take necessary action against
                    doubtful profile.</p>
                    <br>
            </div>
        </div>
    </section>


    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore our Work</h2>


            <?php 
                $sql = "SELECT * FROM tbl_catagory";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $name = $row['name'];
                        $image_name = $row['image_name'];

                        ?>
                        <a href="category-city.html">
                            <div class="box-3 float-container">

                            <?php
                                if($image_name=="")
                                {
                                    echo "<div class='error'>Image not available</div>";
                                }
                                else
                                {
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/catagory/<?php echo $image_name; ?>" alt="work-1" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                                

                                <h3 class="float-text text-white"></php echo $name; ?></h3>
                            </div>
                        </a>

                        <?php
                    }

                }
                else
                {
                    echo "<div class='error'>category not added.</div>";
                }
            ?>
            

            <div class="clearfix"></div>
        </div>
    </section>


    <section class="client-menu">
        <div class="container">
            <h2 class="text-center">Our Clients</h2>

            <div class="client-menu-box">
                <div class="client-menu-img">
                    <img src="images/munnaSir.jpg" alt="MunnaSir" class="img-responsive img-curve">
                </div>

                <div class="client-menu-desc">
                    <h4>Mahmudul Hasan Munna</h4>
                    <br><br>
                    <p class="client-detail">
                        Senior lecturer at EWU, Dhaka, Muslim.
                    </p>
                    <br>
                </div>
            </div>

            <div class="client-menu-box">
                <div class="client-menu-img">
                    <img src="images/pr2.jpg" alt="pr2" class="img-responsive img-curve">
                </div>

                <div class="client-menu-desc">
                    <h4>Zara Khan</h4>
                    <br><br>
                    <p class="client-detail">
                        Entreprenuer, Dhaka, Muslim.
                    </p>
                    <br>
                </div>
            </div>

            <div class="client-menu-box">
                <div class="client-menu-img">
                    <img src="images/pr3.jpg" alt="pr3" class="img-responsive img-curve">
                </div>

                <div class="client-menu-desc">
                    <h4>Mansib Taswar</h4>
                    <br><br>
                    <p class="client-detail">
                        Entreprenuer, Dhaka, Muslim.
                    </p>
                    <br>
                </div>
            </div>

            <div class="client-menu-box">
                <div class="client-menu-img">
                    <img src="images/pr4.jpg" alt="pr4" class="img-responsive img-curve">
                </div>

                <div class="client-menu-desc">
                    <h4>Anamika Das</h4>
                    <br><br>
                    <p class="client-detail">
                        Entreprenuer, Dhaka, Hindu.
                    </p>
                    <br>
                </div>
            </div>

            <div class="client-menu-box">
                <div class="client-menu-img">
                    <img src="images/pr5.jpg" alt="pr5" class="img-responsive img-curve">
                </div>

                <div class="client-menu-desc">
                    <h4>Tausif Sultan</h4>
                    <br><br>
                    <p class="client-detail">
                        Entreprenuer, Michigan state USA, Muslim.
                    </p>
                    <br>
                </div>
            </div>

            <div class="client-menu-box">
                <div class="client-menu-img">
                    <img src="images/pr7.jpg" alt="pr7" class="img-responsive img-curve">
                </div>

                <div class="client-menu-desc">
                    <h4>Miskat Chowdhury</h4>
                    <br><br>
                    <p class="client-detail">
                        Entreprenuer, Dhaka, Muslim.
                    </p>
                    <br>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Clients</a>
        </p>
    </section>


<?php include('partials-front/footer.php') ?>;