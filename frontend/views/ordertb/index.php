<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdertbSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordertbs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordertb-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ordertb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cust_id',
            'currency',
            'price',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ordertb $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
