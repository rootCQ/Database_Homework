<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[YiiActivities]].
 *
 * @see YiiActivities
 */
class YiiActivitiesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return YiiActivities[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return YiiActivities|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
