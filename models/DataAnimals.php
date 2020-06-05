<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblDataAnimals".
 *
 * @property int $id
 * @property string $value_1
 * @property string $value_2
 * @property string $value_3
 * @property string $value_4
 * @property string $value_5
 * @property string $date
 */
class DataAnimals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblDataAnimals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value_1', 'value_2', 'value_3', 'value_4', 'value_5'], 'required'],
            [['date'], 'safe'],
            [['value_1', 'value_2', 'value_3', 'value_4', 'value_5'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value_1' => 'Value 1',
            'value_2' => 'Value 2',
            'value_3' => 'Value 3',
            'value_4' => 'Value 4',
            'value_5' => 'Value 5',
            'date' => 'Date',
        ];
    }
}
