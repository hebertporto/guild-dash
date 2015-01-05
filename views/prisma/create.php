<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prisma */

$this->title = 'Create Prisma';
$this->params['breadcrumbs'][] = ['label' => 'Prismas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prisma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
