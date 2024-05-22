<?php

    include_once 'koneksi.php';

    if (isset($_POST['register_user'])) {
        $id = $_POST['ID'];
        $name = $_POST['Nama'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];

        $insert = $koneksi -> query ("INSERT INTO tbl_adrian (ID, Nama, Email, Password)
        VALUES ($id, '$name', '$email', '$password')");

        if ($insert) {
            header ("Location: data_user.php");
        }
    }

    if (isset($_POST['add_user'])) {
        $id = $_POST['ID'];
        $name = $_POST['Nama'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];

        $insert = $koneksi -> query ("INSERT INTO tbl_adrian (ID, Nama, Email, Password)
        VALUES ($id, '$name', '$email', '$password')");

        if ($insert) {
            header ("Location: data_user.php");
        }
    }

    if (isset($_POST['update_user'])) {
        $id = $_POST['ID'];
        $name = $_POST['Nama'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];

        $update = $koneksi -> query ("UPDATE tbl_adrian SET 
        Nama = '$name', 
        Email = '$email', 
        Password = '$password'
        WHERE ID = $id
        ");

        if ($update) {
            header ("Location: data_user.php");
        }
    }

    if (isset($_GET['delete'])) {
        $delete = $koneksi -> query ("DELETE FROM tbl_adrian WHERE ID = '$_GET[id]'");

        if ($delete) {
            header("Location: data_user.php");
        }
    }