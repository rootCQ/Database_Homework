<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nkl_managers_login".
 *
 * @property int $manager_id
 * @property string $manager_pwd
 *
 * @property NklManagersInfo $manager
 */
class NklManagersLogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_managers_login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manager_id'], 'required'],
            [['manager_id'], 'integer'],
            [['manager_pwd'], 'string', 'max' => 50],
            [['manager_id'], 'unique'],
            [['manager_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklManagersInfo::className(), 'targetAttribute' => ['manager_id' => 'manager_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'manager_id' => 'Manager ID',
            'manager_pwd' => 'Manager Pwd',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManager()
    {
        return $this->hasOne(NklManagersInfo::className(), ['manager_id' => 'manager_id']);
    }
}
