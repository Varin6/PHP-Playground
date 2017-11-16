<?php
/**
 * Created by PhpStorm.
 * User: Varin
 * Date: 16/11/2017
 * Time: 22:21
 */

class Query
{

    public static function showDatabases($connection) {

        $result = mysqli_query($connection,"SHOW DATABASES"); // run the query and assign the result to $result

           return $result->fetch_all();

    }

}