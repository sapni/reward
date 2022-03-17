<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rewardtb".
 *
 * @property int $id
 * @property int $orderid
 * @property float $points
 * @property string $expirydate
 *
 * @property Ordertb $order
 */
class Rewardtb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rewardtb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderid', 'points', 'expirydate'], 'required'],
            [['orderid'], 'integer'],
            [['points'], 'number'],
            [['expirydate'], 'safe'],
            [['orderid'], 'exist', 'skipOnError' => true, 'targetClass' => Ordertb::className(), 'targetAttribute' => ['orderid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderid' => 'Orderid',
            'points' => 'Points',
            'expirydate' => 'Expirydate',
        ];
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Ordertb::className(), ['id' => 'orderid']);
    }
}
