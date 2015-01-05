<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Anuncio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anuncio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anuncio')->textarea(['rows' => 6])->label('Anúncio') ?>

    <?= $form->field($model, 'player')->textInput(['maxlength' => 32]) ?>

    <?=
    $form->field($model, 'data_hora')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Informe a data e hora do evento.'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy/mm/dd hh:ii:ss',
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
