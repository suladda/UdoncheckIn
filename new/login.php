<?php
    include('connect.php');
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
    <body class="text-center">
        <div class="header">
            <h3>Login</h3>
        </div>
        <form action="udon_db.php">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" name="login_user" class="btn">login</button>
            </div>
            <p>Not yet a member? <a href="signup.php">Please sign up</a> </p>

        </form>
    </body>
</html>