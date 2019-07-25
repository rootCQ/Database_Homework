<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NklBbsSelectRecord;

/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295
 * NklBbsSelectRecordSearch represents the model behind the search form of `backend\models\NklBbsSelectRecord`.
 */

class NklBbsSelectRecordSearch extends NklBbsSelectRecord
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manager_id', 'bbs_isSelected', 'bbs_id'], 'integer'],
            [['bbs_solveTime'], 'safe'],
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
        $query = NklBbsSelectRecord::find();

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
            'manager_id' => $this->manager_id,
            'bbs_isSelected' => $this->bbs_isSelected,
            'bbs_solveTime' => $this->bbs_solveTime,
            'bbs_id' => $this->bbs_id,
        ]);

        return $dataProvider;
    }
}
