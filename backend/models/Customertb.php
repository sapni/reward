<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customertb".
 *
 * @property int $id
 * @property string $name
 *
 * @property Ordertb[] $ordertbs
 * @property Rewardused[] $rewarduseds
 */
class Customertb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customertb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Ordertbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrdertbs()
    {
        return $this->hasMany(Ordertb::className(), ['cust_id' => 'id']);
    }

    /**
     * Gets query for [[Rewarduseds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRewarduseds()
    {
        return $this->hasMany(Rewardused::className(), ['cust_id' => 'id']);
    }
}
