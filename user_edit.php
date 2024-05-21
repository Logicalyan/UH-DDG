<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>User Edit</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <style>
            .form-control {
                border: solid 1px #454545;
                color: #454545;
            }

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            h1 {
                font-weight: 600;
            }
        </style>        
    </head>

    <body style="min-height: 100vh; display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <h1>EDIT USER</h1>
        <br>

        <?php
            include_once 'koneksi.php';
            $id = $_GET['ID'];
            $data = $koneksi->query ("SELECT * FROM tbl_adrian WHERE ID = $id")->fetch_assoc();
        ?>
        
        
        <form action="handler_user.php" method="post" style="width: 30%;">
            <input type="hidden" name="update_user" value="1">

            <div class="form-floating">
                <input type="number" class="form-control" name="id" value="<?php echo $data['ID'] ?>" placeholder="ID">
                <label for="floatingId">ID</label>
            </div>
            <br>

            <div class="form-floating">
                <input type="text" class="form-control" name="name" value="<?php echo $data['Nama'] ?>" placeholder="Name">
                <label for="floatingName">Name</label>
            </div>
            <br>

            <div class="form-floating">
                <input type="email" class="form-control" name="email" value="<?php echo $data['Email'] ?>" placeholder="Email">
                <label for="floatingEmail">Email</label>
            </div>
            <br>

            <div class="form-floating">
                <input type="password" class="form-control" name="password" value="<?php echo $data['Password'] ?>" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <br>

            <div style="display: flex; flex-direction: row; justify-content: space-between;">
                <a href="data_user.php" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success">Edit User</button>
            </div>
        </form>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</html>