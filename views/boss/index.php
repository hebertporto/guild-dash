<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BossSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bosses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="boss-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Boss', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'data_hora',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
