<?php
require_once APPROOT."/view/inc/header.php";
require_once APPROOT."/view/inc/nav.php";

flash("login_success");

$a=getUserSession();
print_r($a);
?>



<?php
require_once APPROOT."/view/inc/footer.php";





