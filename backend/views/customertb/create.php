<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customertb */

$this->title = 'Create Customertb';
$this->params['breadcrumbs'][] = ['label' => 'Customertbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customertb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
