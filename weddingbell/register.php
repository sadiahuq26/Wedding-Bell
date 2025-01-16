<?php include('partials-front/menu.php') ?>;

    <section class="client-search20">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your Registration.</h2>

                
                <fieldset>
                    <legend> Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Afsana nur Meem" class="input-responsive" required>

                    <div class="order-label">About</div>
                    <input type="text" name="about" placeholder="E.g. job holder" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. sadiahuq@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>

    <?php include('partials-front/footer.php') ?>;