<?php


namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $id;
    public $cows;
    public $mini_cows;
    public $mini_cows_0_3_month;
    public $mini_cows_3_6_month;
    public $mini_cows_6_12_month;
    public $mini_cows_12_18_month;

    public function rules(){
        return [
          [['cows','mini_cows'], 'required'],
        ];
    }

    public function attributeLabels(){
        return [
            'id' => 'Номер id:',
            'cows' => 'Количество коров:',
            'mini_cows' => 'Количество тёлок:',
            'mini_cows_0_3_month' => 'Количество телят 0-3 месяцев:',
            'mini_cows_3_6_month' => 'Количество телят 3-6 месяцев:',
            'mini_cows_6_12_month' => 'Количество телят 6-12 месяцев:',
            'mini_cows_12_18_month' => 'Количество телят 12-18 месяцев:',
        ];
    }
}