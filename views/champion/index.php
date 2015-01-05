<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChampionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Champions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="champion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Champion', ['create'], ['class' => 'btn btn-success']) ?>
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
