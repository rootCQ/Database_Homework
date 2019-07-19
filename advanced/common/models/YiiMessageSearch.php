<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiMessage;

/**
 * YiiMessageSearch represents the model behind the search form of `common\models\YiiMessage`.
 */
class YiiMessageSearch extends YiiMessage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Mes_ID'], 'integer'],
            [['Mes_Name', 'Mes_Info', 'Mes_message'], 'safe'],
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
        $query = YiiMessage::find();

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
            'Mes_ID' => $this->Mes_ID,
        ]);

        $query->andFilterWhere(['like', 'Mes_Name', $this->Mes_Name])
            ->andFilterWhere(['like', 'Mes_Info', $this->Mes_Info])
            ->andFilterWhere(['like', 'Mes_message', $this->Mes_message]);

        return $dataProvider;
    }
}
