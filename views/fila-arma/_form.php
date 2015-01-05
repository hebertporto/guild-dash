<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\FilaArma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fila-arma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'posicao')->textInput() ?>

    <?= $form->field($model, 'player')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'arma')->dropDownList(
        [
            'Katana' => 'Katana',
            'SS' => 'SS',
            'WarFork' => 'WarFork',
            'Kryss' => 'Kryss',
            'Club' => 'Club',
            'War Hammer' => 'War Hammer',
            'Arma Chechelenta' => 'Arma Chechelenta',
            'Esperando a vez chegar' => 'Esperando a vez chegar'
        ],
        ['prompt'=>'Selecione uma Arma']    // options
    ); ?>

    <?=
    $form->field($model, 'data_hora')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Informe a data e hora do Evento.'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy/mm/dd hh:ii:ss',
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar Fila', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
