<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[NklHistory]].
 *
 * @see NklHistory
 */
class HistoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NklHistory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NklHistory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
