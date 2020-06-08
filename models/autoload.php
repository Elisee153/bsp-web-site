
<?php
    function my_autoloader()
    {
    
        include "admins.php";
    }

    spl_autoload_register("my_autoloader");

    