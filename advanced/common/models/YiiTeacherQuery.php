<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[YiiTeacher]].
 *
 * @see YiiTeacher
 */
class YiiTeacherQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return YiiTeacher[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return YiiTeacher|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
