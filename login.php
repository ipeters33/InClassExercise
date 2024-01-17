<?php
define(PAGE_NAME, 'Login Page')
extract($_REQUEST)
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo PAGE_NAME?></title>
</head>
<body>

  <form action ="" method = "get">
    <label for="username">Username: <input type="text" name = 'username' id = "username"></label>
    <label for="password">Password: <input type="text" name ='password' id = "password"></label>
    <input type="submit" value="submit">
</form>

</body>
</html>