<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[NklBbsInfo]].
 *
 * @see NklBbsInfo
 */
class NklBbsInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NklBbsInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NklBbsInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
