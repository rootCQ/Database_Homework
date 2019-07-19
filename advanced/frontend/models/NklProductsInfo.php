<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nkl_products_info".
 *
 * @property int $product_id
 * @property string $product_name
 * @property double $product_price
 * @property int $product_storage
 *
 * @property NklPurchaseRecord[] $nklPurchaseRecords
 */
class NklProductsInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_products_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_price', 'product_storage'], 'required'],
            [['product_price'], 'number'],
            [['product_storage'], 'integer'],
            [['product_name'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Product Name',
            'product_price' => 'Product Price',
            'product_storage' => 'Product Storage',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklPurchaseRecords()
    {
        return $this->hasMany(NklPurchaseRecord::className(), ['product_id' => 'product_id']);
    }
}
