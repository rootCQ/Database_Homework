<?php

namespace common\models;

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
            [['activity_info', 'activity_location', 'activity_beginDate', 'activity_beginTime', 'activity_endDate', 'activity_endTime', 'activity_hostDept'], 'required'],
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
            'activity_info' => '活动名称',
            'activity_location' => '活动地点',
            'activity_beginDate' => '活动开始日期',
            'activity_beginTime' => '活动开始时间',
            'activity_endDate' => '活动结束日期',
            'activity_endTime' => '活动结束时间',
            'activity_hostDept' => '活动主办单位',
        ];
    }
}
