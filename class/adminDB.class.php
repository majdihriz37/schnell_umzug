
<?php
class adminDB{
    public static $PDO;
    public static function connect(){
        try{
            $db='Majdi_schöne_gallery';
            SELF::$PDO = new PDO("mysql:host=localhost;charset=utf8","root","root");
            SELF::$PDO->exec("CREATE DATABASE IF NOT EXISTS ".$db);
            SELF::$PDO->exec("USE ".$db);
            #user tabelle( id , name , pass , email )
            SELF::$PDO->exec("CREATE TABLE IF NOT EXISTS`user` ( 
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `name` TEXT NOT NULL,
                `pass` TEXT NOT NULL, 
                `email` TEXT NOT NULL,
                PRIMARY KEY (`id`)) ENGINE = InnoDB");
            #user posts( id , user_id(tabelle user) , file(img name) , titile , bes  )
            SELF::$PDO->exec("CREATE TABLE IF NOT EXISTS`posts` ( 
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `user_id` INT(11) NOT NULL,
                `file` TEXT NOT NULL,
                `title` TEXT NOT NULL, 
                `bes` TEXT NOT NULL,
                PRIMARY KEY (`id`)) ENGINE = InnoDB");
            #FOREIGN KEY bzg(posts mit user) 
            SELF::$PDO->exec("ALTER TABLE `posts`
                ADD CONSTRAINT `user_biild` 
                FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) 
                ON DELETE CASCADE ON UPDATE CASCADE");
        }catch(PDOException $e){
            echo View::setAlert('GETRENNT'.$e->getMessage());
        }
    }
} 
?>