<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nkl_purchase_record".
 *
 * @property string $purchase_time
 * @property int $user_id
 * @property int $product_id
 *
 * @property NklUsersLogin $user
 * @property NklProductsInfo $product
 */
class NklPurchaseRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_purchase_record';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['purchase_time', 'user_id', 'product_id'], 'required'],
            [['purchase_time'], 'safe'],
            [['user_id', 'product_id'], 'integer'],
            [['purchase_time', 'user_id'], 'unique', 'targetAttribute' => ['purchase_time', 'user_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklUsersLogin::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklProductsInfo::className(), 'targetAttribute' => ['product_id' => 'product_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'purchase_time' => 'Purchase Time',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(NklUsersLogin::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(NklProductsInfo::className(), ['product_id' => 'product_id']);
    }
}
