<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%newsinfo}}".
 *
 * @property int $news_id 自增ID
 * @property string $news_title 标题
 * @property string $news_date 日期
 * @property string $news_content 正文
 */
class Newsinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%newsinfo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_title'], 'required'],
            [['news_date'], 'safe'],
            [['news_title'], 'string', 'max' => 100],
            [['news_content'], 'string', 'max' => 5000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => '自增ID',
            'news_title' => '标题',
            'news_date' => '日期',
            'news_content' => '正文',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NewsinfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsinfoQuery(get_called_class());
    }
}
