<?php
    $koneksi = new mysqli (
        "localhost",
        "root",
        "",
        "adrian_db"
    );

    if ($koneksi -> connect_error) {
        echo $koneksi -> error;
    } else {
    }