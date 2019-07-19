<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nkl_news_selectRecord".
 *
 * @property int $news_id
 * @property int $manager_id
 * @property int $news_isSelected
 * @property string $news_solveTime
 *
 * @property NklNewsInfo $news
 * @property NklManagersInfo $manager
 */
class NklNewsSelectRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_news_selectRecord';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id', 'manager_id', 'news_isSelected', 'news_solveTime'], 'required'],
            [['news_id', 'manager_id', 'news_isSelected'], 'integer'],
            [['news_solveTime'], 'safe'],
            [['manager_id', 'news_solveTime'], 'unique', 'targetAttribute' => ['manager_id', 'news_solveTime']],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklNewsInfo::className(), 'targetAttribute' => ['news_id' => 'news_id']],
            [['manager_id'], 'exist', 'skipOnError' => true, 'targetClass' => NklManagersInfo::className(), 'targetAttribute' => ['manager_id' => 'manager_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'manager_id' => 'Manager ID',
            'news_isSelected' => 'News Is Selected',
            'news_solveTime' => 'News Solve Time',
        ];
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
    public function getManager()
    {
        return $this->hasOne(NklManagersInfo::className(), ['manager_id' => 'manager_id']);
    }
}
