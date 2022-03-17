<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordertb */

$this->title = 'Create Ordertb';
$this->params['breadcrumbs'][] = ['label' => 'Ordertbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordertb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
