// Логин и пароль экранируются.
$login = mysql_real_escape_string($_POST[’login’]);
$password = mysql_real_escape_string($_POST[’pass’]);
$query = "SELECT * FROM users WHERE login = ’" .
$login . "’ AND pass = ’" . $pass . "’";
$result = mysql_query($query);
