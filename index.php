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
    <div class="container mt-4 text-center" style="max-width: 600px">
        <h1 class="h4 mb-4">Login</h1>

        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-warning">
                Email or Password is Incorrect
            </div>
        <?php endif ?>

        <?php if(isset($_GET['suspended'])): ?>
            <div class="alert alert-danger">
                Your account is Suspended.
            </div>
        <?php endif ?>
        
        <?php if(isset($_GET['register'])): ?>
            <div class="alert alert-info">
                Account creation complete. Please Login.
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="post">
            <input type="email" class="form-control mb-2" name="email" 
            placeholder="Email" required>
            <input type="password" class="form-control mb-2" name="password" 
            placeholder="Password" required>

            <button class="btn btn-primary w-100 mb-2" >Login</button>
            <a href="register.php">Register</a>
            
        </form>
    </div>
</body>
</html>