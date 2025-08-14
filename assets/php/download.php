<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['demo'])) {
        header('Content-type: application/zip');
        header('Content-Disposition: attachment; filename="demo_dataset.zip"');
        
        readfile('/var/www/building3d/html/assets/datasets/demo_dataset.zip');
    }
    else if(isset($_GET['entry'])) {
        session_start();
        if (!isset($_SESSION['email'])) {
        header('Location: ../../../login.php');
        exit();
        }
        header('Location: ../datasets/entry_level.zip');
    }
    else if(isset($_GET['Tallinn'])) {
        session_start();
        if (!isset($_SESSION['email'])) {
        header('Location: ../../../login.php');
        exit();
        }
        header('Location: ../datasets/Tallinn.zip');
    }
    else if(isset($_GET['mesh'])) {
        session_start();
        if (!isset($_SESSION['email'])) {
        header('Location: ../../../login.php');
        exit();
        }
        header('Location: ../datasets/BuildingMesh.zip');
    }
    else if(isset($_GET['pointclouds'])) {
        session_start();
        if (!isset($_SESSION['email'])) {
        header('Location: ../../../login.php');
        exit();
        }
        header('Location: ../datasets/PointClouds.zip');
    }
}
?>