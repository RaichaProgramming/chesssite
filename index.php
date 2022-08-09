<?php
    include 'api\login_descriptor.php';

    $main = new LoginAPI;
    echo $main->login('','');
?>