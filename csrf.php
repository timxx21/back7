// На стороне сервера необходимо сравнить значение токенов
session_start();

if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
   // токены совпали
} else {
   // токены не совпали
}
