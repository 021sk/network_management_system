<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "devices".
 *
 * @property int $id
 * @property string $device_name
 * @property string $ip_address
 * @property string $device_type
 * @property string $status
 * @property int $created_at
 * @property int $updated_at
 */
class Device extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }
    public static function tableName()
    {
        return 'devices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['device_name', 'ip_address', 'device_type', 'status', 'created_at', 'updated_at'], 'required'],
            [['device_type', 'status'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['device_name'], 'string', 'max' => 255],
            [['ip_address'], 'string', 'max' => 45],
            [['ip_address'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'device_name' => 'Device Name',
            'ip_address' => 'Ip Address',
            'device_type' => 'Device Type',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
