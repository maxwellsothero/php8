<?php
declare(strict_types=1);

class DatabaseConnection
{
    public static function open():PDO
    {
        $host = 'localhost'; //http://db.site.com
        $user =  'root';
        $pass = 'maxwell123';
        $db_name = 'db_iw_bebidas';

        $dns = "mysql:host={$host};dbname={$db_name}";
        //$connection =new PDO($dns, $user, $pass);
        return new PDO($dns, $user, $pass);

        
        
        //php-pdo
        //php-mysql

        // ;extension=pdo_mysql
        // ;extension=mysqli
        // ;extension=curl
        // ;extension=openssl
    }
}
