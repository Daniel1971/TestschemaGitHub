<?php
ORM::configure('mysql:host=localhost;port=8889;dbname=Testschema');
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
ORM::configure('username', 'root');
ORM::configure('password', 'root');
