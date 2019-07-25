<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NklActivityInfo;

/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295
 * NklActivityInfoSearch represents the model behind the search form of 'backend\models\NklActivityInfo'.
 */


class NklActivityInfoSearch extends NklActivityInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id'], 'integer'],
            [['activity_info', 'activity_location', 'activity_beginDate', 'activity_beginTime', 'activity_endDate', 'activity_endTime', 'activity_hostDept'], 'safe'],
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
        $query = NklActivityInfo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'activity_id' => $this->activity_id,
            'activity_beginDate' => $this->activity_beginDate,
            'activity_beginTime' => $this->activity_beginTime,
            'activity_endDate' => $this->activity_endDate,
            'activity_endTime' => $this->activity_endTime,
        ]);

        $query->andFilterWhere(['like', 'activity_info', $this->activity_info])
            ->andFilterWhere(['like', 'activity_location', $this->activity_location])
            ->andFilterWhere(['like', 'activity_hostDept', $this->activity_hostDept]);

        return $dataProvider;
    }
}
