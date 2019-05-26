<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PacienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pacientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paciente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Paciente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pacienteID',
            'nome',
            'cpf',
            'cnh',
            'identidade',
            //'emissor',
            //'nascimento',
            //'criado_em',
            //'contato',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
