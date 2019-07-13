<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nkl_managers_info".
 *
 * @property int $manager_id
 * @property string $manager_name
 * @property string $manager_sex
 * @property string $manager_email
 * @property int $manager_grade
 * @property string $manager_college
 * @property string $manager_major
 *
 * @property NklBbsSelectrecord[] $nklBbsSelectrecords
 * @property NklManagersLogin $nklManagersLogin
 * @property NklNewsCommentsSelectrecord[] $nklNewsCommentsSelectrecords
 * @property NklNewsInfo[] $nklNewsInfos
 */
class nkl_managers_info extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_managers_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manager_name', 'manager_email', 'manager_grade', 'manager_college'], 'required'],
            [['manager_grade'], 'integer'],
            [['manager_name', 'manager_email'], 'string', 'max' => 25],
            [['manager_sex'], 'string', 'max' => 1],
            [['manager_college', 'manager_major'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'manager_id' => 'Manager ID',
            'manager_name' => 'Manager Name',
            'manager_sex' => 'Manager Sex',
            'manager_email' => 'Manager Email',
            'manager_grade' => 'Manager Grade',
            'manager_college' => 'Manager College',
            'manager_major' => 'Manager Major',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklBbsSelectrecords()
    {
        return $this->hasMany(NklBbsSelectrecord::className(), ['manager_id' => 'manager_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklManagersLogin()
    {
        return $this->hasOne(NklManagersLogin::className(), ['manager_id' => 'manager_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklNewsCommentsSelectrecords()
    {
        return $this->hasMany(NklNewsCommentsSelectrecord::className(), ['manager_id' => 'manager_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklNewsInfos()
    {
        return $this->hasMany(NklNewsInfo::className(), ['news_releaser' => 'manager_id']);
    }
}
