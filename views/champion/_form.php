<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Champion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="champion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->dropDownList(
    ['Abyss' => 'Abyss',
        'Arachnid' => 'Arachnid',
        'Cold Blood' => 'Cold Blood',
        'Forest Lord' => 'Forest Lord',
        'Vermin Horde' => 'Vermin Horde',
        'Unholy Terror' => 'Unholy Terror',
        'Harrower' => 'Harrower',
    ],
    ['prompt'=>'Selecione um Champion']    // options
    ); ?>

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
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
