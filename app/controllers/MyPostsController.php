<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 11:44 AM
 */

//Because this is a controller, use the app\controllers namespace
namespace app\controllers;

use lithium\action\Controller;

//Tell the controller about any models we may need
use app\models\MyPosts;

class MyPostsController extends Controller {
    //Define a default 'index' for when a user accesses the /posts/ URL
    public function index() {
        //Return an associative array (to be used as tokens in the view)
        return array(
            'token' => 'Foobar'
        );
    }

}