<?php

$GLOBALS['config'] = array(
    /**
     * List of servers available for all users
     */
    'servers' => array('Local Beanstalkd' => 'beanstalk://10.25.177.169:11304'),
    /**
     * Saved samples jobs are kept in this file, must be writable
     */
    'storage' => dirname(__FILE__) . DIRECTORY_SEPARATOR . 'storage.json',
    /**
     * Optional Basic Authentication
     */
    'auth' => array(
        'enabled' => false,
        'username' => 'admin',
        'password' => 'password',
    ),
    /**
     * Version number
     */
    'version' => '1.7.6',
);
