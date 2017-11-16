<?php
/**
 * Created by PhpStorm.
 * User: Varin
 * Date: 12/11/2017
 * Time: 12:43
 */


$connection = require 'core/bootstrap.php';
require 'core/query.php';
require 'core/helperfunctions.php';


$databases = Query::showDatabases($connection);

pr($databases);



?>





