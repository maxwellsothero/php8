
       
    <?php
        //var_dump($_SERVER);
        $url = explode('?',$_SERVER['REQUEST_URI']);
        include dirname(__DIR__).'/src/Notification/Webnotification.php';    
        include dirname(__DIR__).'/config/env.php' ;  
        include dirname(__DIR__).'/config/routes.php' ;      
            
    ?>
  
