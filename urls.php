<?php

use PhangoApp\PhaRouter\Routes;

//Routes::$urls['welcome\/([0-9]+)\/(\w+)']=array('index', 'page');

Routes::$urls['showmedia\/([^\/]*)\/(.*)']=array('index', 'home');
//Routes::$urls['showmedia\/([^\/]*)\/([^\/]*)\/([^\/]*)']=array('index', 'home');

?>
