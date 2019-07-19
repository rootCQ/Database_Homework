<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nkl_managers_login".
 *
 * @property int $manager_id
 * @property string $manager_name
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $role
 * @property string $mobile
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
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
            [['manager_id', 'manager_name', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'role', 'mobile', 'status', 'created_at', 'updated_at'], 'required'],
            [['manager_id', 'role', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['manager_name'], 'string', 'max' => 25],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['mobile'], 'string', 'max' => 11],
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
            'manager_name' => 'Manager Name',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'role' => 'Role',
            'mobile' => 'Mobile',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
