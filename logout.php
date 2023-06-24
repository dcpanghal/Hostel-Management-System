<?php
    include('partials/db_connect.php');
    session_destroy();
    header('location:'.SITEURL);
?>