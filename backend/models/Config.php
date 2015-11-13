<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;
/**
 * This is the model class for table "config".
 *
 * @property string $id
 * @property string $name
 * @property string $value
 * @property integer $create_time
 * @property integer $update
 */
class Config extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'update'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['value'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'value' => '值',
            'create_time' => '创建时间',
            'update' => '更新时间',
        ];
    }
}
