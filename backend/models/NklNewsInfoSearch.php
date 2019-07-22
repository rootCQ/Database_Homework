<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NklNewsInfo;

/**
 * NklNewsInfoSearch represents the model behind the search form of `backend\models\NklNewsInfo`.
 */
class NklNewsInfoSearch extends NklNewsInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id', 'news_releaser', 'news_isSelected', 'news_isSolved'], 'integer'],
            [['news_title', 'news_releaseTime', 'news_link'], 'safe'],
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
        $query = NklNewsInfo::find();

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
            'news_id' => $this->news_id,
            'news_releaser' => $this->news_releaser,
            'news_releaseTime' => $this->news_releaseTime,
            'news_isSelected' => $this->news_isSelected,
            'news_isSolved' => $this->news_isSolved,
        ]);

        $query->andFilterWhere(['like', 'news_title', $this->news_title])
            ->andFilterWhere(['like', 'news_link', $this->news_link]);

        return $dataProvider;
    }
}
