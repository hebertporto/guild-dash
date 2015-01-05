<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RespawAnimal */

$this->title = 'Create Respaw Animal';
$this->params['breadcrumbs'][] = ['label' => 'Respaw Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="respaw-animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
