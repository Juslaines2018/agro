<?php


namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex(){
        $hi = 'Hello, world';
        return $this->render('index', ['hello' => $hi]);
    }
}
?>