<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\NklBbsInfo;

/**
 * Team: @NKL,NKU
 * Coding by 李伟 1711350
 * NklBbsInfoSearch represents the model behind the search form of `common\models\NklBbsInfo` generated by gii.
 */

class NklBbsInfoSearch extends NklBbsInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bbs_id', 'bbs_isSelected', 'bbs_isSolved'], 'integer'],
            [['bbs_time', 'bbs_userNickname', 'bbs_userDescribe', 'bbs_content'], 'safe'],
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
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'bbs_id' => $this->bbs_id,
            'bbs_time' => $this->bbs_time,
            'bbs_isSelected' => $this->bbs_isSelected,
            'bbs_isSolved' => $this->bbs_isSolved,
        ]);

        $query->andFilterWhere(['like', 'bbs_userNickname', $this->bbs_userNickname])
            ->andFilterWhere(['like', 'bbs_userDescribe', $this->bbs_userDescribe])
            ->andFilterWhere(['like', 'bbs_content', $this->bbs_content]);

        return $dataProvider;
    }
}
