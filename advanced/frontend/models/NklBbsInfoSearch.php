<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NklBbsInfo;

/**
 * NklBbsInfoSearch represents the model behind the search form of `app\models\NklBbsInfo`.
 */
class NklBbsInfoSearch extends NklBbsInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bbs_id', 'user_id', 'bbs_isSelected', 'bbs_isSolved'], 'integer'],
            [['bbs_time', 'bbs_content'], 'safe'],
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
        $query = NklBbsInfo::find();

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
            'bbs_id' => $this->bbs_id,
            'user_id' => $this->user_id,
            'bbs_time' => $this->bbs_time,
            'bbs_isSelected' => $this->bbs_isSelected,
            'bbs_isSolved' => $this->bbs_isSolved,
        ]);

        $query->andFilterWhere(['like', 'bbs_content', $this->bbs_content]);

        return $dataProvider;
    }
}
