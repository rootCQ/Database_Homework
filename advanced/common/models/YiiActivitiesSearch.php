<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiActivities;

/**
 * YiiActivitiesSearch represents the model behind the search form of `common\models\YiiActivities`.
 */
class YiiActivitiesSearch extends YiiActivities
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ac_id'], 'integer'],
            [['ac_activities', 'ac_location', 'ac_begindate', 'ac_begintime', 'ac_enddate', 'ac_endtime', 'ac_hostdept'], 'safe'],
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
        $query = YiiActivities::find();

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
            'ac_id' => $this->ac_id,
            'ac_begindate' => $this->ac_begindate,
            'ac_begintime' => $this->ac_begintime,
            'ac_enddate' => $this->ac_enddate,
            'ac_endtime' => $this->ac_endtime,
        ]);

        $query->andFilterWhere(['like', 'ac_activities', $this->ac_activities])
            ->andFilterWhere(['like', 'ac_location', $this->ac_location])
            ->andFilterWhere(['like', 'ac_hostdept', $this->ac_hostdept]);

        return $dataProvider;
    }
}
