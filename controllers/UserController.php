<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\User;


class UserController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model=new User();
    }

    public function index()
    {
        $users=$this->model->getAll();


        return $this->render('users/lists', [
            'users' =>$users
        ]);
    }

    public function create()
    {
        return $this->render('users/create');
    }

    public function store(Request $request)
    {
//        $res=$this->model->loadData($request->getBody());
        $data=$request->getBody();
        $this->model->save([
            'firstname'=>$data['firstname'],
            'lastname'=>$data['lastname'],
            'Email'=>$data['Email'],
        ]);
    }

}