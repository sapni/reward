<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rewardtb */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rewardtb-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orderid')->textInput() ?>

    <?= $form->field($model, 'points')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expirydate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
