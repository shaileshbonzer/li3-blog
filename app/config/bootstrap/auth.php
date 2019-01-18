<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 12:40 PM
 */

//Enable session support
use lithium\storage\Session;
//Enable auth support
use lithium\security\Auth;

//Configure sessions
Session::config(array(
    'default' => array('adapter' => 'Php')
));

//Configure auth
Auth::config(array(
    'member' => array(
        'adapter' => 'Form', //Specify we're using form authentication method
        'model'   => 'Users', //Specify what model is used for auth
        'fields'  => array('username', 'password') //Specify which fields are used
    )
));
?>