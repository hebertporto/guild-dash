<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Champion */

$this->title = 'ADD Champion';
$this->params['breadcrumbs'][] = ['label' => 'Champions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="champion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
