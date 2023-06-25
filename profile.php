<?php
    include("vendor/autoload.php");
    use Helpers\Auth;
    
    $user = Auth::check();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-4" style="max-width: 600px">
        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-warning">
                Unable to upload
            </div>
        <?php endif ?>

        <?php if($user->photo) : ?>
            <img src="_actions/photos/<?= $user->photo ?>" alt="" width="200px">
        <?php endif ?>

        <form action="_actions/upload.php" class="input-group my-4 w-50"
        method="post" enctype="multipart/form-data" >
            <input type="file" name="photo" class="form-control"> 
            <button class="btn btn-secondary">upload</button>
        </form>

        <h1 class="h4 mb-4">Profile</h1>
        <ul class="list-group mb-4">
            <li class="list-group-item"><?= $user->name ?></li>
            <li class="list-group-item"><?= $user->email ?></li>
            <li class="list-group-item"><?= $user->phone ?></li>
            <li class="list-group-item"><?= $user->address ?></li>
        </ul>
        <a href="admin.php" class="me-3">User Manager</a>
        <a href="_actions/logout.php" class="text-danger">Logout</a>

    </div>
</body>
</html>