// Логин и пароль экранируются.
$login = mysql_real_escape_string($_POST[’user’]);
$password = mysql_real_escape_string($_POST[’pass’]);
$query = "SELECT * FROM users WHERE login = ’" .
$user . "’ AND pass = ’" . $pass . "’";
$result = mysql_query($query);
