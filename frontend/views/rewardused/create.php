<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rewardused */

$this->title = 'Create Rewardused';
$this->params['breadcrumbs'][] = ['label' => 'Rewarduseds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rewardused-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
