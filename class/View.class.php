<?php
class View{
   //include die aufgerufte View
   public static function setview($view='dashbord',$data=[]){//[ view.html , config[] ]
      include "frontend/tpl/head.php";
      include "frontend/view/".$view.".php";
      include "frontend/tpl/footer.php"; 
      exit;
   }

   //set den eingegebenen Inhalt als view
   public static function setInhalt($view){//[ der text ]
      include "frontend/tpl/head.php";
      echo '<div style="padding-top:200px">'.$view.'</div>';
      include "frontend/tpl/footer.php"; 
      exit;
   }

   //set den eingegebenen Text in alert-box und nach 2 Sek redirect  
   public static function setAlert($error,$type='danger'){//[der text , type(bootstrap klassen)]
      include "frontend/tpl/head.php";
      echo '<div style="padding-top:200px" class="alert alert-'.$type.' alert-dismissible fade show" role="alert">'.$error.'</div>';
      include "frontend/tpl/footer.php";
      header("refresh:2;url=index.php");
      exit();
   }
}
?>