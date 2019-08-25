<?php
require_once "../app/bootstrap.php";


require_once APPROOT."/view/inc/header.php";
require_once APPROOT."/view/inc/nav.php";
$b=new database();
?>

    <h1 class="text-primary">Register Page</h1>

<div class="container-fluid">
    <div class="container">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card p-4 bg-light">
                <h2 class="text-center mb-4 btn-info p-4 rounded">Register </h2>
                <form method="post" action="<?php echo URLROOT.'/user/register'?>">
                    <div class="form-group">
                        <label for="name">UserName</label>
                        <input type="text" class="form-control text-center <?php echo empty($data['name_err'])? '':'is-invalid' ?>" id="name" name="name">
                        <span class="text-danger"><?php echo empty($data['name_err'])? '': $data['name_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control <?php echo empty($data['email_err'])? '':'is-invalid' ?>" id="email" aria-describedby="emailHelp" name="email">
                        <span class="text-danger"><?php echo empty($data['email_err'])? '': $data['email_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control <?php echo empty($data['password_err'])? '':'is-invalid' ?>" id="password" name="password">
                        <span class="text-danger"><?php echo empty($data['password_err'])? '': $data['password_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm  Password</label>
                        <input type="password" class="form-control <?php echo empty($data['cpassword_err'])? '':'is-invalid' ?>" id="cpassword" name="cpassword">
                        <span class="text-danger"><?php echo empty($data['cpassword_err'])? '': $data['cpassword_err'] ?></span>
                    </div>
                    <div class="row no-gutters justify-content-between">
                        <a href="<?php echo URLROOT.'/user/login'?>">Already Register?Plz Login</a>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-secondary float-right">Submit</button>
                            <button type="submit" class="btn btn-outline-secondary mr-3">Cancel</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>


<?php
require_once APPROOT."/view/inc/footer.php";
