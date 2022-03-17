<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordertb".
 *
 * @property int $id
 * @property int $cust_id
 * @property string $currency
 * @property float $price
 * @property string $status
 *
 * @property Customertb $cust
 * @property Rewardtb[] $rewardtbs
 */
class Ordertb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ordertb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cust_id', 'currency', 'price', 'status'], 'required'],
            [['cust_id'], 'integer'],
            [['price'], 'number'],
            [['currency'], 'string', 'max' => 3],
            [['status'], 'string', 'max' => 20],
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
            'currency' => 'Currency',
            'price' => 'Price',
            'status' => 'Status',
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

    /**
     * Gets query for [[Rewardtbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRewardtbs()
    {
        return $this->hasMany(Rewardtb::className(), ['orderid' => 'id']);
    }
}
