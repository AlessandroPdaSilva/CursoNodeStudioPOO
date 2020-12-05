<?php

require_once "vendor/autoload.php";

use Cocur\Slugify\Slugify;

$slug = new Slugify();
echo $slug->slugify('sukky corporation',"_"); // hello-world