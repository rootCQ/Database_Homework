<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nkl_history_info".
 *
 * @property int $history_id
 * @property string $history_title
 * @property string $history_passage
 */
class NklHistoryInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_history_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['history_title', 'history_passage'], 'required'],
            [['history_title'], 'string', 'max' => 100],
            [['history_passage'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'history_id' => 'History ID',
            'history_title' => 'History Title',
            'history_passage' => 'History Passage',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NklHistoryInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NklHistoryInfoQuery(get_called_class());
    }
}
