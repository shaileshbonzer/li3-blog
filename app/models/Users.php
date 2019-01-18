<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 12:43 PM
 */

namespace app\models;

use lithium\data\Model;
use lithium\security\Hash;

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

//We call the applyFilter() method OUTSIDE the class to create our new filter rules
Users::applyFilter('save', function($self, $params, $chain){

    //Temporarily store our entity object so that we can manipulate it
    $record = $params['entity'];

    //If an id doesn't exist yet, then we know we're saving for the first time. If a
    //password is provided, we need to hash it
    if(!$record->id && !empty($record->password)){
        $record->password = Hash::calculate($record->password);
    }

    //Write the modified object back to $params
    $params['entity'] = $record;

    //Allow the next filter to be run
    return $chain->next($self, $params, $chain);
});
