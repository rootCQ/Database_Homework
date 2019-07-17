<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nkl_bbs_info".
 *
 * @property int $bbs_id
 * @property int $user_id
 * @property string $bbs_time
 * @property string $bbs_content
 * @property int $bbs_isSelected
 * @property int $bbs_isSolved
 *
 * @property NklUsersInfo $user
 * @property NklBbsSelectrecord[] $nklBbsSelectrecords
 */
class NklBbsInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_bbs_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'bbs_time', 'bbs_content'], 'required'],
            [['user_id', 'bbs_isSelected', 'bbs_isSolved'], 'integer'],
            [['bbs_time'], 'safe'],
            [['bbs_content'], 'string', 'max' => 100],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklUsersInfo::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bbs_id' => 'Bbs ID',
            'user_id' => 'User ID',
            'bbs_time' => 'Bbs Time',
            'bbs_content' => 'Bbs Content',
            'bbs_isSelected' => 'Bbs Is Selected',
            'bbs_isSolved' => 'Bbs Is Solved',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(NklUsersInfo::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklBbsSelectrecords()
    {
        return $this->hasMany(NklBbsSelectrecord::className(), ['bbs_id' => 'bbs_id']);
    }
}
