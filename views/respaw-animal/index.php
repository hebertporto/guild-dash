<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RespawAnimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Respaw Animals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="respaw-animal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Respaw Animal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'animal',
            'color',
            'data_hora',
            'player',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
