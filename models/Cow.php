<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Cow extends ActiveRecord
{
    public static function tableName(){
        return 'tblMiniCows'; //указываем имя таблицы из бд
    }
}