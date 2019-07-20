<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[YiiMessage]].
 *
 * @see YiiMessage
 */
class YiiMessageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return YiiMessage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return YiiMessage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
