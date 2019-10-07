<?php 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
	<h1><?= Html::encode($this->title) ?></h1>
	
	<p>Fill out the following fields to signup</p>

	<?php $form = ActiveForm::begin([
		'id' => 'login-form',
		'layout' => 'horizontal',
		'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
	]); ?>

	<?= $form->field($model, 'username')->textInput(['autofocus' => true, 'id' => 'register-username']) ?>

	<?= $form->field($model, 'email')->textInput([ 'id' => 'register-email']) ?>

	<?= $form->field($model, 'password')->passwordInput(['id' => 'register-password']) ?>

	<?= $form->field($model, 'displayname')->textInput(['id' => 'register-displayname']) ?>

	<div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
            </div>
    </div>

    <?php ActiveForm::end() ?>

</div>