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
        //Fetch all blog posts from the my_posts table
        $myPosts = MyPosts::all();

        //Send the $my_posts object to our view
        return compact('myPosts');
    }


    public function add() {
        //Assume save status is false
        $saved = false;

        //If we have any posted or querystring data...
        if($this->request->data){
            //Use the MyPost model to create a new dataset
            $my_post = MyPosts::create($this->request->data);

            //Attempt to save the data, and update the $saved variable
            //with the outcome of the save attempt (bool)
            $saved = $my_post->save();
        }

        //Return $saved to our view as part of an associative array/token
        return compact('saved');
    }
}
