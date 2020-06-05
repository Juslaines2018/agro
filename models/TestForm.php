<?php

namespace app\models;


use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{
    public static function tableName(){
        return 'tblMiniCows';
    }

    public function attributeLabels(){
        return[
         'cows' => 'Коровы',
         'mini_cows'=> 'Мини коровы',
        ];
    }

    public function rules(){
        return [
            [['cows', 'mini_cows'], 'default'],
            [['cows','mini_cows'], 'integer'],
        ];
    }
}