<?php

namespace backend\models;

use Yii;

/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295
 * This is the model class for table "nkl_news_info".
 */

/**
 *
 * @property int $news_id
 * @property string $news_title
 * @property int $news_releaser
 * @property string $news_releaseTime
 * @property string $news_link
 *
 * @property NklManagersInfo $newsReleaser
 */
class NklNewsInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_news_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_title', 'news_releaser', 'news_releaseTime', 'news_link'], 'required'],
            [['news_releaser'], 'integer'],
            [['news_releaseTime'], 'safe'],
            [['news_title'], 'string', 'max' => 100],
            [['news_link'], 'string', 'max' => 255],
            [['news_releaser'], 'exist', 'skipOnError' => true, 'targetClass' => NklManagersInfo::className(), 'targetAttribute' => ['news_releaser' => 'manager_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'news_title' => 'News Title',
            'news_releaser' => 'News Releaser',
            'news_releaseTime' => 'News Release Time',
            'news_link' => 'News Link',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsReleaser()
    {
        return $this->hasOne(NklManagersInfo::className(), ['manager_id' => 'news_releaser']);
    }
}
