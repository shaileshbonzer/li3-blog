<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 12:43 PM
 */

namespace app\models;

use lithium\data\Model;

class Users extends Model {

    //Basic validation
    public $validates = array(
        'username' => array(
            array('notEmpty', 'message'=>'You must include a username.')
        ),
        'password' => array(
            array('notEmpty', 'message'=>'You must include a password.')
        ),
    );

}
