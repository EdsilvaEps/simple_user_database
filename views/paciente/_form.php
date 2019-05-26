<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Paciente */
/* @var $form yii\widgets\ActiveForm */
$formatData = date('Y-m-d');
?>

<div class="paciente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emissor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nascimento')->textInput(['placeholder'=>"dd/mm/yyyy", 'maxlength' => true]) ?>

    <?= $form->field($model, 'criado_em')->hiddenInput(['value'=>$formatData])->label(false); ?>

    <?= $form->field($model, 'contato')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
