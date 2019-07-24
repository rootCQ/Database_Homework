<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nkl_activity_info".
 *
 * @property int $activity_id
 * @property string $activity_info
 * @property string $activity_location
 * @property string $activity_beginDate
 * @property string $activity_beginTime
 * @property string $activity_endDate
 * @property string $activity_endTime
 * @property string $activity_hostDept
 */
class NklActivityInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_activity_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_info', 'activity_location', 'activity_beginDate', 'activity_endDate', 'activity_hostDept'], 'required'],
            [['activity_beginDate', 'activity_beginTime', 'activity_endDate', 'activity_endTime'], 'safe'],
            [['activity_info'], 'string', 'max' => 500],
            [['activity_location'], 'string', 'max' => 100],
            [['activity_hostDept'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'activity_id' => 'Activity ID',
            'activity_info' => 'Activity Info',
            'activity_location' => 'Activity Location',
            'activity_beginDate' => 'Activity Begin Date',
            'activity_beginTime' => 'Activity Begin Time',
            'activity_endDate' => 'Activity End Date',
            'activity_endTime' => 'Activity End Time',
            'activity_hostDept' => 'Activity Host Dept',
        ];
    }
}
