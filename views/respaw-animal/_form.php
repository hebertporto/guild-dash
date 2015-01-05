<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\RespawAnimal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="respaw-animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'animal')->dropDownList(
        [
            'Lhama' => 'Lhama',
            'Oclock' => 'Oclock',
            'Orn' => 'Orn',
            'Mustang' => 'Mustang',
            'Zoztrich' => 'Zoztrich',
            'SwampDragon' => 'SwampDragon',
            'Unicorn' => 'Unicorn',
            'Savage' => 'Savage',
            'Nightmare' => 'Nightmare',
            'Besouro' => 'Besouro',
        ],
        ['prompt'=>'Selecione um Animal']    // options
    ); ?>

    <?= $form->field($model, 'color')->dropDownList(
        [
            'Blood' => 'Blood',
            'Fire' => 'Fire',
            'Snow' => 'Snow',
            'Poison' => 'Poison',
            'Order' => 'Order',
            'Vulcano' => 'Vulcano',
            'Mage' => 'Mage',
            'Sky' => 'Sky',
            'Purple' => 'Purple',
            'Rose' => 'Rose',
            'Chaos' => 'Chaos',
            'Brown' => 'Brown',
            'Bronze' => 'Bronze',
            'Golden' => 'Golden',
            'Night' => 'Night',
            'Ice' => 'Ice',
            'Spectral' => 'Spectral',
            'Dark' => 'Dark',
            'Cor Padrão' => 'Cor Padrão',
        ],
        ['prompt'=>'Selecione a Cor']    // options
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

    <?= $form->field($model, 'player')->textInput(['maxlength' => 32]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
