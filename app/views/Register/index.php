<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Register</title>
    <link rel="stylesheet" type="text/css" href=<?php echo(BASEURL . "/public/css/style.css") ?>>
</head>
<body>
    <form action="<?php echo BASEURL ?>/register" method="POST">
        <h1>Register Now!!!</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
