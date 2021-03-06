<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" action="<?= base_url('auth/signup_admin') ?>" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="date" name="date" id="name" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <select class="form-control" name="gender">
                            <option hidden>Gender</option>
                            <option value="Laki-Laki">Male</option>
                            <option value="Perempuan">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <label for="address"><i class="zmdi zmdi-email"></i></label>
                        <input type="text" name="address" id="address" placeholder="Your Home Address" />
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password" />
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="<?= base_url('assets') ?>/img/signup-image.jpg" alt="sing up image"></figure>
                <a href="<?= base_url('auth/signin_admin') ?>" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>