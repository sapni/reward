<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rewardtb */

$this->title = 'Create Rewardtb';
$this->params['breadcrumbs'][] = ['label' => 'Rewardtbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rewardtb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
