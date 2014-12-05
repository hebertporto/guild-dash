<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';

?>
<div class="col-md-4 text-center" style="margin-top: 150px; padding-top: 120px;">
    <img src="<?php echo Yii::$app->urlManager->baseUrl . '/images/logo-v1.png'; ?>">
</div>

<div class="well col-md-4" style="margin-top: 150px; margin-left: 150px;">
    <div class="row">
        <div class="site-login" style ="margin-left: 10px">
            <div class="text-center">
                <h2 class="text-muted">Login</h2>
                <p>Informe Login e Senha para prosseguir:</p><br />
            </div>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-8 col-sm-8\" style=\" margin-left: 20px;\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->label('Login:')  ?>

            <?= $form->field($model, 'password')->passwordInput()->label('Senha:') ?>
            <div style="margin-left: 70px;">
                <?= $form->field($model, 'rememberMe', [
                    'template' => "<div class=\" col-lg-3\" style=\" margin-left: 15px;\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ])->checkbox() ?>
            </div>
            <div class="form-group">
                <div class="col-lg-11">
                    <?= Html::submitButton('Logar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            <div style="color:#999;">
            </div>
        </div>
    </div>
</div>