
<?php

class Posts{
    public static function dashbord(){
        /**
        select von DB und leite an dashbord weitr
        query wird auch dashbord weitergeleitet 
        */
        $stmt = adminDB::$PDO->prepare(
            "SELECT *, user.name AS username FROM posts 
            JOIN user ON posts.user_id = user.id 
            ORDER BY posts.id DESC
        ");
        $stmt ->execute();
        $query = $stmt->fetchAll();
        $count = $stmt->rowCount();
        return View::setview('dashbord',['query'=>$query,'count'=>$count]);
    }

    public static function newPost(){
        #wenn nichts eingefügt wird (kein upload) wird redirect
        if(!isset($_POST['insert']))View::setview('dashpord');
        /**
        Image upload
        1. den File in variablen speichern.
        2. Dateierweiterung prüfen , darf nur('jpg','jpeg','png','gif')
        3. bild umbennenen
        4. das bild hochlaaden (im server speichern)
        5. in DB eintragen
        6. bestetigung upload
        */
        $imgName = $_FILES['my_work']['name'] ;
        $imgType = $_FILES['my_work']['type'];
        $imgTemp = $_FILES['my_work']['tmp_name'];
        $imgSize = $_FILES['my_work']['size'];
        if($imgName==''){
            return View::setInhalt('Bild nicht ausgewelt. !');;
        }
        $allowdExt = array('jpg','jpeg','png','gif');
        $imgExt = strtolower(end(explode('.',$imgName)));
        if (! in_array($imgExt,$allowdExt)){
            View::setAlert('Es sind nur Dateien mit setAlert Dateierweiterungen erlaubt: png, jpg, gif, jpeg.<br/>Dateierweiterung ist <strong>'.$imgExt.'</strong> ','danger');
        }
        $randname=self::generateRandomString().'.'.$imgExt;
        $myNewImg = getcwd().'/frontend/img/'.$randname;
        move_uploaded_file($imgTemp,$myNewImg);
        $title  =$_POST['title'];
        $besch  =$_POST['besch'];
        $stmt=adminDB::$PDO->prepare(
            "INSERT INTO posts(user_id,file,title,bes)
            value(:user_id,:file,:title,:besch)
        ");
        $stmt->execute([
            'user_id'=>$_SESSION['id'],
            'file'=>$randname,
            'title'=>$title,
            'besch'=>$besch
        ]);
        View::setAlert('
        <strong>erfolgreich hinzugefügt</strong>
        <ul>
        <li>image Title: '.$title.' </li> 
        <li>image Beschreibung: '.$besch.' </li> 
        <li>image Name: '.$randname.' </li> 
        <li>image Type: '.$imgType.'  </li>
        <li>image Size: '.$imgSize.' MB  </li>
        </ul>
        ','success');


    }
    public static function delPost(){
        #wenn GET req nicht existiert wird redirect
        if (!isset($_GET['item']))View::setview();
        $bild=$_GET['item'];
        //in DB nach Bild Namen suchen         
        $check = adminDB::$PDO->prepare("SELECT * FROM posts Where file=:file");
        $check ->execute(['file'=>$bild]);
        $check = $check->rowCount();
        //wenn keine/mehrerre Bilder den gleichen namen haben 
        if ($check!==1){View::setAlert('Oops ! . Mehrere Bilder mit dem gleichen namen');}
        //Bild vom server/rechner löchen 
        unlink(getcwd().'/frontend/img/'.$bild);
        //Bild von DB löchen
        $stmt=adminDB::$PDO->prepare("DELETE FROM posts WHERE file ='$bild'");
        $stmt->execute();
        //bestätigung msg
        View::setAlert('Würde gelöscht');
        
    }


    public static function generateRandomString($length = 10) {
        //zufälligen namen erstellen
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
?>