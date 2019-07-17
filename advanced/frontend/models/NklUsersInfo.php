<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nkl_users_info".
 *
 * @property int $user_id
 * @property string $user_nickname
 * @property string $user_email
 * @property string $user_selfDescribe
 *
 * @property NklBbsInfo[] $nklBbsInfos
 * @property NklNewsComments[] $nklNewsComments
 * @property NklPurchaseRecord[] $nklPurchaseRecords
 * @property NklUsersLogin $nklUsersLogin
 */
class NklUsersInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_users_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_nickname', 'user_email'], 'required'],
            [['user_nickname'], 'string', 'max' => 25],
            [['user_email', 'user_selfDescribe'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_nickname' => 'User Nickname',
            'user_email' => 'User Email',
            'user_selfDescribe' => 'User Self Describe',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklBbsInfos()
    {
        return $this->hasMany(NklBbsInfo::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklNewsComments()
    {
        return $this->hasMany(NklNewsComments::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklPurchaseRecords()
    {
        return $this->hasMany(NklPurchaseRecord::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklUsersLogin()
    {
        return $this->hasOne(NklUsersLogin::className(), ['user_id' => 'user_id']);
    }
}
