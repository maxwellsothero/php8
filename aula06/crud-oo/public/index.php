
       
    <?php
        //var_dump($_SERVER);
        $url = explode('?',$_SERVER['REQUEST_URI']);
        require dirname(__DIR__).'/src/Connection/DatabaseConnection.php';
        include dirname(__DIR__).'/src/Notification/Webnotification.php';    
        include  dirname(__DIR__).'/src/Controller/CategoryController.php';

        include dirname(__DIR__).'/config/env.php' ;  
        include dirname(__DIR__).'/config/routes.php' ;      
            
   
