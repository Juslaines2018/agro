<?php

namespace app\controllers;

use app\models\Cow;
use Yii;
use app\models\TestForm;
use function app\controllers\debug;
//use yii\web\Controller;

class PostController extends AppController
{
    public function actionTest()
    {
        return $this->render('test');
    }
    //шаблон для определенных страниц контроллера
    public $layout = 'basic';


    public function actionIndex(){
        //return __METHOD__;
        if(Yii::$app->request->isAjax){
            debug(Yii::$app->request->post());
            return 'test';
        }


        $model = new TestForm();

        //стандартные данные в ячейке формы
        /*$model->cows = '10';
        $model->mini_cows = '34';
        $model->save();*/

        if ($model->load(Yii::$app->request->post())){
            if($model->save()){
                Yii::$app->session->setFlash('success','Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('test', compact('model'));
    }

    public function actionShow()
    {
        //для определенной сраницы шаблон сайта
        //$this->layout = 'basic';

        $cows = Cow::find()->all();
        return $this->render('show', compact('cows'));
    }

    public function actionPlant()
    {
        return $this->render('plant');
    }

}