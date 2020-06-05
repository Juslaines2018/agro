<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataAnimals;

/**
 * DataAnimalsSearch represents the model behind the search form of `app\models\DataAnimals`.
 */
class DataAnimalsSearch extends DataAnimals
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['value_1', 'value_2', 'value_3', 'value_4', 'value_5', 'date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DataAnimals::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'value_1', $this->value_1])
            ->andFilterWhere(['like', 'value_2', $this->value_2])
            ->andFilterWhere(['like', 'value_3', $this->value_3])
            ->andFilterWhere(['like', 'value_4', $this->value_4])
            ->andFilterWhere(['like', 'value_5', $this->value_5]);

        return $dataProvider;
    }
}
