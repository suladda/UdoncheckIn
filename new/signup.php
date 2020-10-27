<?php
    include('connect.php');
    include('signup_db.php');
?>
<html>
    <head>
        <title>Register</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <div class="header">
            <h3>Sign up</h3>
        </div>
        <form action="signup.php" method="POST">
            <?php include('error.php'); ?>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo$username; ?>">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo$email; ?>">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label for="password_1">Confirm Password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" name="reg_user" class="btn">Register</button>
            </div>
            <p>Already a member? <a href="login.php">go to Login</a></p>

        </form>
    </body>
</html>