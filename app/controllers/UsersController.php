<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 12:48 PM
 */

namespace app\controllers;

use lithium\action\Controller;
//lets define a shortcut to the Auth class
use lithium\security\Auth;

//and a shortcut to our Users model
use app\models\Users;

class UsersController extends Controller {
    public function index() {
        if(!Auth::check('member')){
            //User is not authenticated, redirect to login
            return $this->redirect('/login/');
        }

        $users = Users::all();

        return compact('users');
    }

    public function add(){
        $register = NULL;

        if($this->request->data ){
            $register = Users::create($this->request->data);

            if($register->save()){
                $this->redirect('/users/');
            }
        }

        $data = $this->request->data;

        return compact('register','data');
    }

    public function login() {
        //assume there's no problem with authentication
        $noauth = false;

        //perform the authentication check and redirect on success
        if(Auth::check('member', $this->request)){
            //Redirect on successful login
            return $this->redirect('/');
        }

        //if theres still post data, and we weren't redirected above, then login failed
        if($this->request->data){
            //Login failed, trigger the error message
            $noauth = true;
        }

        //Return noauth status
        return compact('noauth');
    }

    public function logout(){
        Auth::clear('member');

        return $this->redirect('/');
    }
}
