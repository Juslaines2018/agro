<?php


namespace app\components;
use yii\base\Action;

class HelloAction extends Action
{
    public function run()
    {
        return 'Hello, World';
    }
}