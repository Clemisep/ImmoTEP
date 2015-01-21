<?php

            if(array_key_exists('continue', $_SESSION)) {
                $_GET['p'] = $_SESSION['continue']['p'];
                $_GET['id'] = $_SESSION['continue']['id'];
            } else {
                $_GET['p'] = '0';
            }
            include 'controleur.php';