<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Sign Up');

?>

<h1><?php echo Html::encode($this->title) ?></h1>

<p><?php echo Yii::t('app', 'Please, register:') ?></p>

<?php
	$registerForm = ActiveForm::begin([
		'id' => 'register-form',
		'layout' => 'horizontal',
		'fieldConfig' => [
			'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
			'labelOptions' => ['class' => 'col-lg-1 control-label'],
		],
	]);
?>
    <?php echo $registerForm->errorSummary($newUser) ?>
    <?php echo $registerForm->field($newUser, 'username')->textInput(['autofocus' => true]) ?>
    <?php echo $registerForm->field($newUser, 'email')->textInput() ?>
    <?php echo $registerForm->field($newUser, 'password')->passwordInput(['value' => '']) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?php echo Html::submitButton(Yii::t('app', 'Sign Up'), ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>