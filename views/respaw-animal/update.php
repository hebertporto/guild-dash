<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RespawAnimal */

$this->title = 'Update Respaw Animal: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Respaw Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="respaw-animal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
