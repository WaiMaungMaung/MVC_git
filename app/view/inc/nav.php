<div class="container-fluid" style="background-color: #e3f2fd;">
<nav class="navbar navbar-expand-lg navbar-light container" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">
        <img src="<?php echo URLROOT."/assets/imgs/hero.png"?>" alt="" width="40" height="40">
    <span class="english pl-4"> Project two</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                    if(getUserSession()!=false):
                    echo getUserSession()->name;
                    else:
                    echo "Members";
                    endif;
                    ?>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                    if(getUserSession()==false):
                        ?>
                    <a class="dropdown-item" href="<?php echo URLROOT."/user/login"?>">Login</a>
                    <a class="dropdown-item" href="<?php echo URLROOT."/user/register"?>">Register</a>
                    <?php
                    else:
                    ?>
                    <a class="dropdown-item" href="<?php echo URLROOT."/user/logout"?>">Logout</a>
                    <?php endif;?>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
</div>