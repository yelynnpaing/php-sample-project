<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 text-center" style="max-width: 600px">
        <h1 class="h4 mb-4">Register</h1>
        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Your Register is Worng. Try Again.
            </div>
        <?php endif ?>
        <form action="_actions/create.php" method= "post">
            <input type="text" class="form-control mb-2" name="name" placeholder="Name" required>
            <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
            <input type="text" class="form-control mb-2" name="phone" placeholder="Phone" required>
            <textarea name="address" id="" class="form-control mb-2" placeholder="Address" required></textarea>
            <input type="password" class="form-control mb-2" name="password" placeholder="Password" required>
            <button class="btn btn-primary w-100 mb-2" type="submit">Register</button>
        </form>
       
        <a href="index.php">Login</a>
    </div>
</body>
</html>