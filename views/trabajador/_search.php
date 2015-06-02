<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrabajadorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trabajador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'indicador') ?>

    <?= $form->field($model, 'cedula') ?>

    <?= $form->field($model, 'telefono') ?>

    <?= $form->field($model, 'extension') ?>

    <?= $form->field($model, 'supervisor') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'apellido') ?>

    <?php // echo $form->field($model, 'pass') ?>

    <?php // echo $form->field($model, 'division') ?>

    <?php // echo $form->field($model, 'proceso') ?>

    <?php // echo $form->field($model, 'rol') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
