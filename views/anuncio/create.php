<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Anuncio */

$this->title = 'ADD Anúncio';
$this->params['breadcrumbs'][] = ['label' => 'Anúncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anuncio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
