<?php
class Controller{
    function __construct(){ 
        if(!isset($_GET['do'])){
            View::setview('dashbord');
        }else{
            if($_GET['do']=='sent'){
                View::setview('tor');
            }else{
                return 2323;
            }
        }

        //users
        
    }
}