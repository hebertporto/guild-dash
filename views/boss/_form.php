<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Boss */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="boss-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->dropDownList(
        [
            'Orc' => 'Orc',
            'Cemita' => 'Cemita',
            'Aranha' => 'Aranha',
        ],
        ['prompt'=>'Selecione um Boss']    // options
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
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
