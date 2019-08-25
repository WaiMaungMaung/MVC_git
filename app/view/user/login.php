<?php



require_once APPROOT."/view/inc/header.php";
require_once APPROOT."/view/inc/nav.php";

?>



    <div class="container-fluid">
        <div class="container">
            <div class="col-md-8 offset-md-2 my-5">
                <div class="card p-4 bg-light">

                    <h2 class="text-center mb-4 btn-info p-4 rounded">Login </h2>
                    <?php flash("register_success"); ?>
                    <?php flash("login_fail"); ?>
                    <form method="post" action="<?php echo URLROOT.'/user/login'?>">

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control <?php echo empty($data['email_err'])? '':'is-invalid'?> " id="email" aria-describedby="emailHelp" name="email">
                            <span class="text-danger"><?php echo empty($data['email_err'])? '': $data['email_err'] ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control <?php echo empty($data['password_err'])? '':'is-invalid' ?>" id="password" name="password">
                            <span class="text-danger"><?php echo empty($data['password_err'])? '': $data['password_err'] ?></span>
                        </div>

                        <div class="row no-gutters justify-content-between">
                            <a href="<?php echo URLROOT.'/user/register'?>">Don't have acc?Plz Register</a>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-secondary float-right">Submit</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>


<?php
require_once APPROOT."/view/inc/footer.php";
