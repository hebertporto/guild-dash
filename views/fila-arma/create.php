<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FilaArma */

$this->title = 'Cadastro na Fila de Armas';
$this->params['breadcrumbs'][] = ['label' => 'Fila Armas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fila-arma-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="well">
        O Cadstro do Player só deve ser realizado uma única vez para impedir duplicidade na fila.
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
