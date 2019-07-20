<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nkl_users_login".
 *
 * @property int $user_id
 * @property string $user_name
 * @property string $user_password_hash
 * @property string $user_auth_key
 *
 * @property NklPurchaseRecord[] $nklPurchaseRecords
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
            [['user_name', 'user_password_hash', 'user_auth_key'], 'required'],
            [['user_name'], 'string', 'max' => 25],
            [['user_password_hash'], 'string', 'max' => 255],
            [['user_auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_password_hash' => 'User Password Hash',
            'user_auth_key' => 'User Auth Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklPurchaseRecords()
    {
        return $this->hasMany(NklPurchaseRecord::className(), ['user_id' => 'user_id']);
    }
}
