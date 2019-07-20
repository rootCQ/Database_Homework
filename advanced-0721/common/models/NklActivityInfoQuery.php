<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[NklActivityInfo]].
 *
 * @see NklActivityInfo
 */
class NklActivityInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NklActivityInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NklActivityInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
