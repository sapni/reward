<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rewardused;

/**
 * RewardusedSearch represents the model behind the search form of `app\models\Rewardused`.
 */
class RewardusedSearch extends Rewardused
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cust_id'], 'integer'],
            [['used_points'], 'number'],
            [['used_dates'], 'safe'],
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
        $query = Rewardused::find();

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
            'cust_id' => $this->cust_id,
            'used_points' => $this->used_points,
            'used_dates' => $this->used_dates,
        ]);

        return $dataProvider;
    }
}
