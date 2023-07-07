<?php

$usuario = $_SESSION['username'];
require_once './../../config/connect.php';

?>
<header class="site-header">
    <div class="container-fluid">

        <a href="./../../../login.php" class="site-logo">
            <img class="hidden-md-down" src="../../public/img/logo-2-1.png" alt="">

        </a>

        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown user-menu">

                    </div>
                </div>
                <div class="mobile-menu-right-overlay"></div>
 
                        <span class="font-icon font-icon-user"> 
                            <?php
                            echo $usuario;
                            ?>
                        </span>
                </div>

            </div>
        </div>
    </div>
</header>