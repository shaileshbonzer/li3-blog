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
}
