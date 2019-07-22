<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[NklHistoryInfo]].
 *
 * @see NklHistoryInfo
 */
class NklHistoryInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NklHistoryInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NklHistoryInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
