// Логин и пароль экранируются.
$login = mysql_real_escape_string($_POST[’login’]);
$password = mysql_real_escape_string($_POST[’pass’]);
$query = "SELECT * FROM users WHERE login = ’" .
$login . "’ AND pass = ’" . $pass . "’";
$result = mysql_query($query);



if(!empty($login) and !empty($pass)){
        try{
            $check=$db1->prepare("SELECT * FROM login WHERE login=?");
            $check->bindParam(1,$login);
            $check->execute();
            $username=$check->fetchALL();
        //    echo '<pre>';
       //     print_r($username);
      //      var_dump($username);
     //       echo '</pre>';
            if(password_verify($pass,$username[0][2])){
                $uid=$username[0]['id'];
                $error=FALSE;
            }
        }
        catch(PDOException $e){
            print('Error : ' . $e->getMessage());
            exit();
        }
    }
