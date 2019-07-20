<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%nkl_bbs_info}}".
 *
 * @property int $bbs_id
 * @property string $bbs_time
 * @property string $bbs_userNickname
 * @property string $bbs_userDescribe
 * @property string $bbs_content
 * @property int $bbs_isSelected
 * @property int $bbs_isSolved
 *
 * @property NklBbsSelectrecord[] $nklBbsSelectrecords
 */
class NklBbsInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nkl_bbs_info}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bbs_time'], 'safe'],
            [['bbs_isSelected', 'bbs_isSolved'], 'integer'],
            [['bbs_userNickname'], 'string', 'max' => 25],
            [['bbs_userDescribe'], 'string', 'max' => 50],
            [['bbs_content'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bbs_id' => 'Bbs ID',
            'bbs_time' => 'Bbs Time',
            'bbs_userNickname' => 'Bbs User Nickname',
            'bbs_userDescribe' => 'Bbs User Describe',
            'bbs_content' => 'Bbs Content',
            'bbs_isSelected' => 'Bbs Is Selected',
            'bbs_isSolved' => 'Bbs Is Solved',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklBbsSelectrecords()
    {
        return $this->hasMany(NklBbsSelectrecord::className(), ['bbs_id' => 'bbs_id']);
    }

    /**
     * {@inheritdoc}
     * @return NklBbsInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NklBbsInfoQuery(get_called_class());
    }
}
