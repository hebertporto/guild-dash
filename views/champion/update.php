<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Champion */

$this->title = 'Update Champion: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Champions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="champion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
