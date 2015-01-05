<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

$this->title = 'Fila de Armas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fila-arma-index">

    <h3>Fila de Armas</h3>
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>

        <?php //$form->field($model, 'posicao')->textInput() ?>

        <?= $form->field($model, 'player')->dropDownList(
            \yii\helpers\ArrayHelper::map(\app\models\FilaArma::find()->all(),'player', 'player')
        ) ?>

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
</div>
