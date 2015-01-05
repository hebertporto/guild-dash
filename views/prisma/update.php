<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prisma */

$this->title = 'Update Prisma: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Prismas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prisma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
