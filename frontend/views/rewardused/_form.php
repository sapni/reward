<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rewardused */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rewardused-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cust_id')->textInput() ?>

    <?= $form->field($model, 'used_points')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'used_dates')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
