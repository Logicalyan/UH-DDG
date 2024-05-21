<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Data User</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <style>
            * {
                padding: 0;
                margin: 0;
                font-family: 'Poppins', sans-serif;
            }

            .container{
                margin-top:50px; 
                display: flex; 
                justify-content: center; 
                align-items: center; 
                flex-direction: column;
            }

            header{
                margin-top: 50px;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <?php 
            include_once 'koneksi.php';
            $data = $koneksi->query ("SELECT * FROM tbl_adrian");
        ?>

            <header><h1>DATA USER</h1>
        </header>
            <div class="container">

                <table class="table" style="width: 80%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                <?php
                foreach ($data as $item) {
                ?>
                
                <tr>
                    <td><?php echo $item['ID'] ?></td>
                    <td><?php echo $item['Nama'] ?></td>
                    <td><?php echo $item['Email'] ?></td>
                    <td>
                        <a href="user_edit.php?ID=<?php echo $item['ID'] ?>" class="btn btn-warning">Edit</a>
                        <a href="handler_user.php?delete=1&id=<?php echo $item['ID'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
                </table>


                <a href="user_add.php" class="btn btn-success">Add User</a>
            </div>
        
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>