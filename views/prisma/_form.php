<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Prisma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prisma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->dropDownList(
        ['Ice' => 'Ice',
            'Wind' => 'Wind',
            'Poison' => 'Poison',
        ],
        ['prompt'=>'Selecione um Prisma']    // options
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

    <?= $form->field($model, 'tinta')->dropDownList(
        [
            'Grass 40%' => 'Grass 40%',
            'Purple 40%' => 'Purple 40%',
            'Sky 40%' => 'Sky 40%',
            'Lava 40%' => 'Lava 40%',
            'Rose 40%' => 'Rose 40%',
            'Fire 30%' => 'Fire 30%',
            'Ice 30%' => 'Ice 30%',
            'Poison 30%' => 'Poison 30%',
            'Night 30%' => 'Night 30%',
            'Vulcano 30%' => 'Vulcano 30%',
            'Walter 30%' => 'Walter 30%',
            'Gray 20%' => 'Gray 20%',
            'Green 20%' => 'Green 20%',
            'Orange 20%' => 'Orange 20%',
            'White 20%' => 'White 20%',
            'Black 20%' => 'Black 20%',
            'Elven 10%' => 'Elven 10%',
            'Magma 10%' => 'Magma 10%',
            'Redlight 10%' => 'Redlight 10%',
            'White Diamond 10%' => 'White Diamond 10%',
            'Black Diamond 10%' => 'Black Diamond 10%',
            'Violet 10%' => 'Violet 10%',
            'Bluelight 10%' => 'Bluelight 10%',

        ],
        ['prompt'=>'Selecione a Cor da Tinta']    // options
    ); ?>

    <?= $form->field($model, 'player')->textInput(['maxlength' => 32]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
