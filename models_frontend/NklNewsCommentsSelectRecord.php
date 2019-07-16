<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nkl_news_comments_selectrecord".
 *
 * @property int $comment_id
 * @property int $manager_id
 * @property int $comment_isSelected
 * @property int $comment_solveTime
 *
 * @property NklManagersInfo $manager
 * @property NklNewsComments $comment
 */
class NklNewsCommentsSelectRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_news_comments_selectrecord';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment_id', 'manager_id', 'comment_isSelected', 'comment_solveTime'], 'required'],
            [['comment_id', 'manager_id', 'comment_isSelected', 'comment_solveTime'], 'integer'],
            [['manager_id', 'comment_solveTime'], 'unique', 'targetAttribute' => ['manager_id', 'comment_solveTime']],
            [['manager_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklManagersInfo::className(), 'targetAttribute' => ['manager_id' => 'manager_id']],
            [['comment_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklNewsComments::className(), 'targetAttribute' => ['comment_id' => 'comment_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'manager_id' => 'Manager ID',
            'comment_isSelected' => 'Comment Is Selected',
            'comment_solveTime' => 'Comment Solve Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManager()
    {
        return $this->hasOne(NklManagersInfo::className(), ['manager_id' => 'manager_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComment()
    {
        return $this->hasOne(NklNewsComments::className(), ['comment_id' => 'comment_id']);
    }
}
