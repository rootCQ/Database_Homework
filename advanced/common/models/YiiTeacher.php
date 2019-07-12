<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%yii_teacher}}".
 *
 * @property int $tch_id 自增ID
 * @property string $tch_name 姓名
 * @property string $tch_number 职工号
 */
class YiiTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%teacher}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tch_id', 'tch_name', 'tch_number'], 'required'],
            [['tch_id'], 'integer'],
            [['tch_name'], 'string', 'max' => 15],
            [['tch_number'], 'string', 'max' => 25],
            [['tch_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tch_id' => '自增ID',
            'tch_name' => '姓名',
            'tch_number' => '职工号',
        ];
    }

    /**
     * {@inheritdoc}
     * @return YiiTeacherQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new YiiTeacherQuery(get_called_class());
    }
}
