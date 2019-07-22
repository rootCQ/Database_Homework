<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;


//zxy  直接写的连接数据库的文件

class Products extends ActiveRecord
{
    public static function tableName()
    {
        return 'nkl_products_info';
    }
}