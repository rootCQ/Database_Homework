<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NklHistoryInfo;

/**
 * NklHistoryInfoSearch represents the model behind the search form of `app\models\NklHistoryInfo`.
 */
class NklHistoryInfoSearch extends NklHistoryInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['history_id'], 'integer'],
            [['history_title', 'history_passage'], 'safe'],
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
        $query = NklHistoryInfo::find();

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
            'history_id' => $this->history_id,
        ]);

        $query->andFilterWhere(['like', 'history_title', $this->history_title])
            ->andFilterWhere(['like', 'history_passage', $this->history_passage]);

        return $dataProvider;
    }
}
