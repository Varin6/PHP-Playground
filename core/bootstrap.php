<?php

$config = require 'core/config.php';
require 'core/database.php';

return database::connect($config['database']);


