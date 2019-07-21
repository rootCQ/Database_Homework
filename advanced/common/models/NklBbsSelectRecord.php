<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "nkl_bbs_selectRecord".
 *
 * @property int $manager_id
 * @property int $bbs_isSelected
 * @property string $bbs_solveTime
 * @property int $bbs_id
 *
 * @property NklManagersInfo $manager
 * @property NklBbsInfo $bbs
 */
class NklBbsSelectRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_bbs_selectRecord';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manager_id', 'bbs_isSelected', 'bbs_solveTime', 'bbs_id'], 'required'],
            [['manager_id', 'bbs_isSelected', 'bbs_id'], 'integer'],
            [['bbs_solveTime'], 'safe'],
            [['manager_id', 'bbs_solveTime'], 'unique', 'targetAttribute' => ['manager_id', 'bbs_solveTime']],
            [['manager_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklManagersInfo::className(), 'targetAttribute' => ['manager_id' => 'manager_id']],
            [['bbs_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklBbsInfo::className(), 'targetAttribute' => ['bbs_id' => 'bbs_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'manager_id' => 'Manager ID',
            'bbs_isSelected' => 'Bbs Is Selected',
            'bbs_solveTime' => 'Bbs Solve Time',
            'bbs_id' => 'Bbs ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManager()
    {
        return $this->hasOne(NklManagersInfo::className(), ['manager_id' => 'manager_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBbs()
    {
        return $this->hasOne(NklBbsInfo::className(), ['bbs_id' => 'bbs_id']);
    }
}
