<?php

use Slim\App;

require "vendor/autoload.php";

$config['displayErrorDetails'] = true;

$app = new App(['settings' => $config]);