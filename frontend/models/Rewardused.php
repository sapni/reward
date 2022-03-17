<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rewardused".
 *
 * @property int $id
 * @property int $cust_id
 * @property float $used_points
 * @property string $used_dates
 *
 * @property Customertb $cust
 */
class Rewardused extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rewardused';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cust_id', 'used_points', 'used_dates'], 'required'],
            [['cust_id'], 'integer'],
            [['used_points'], 'number'],
            [['used_dates'], 'safe'],
            [['cust_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customertb::className(), 'targetAttribute' => ['cust_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cust_id' => 'Cust ID',
            'used_points' => 'Used Points',
            'used_dates' => 'Used Dates',
        ];
    }

    /**
     * Gets query for [[Cust]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCust()
    {
        return $this->hasOne(Customertb::className(), ['id' => 'cust_id']);
    }
}
