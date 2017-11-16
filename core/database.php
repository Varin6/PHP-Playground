<?php
/**
 * Created by PhpStorm.
 * User: Varin
 * Date: 16/11/2017
 * Time: 22:22
 */

class database
{

    public static function connect($config) {
        $con = mysqli_connect(

            $config['host'],
            $config['user'],
            $config['pass'],
            $config['dbname'

        ]);

        if (!$con) {
            die('Could not connect to database!');
        } else {
            return $con;
        }
    }

    public function close($connection) {
        mysqli_close($connection);
        echo 'Connection closed!';
    }

}


