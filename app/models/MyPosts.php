<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 11:37 AM
 */

//Use the app\models namespace at the beginning of all model files
namespace app\models;

use lithium\data\Model;

//All new models must extend the \lithium\data\Model class
class MyPosts extends Model {

    //The MyPosts class is intentionally empty right now

    public $validates = array(
        'title' => array(
            array('notEmpty', 'message'=>'You must include a title.')
        )
    );
}

?>
