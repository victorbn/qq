<?php
$url = $_GET['p'];
session_start();
session_destroy();
echo '<script>
            location.href="'.$url.'"
         </script>';