<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nkl_users_login".
 *
 * @property int $user_id
 * @property string $user_pwd
 *
 * @property NklUsersInfo $user
 */
class NklUsersLogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_users_login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['user_pwd'], 'string', 'max' => 50],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklUsersInfo::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_pwd' => 'User Pwd',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(NklUsersInfo::className(), ['user_id' => 'user_id']);
    }
}
