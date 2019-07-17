<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nkl_news_info".
 *
 * @property int $news_id
 * @property string $news_title
 * @property string $news_content
 * @property int $news_releaser
 * @property string $news_releaseTime
 * @property string $news_link
 * @property NklNewsComments[] $nklNewsComments
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
            [['news_title', 'news_content', 'news_releaser', 'news_releaseTime'], 'required'],
            [['news_releaser'], 'integer'],
            [['news_releaseTime'], 'safe'],
            [['news_title'], 'string', 'max' => 25],
            [['news_content'], 'string', 'max' => 500],
            [['news_link'], 'string', 'max' => 200],
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
            'news_content' => 'News Content',
            'news_link' => 'News Link',
            'news_releaser' => 'News Releaser',
            'news_releaseTime' => 'News Release Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklNewsComments()
    {
        return $this->hasMany(NklNewsComments::className(), ['news_id' => 'news_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsReleaser()
    {
        return $this->hasOne(NklManagersInfo::className(), ['manager_id' => 'news_releaser']);
    }
}
