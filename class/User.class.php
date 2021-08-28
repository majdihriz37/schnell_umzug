
<?php

class User{
    public static function anmelden(){
        #wenn nichts eingefügt wird  wird redirect
        if(!isset($_POST['anmelden']))View::setview();
        $email  =$_POST['email'];
        $pass  =$_POST['pass'];
        //überpruffen ob email existiert
        $check = adminDB::$PDO->prepare("SELECT * FROM user Where email=:email AND pass=:pass");
        $check ->execute([
            'email'=>$email,
            'pass'=>$pass
            ]);
        $count = $check->rowCount();
        if ($count==1){
            //wenn die eingegebene daten nur [ein] user trifft (anmelden)
            //session daten ausfuhlen
            $all=$check->fetch();
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $all['id'];
            $_SESSION['name'] = $all['name'];
            View::setAlert('angemeldet SESSION id :'.$_SESSION['id'],'success');
        }else{
            View::setAlert('Benutzername oder Passwort ungültig');
            }
    }

    public static function abmelden(){
        session_start();
        session_unset(); 
        session_destroy();
        header('Location: index.php');
        exit();
    }

    public static function adduser(){
        #wenn nichts eingefügt wird  wird redirect
        if(!isset($_POST['adduser']))View::setview();
        $name  =$_POST['name'];
        $mail  =$_POST['mail'];
        $pass  =$_POST['pass'];
        //überpruffen ob email besetzt
        $check = adminDB::$PDO->prepare("SELECT * FROM user Where email=:email");
        $check ->execute(['email'=>$mail]);
        $check = $check->rowCount();
        if ($check>0){View::setAlert('Die von ihnen gewählte Email Adresse ist bereit vergeben');}
        $stmt=adminDB::$PDO->prepare("INSERT INTO user(name, pass, email)value(:name,:pass,:mail)");
        $stmt->execute([
            'name'=>$name,
            'pass'=>$pass,
            'mail'=>$mail
        ]);
        header('Location:index.php?do=tor&&new=1');
        exit;
    }
}
?>