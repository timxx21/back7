// проверяем правильность заполнения
if (!preg_match("/^[\w\.-]+@([\w-]+\.)+[\w-]{2,4}$/", $_POST['email']) || empty($_POST['email'])) {
  print('Заполните email.<br/>');
  $errors = TRUE;
}
//
if (empty($_POST['email']) || !preg_match("/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/", $_POST['email'])) {
        setcookie('email_error', '1', time() + 24 * 60 * 60);
        $errors = TRUE;
    } else {
        setcookie('email_value', $_POST['email'], time() + 30 * 24 * 60 * 60);
    }

// Cанитизация заключается путем приведения типов, выбрасыванием всех тегов или заменой спецсимволов
$email = strip_tags($_POST['email']);
$year = intval($_POST['year']);
