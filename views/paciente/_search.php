<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PacienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paciente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pacienteID') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'cpf') ?>

    <?= $form->field($model, 'cnh') ?>

    <?= $form->field($model, 'identidade') ?>

    <?php // echo $form->field($model, 'emissor') ?>

    <?php // echo $form->field($model, 'nascimento') ?>

    <?php // echo $form->field($model, 'criado_em') ?>

    <?php // echo $form->field($model, 'contato') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
