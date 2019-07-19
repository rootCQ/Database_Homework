<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%activities}}".
 *
 * @property int $ac_id 自增ID
 * @property string $ac_activities 活动名
 * @property string $ac_location 活动地点
 * @property string $ac_begindate 活动开始日期
 * @property string $ac_begintime 活动开始时间
 * @property string $ac_enddate 活动结束日期
 * @property string $ac_endtime 活动结束时间
 * @property string $ac_hostdept 活动主办单位
 */
class YiiActivities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%activities}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ac_activities', 'ac_location', 'ac_begindate', 'ac_begintime', 'ac_enddate', 'ac_endtime', 'ac_hostdept'], 'required'],
            [['ac_begindate', 'ac_begintime', 'ac_enddate', 'ac_endtime'], 'safe'],
            [['ac_activities', 'ac_hostdept'], 'string', 'max' => 100],
            [['ac_location'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ac_id' => '自增ID',
            'ac_activities' => '活动名',
            'ac_location' => '活动地点',
            'ac_begindate' => '活动开始日期',
            'ac_begintime' => '活动开始时间',
            'ac_enddate' => '活动结束日期',
            'ac_endtime' => '活动结束时间',
            'ac_hostdept' => '活动主办单位',
        ];
    }

    /**
     * {@inheritdoc}
     * @return YiiActivitiesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new YiiActivitiesQuery(get_called_class());
    }
}
