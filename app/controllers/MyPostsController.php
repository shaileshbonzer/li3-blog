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
//lets define a shortcut to the Auth class
use lithium\security\Auth;

//Tell the controller about any models we may need
use app\models\MyPosts;

class MyPostsController extends Controller {
    //Define a default 'index' for when a user accesses the /posts/ URL
    public function index() {
        if (!Auth::check('member')){
            //User is not authenticated, redirect to login
            return $this->redirect('/login/');
        }

        //Fetch all blog posts from the my_posts table
        $myPosts = MyPosts::all();

        //Send the $my_posts object to our view
        return compact('myPosts');
    }

    public function add() {
        //Assume save status is false
        $saved = false;
        $myPost = array();

        //If we have any posted or querystring data...
        if($this->request->data){
            //Use the MyPost model to create a new dataset
            $myPost = MyPosts::create($this->request->data);

            //Attempt to save the data, and update the $saved variable
            //with the outcome of the save attempt (bool)
            $saved = $myPost->save();
        }

        //Return $saved to our view as part of an associative array/token
        return compact('saved','myPost');
    }

    public function view() {
        //Dont run the query if no post id is provided
        if($this->request->args[0]){
            //Get single record from the database where post id matches the URL
            $myPost = MyPosts::first($this->request->args[0]);

            //Send the retrieved post data to the view
            return compact('myPost');
        }

        //since no post id was specified, redirect to the index page
        $this->redirect(array('MyPosts::index'));
    }

    public function delete() {
        //Dont run the query if no post id is provided
        if($this->request->args[0]){
            //Find matching posts, then delete them
            $myPost = MyPosts::find($this->request->args[0])->delete();

            //Send the retrieved post data to the view
            $this->redirect( array('MyPosts::index' ) );
        }
    }

    public function edit() {

        //Attempt to fetch the specified post
        $myPost = MyPosts::find($this->request->args[0]);

        //if the post couldn't be fetched, redirect to index
        if (!$myPost) {
            $this->redirect('MyPosts::index');
        }

        //If we have post data, attempt to save
        if (($this->request->data) && $myPost->save($this->request->data)) {
            //If save was successful, redirect to the new post
            $this->redirect( array(
                'MyPosts::view',
                'args' => array($myPost->id)
            ));
        }

        //If we haven't been redirected, then send the post info to the view
        return compact('myPost');
    }
}
