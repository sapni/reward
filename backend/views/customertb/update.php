<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customertb */

$this->title = 'Update Customertb: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customertbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customertb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
