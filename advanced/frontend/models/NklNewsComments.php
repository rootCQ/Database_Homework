<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nkl_news_comments".
 *
 * @property int $comment_id
 * @property int $user_id
 * @property string $comment_time
 * @property int $news_id
 * @property string $comment_content
 * @property int $comment_isSelected
 * @property int $comment_isSolved
 *
 * @property NklUsersInfo $user
 * @property NklNewsInfo $news
 * @property NklNewsCommentsSelectrecord[] $nklNewsCommentsSelectrecords
 */
class NklNewsComments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_news_comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'comment_time', 'news_id', 'comment_content', 'comment_isSelected', 'comment_isSolved'], 'required'],
            [['user_id', 'news_id', 'comment_isSelected', 'comment_isSolved'], 'integer'],
            [['comment_time'], 'safe'],
            [['comment_content'], 'string', 'max' => 200],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklUsersInfo::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklNewsInfo::className(), 'targetAttribute' => ['news_id' => 'news_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'user_id' => 'User ID',
            'comment_time' => 'Comment Time',
            'news_id' => 'News ID',
            'comment_content' => 'Comment Content',
            'comment_isSelected' => 'Comment Is Selected',
            'comment_isSolved' => 'Comment Is Solved',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(NklUsersInfo::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(NklNewsInfo::className(), ['news_id' => 'news_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklNewsCommentsSelectrecords()
    {
        return $this->hasMany(NklNewsCommentsSelectrecord::className(), ['comment_id' => 'comment_id']);
    }
}
