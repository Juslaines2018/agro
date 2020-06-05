<?php


namespace app\controllers;


use app\models\EntryForm;
use yii\web\Controller;

class TestController extends Controller
{

    public function actionIndex($name = 'Guest', $age = 25){

        $model = new EntryForm();
        return $this->render('index', compact('model'));

    }

    public function actionPlant(){

        $model = new EntryForm();
        return $this->render('plant', compact('model'));

    }


    public function actionMyTest(){
        return __METHOD__;
    }
}