<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%message}}".
 *
 * @property int $Mes_ID 自增ID
 * @property string $Mes_Name 留言者姓名
 * @property string $Mes_Info 留言者身份
 * @property string $Mes_message 留言内容
 */
class YiiMessage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%message}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Mes_Name','Mes_Info','Mes_message'],'required'],
            [['Mes_Name'], 'string', 'max' => 25],
            [['Mes_Info'], 'string', 'max' => 100],
            [['Mes_message'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Mes_ID' => '自增ID',
            'Mes_Name' => '留言者姓名',
            'Mes_Info' => '留言者身份',
            'Mes_message' => '留言内容',
        ];
    }

    /**
     * {@inheritdoc}
     * @return YiiMessageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new YiiMessageQuery(get_called_class());
    }
}
