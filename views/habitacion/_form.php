<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Habitacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="habitacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'estado')->hiddenInput(['value'=>'disponible'])->label(false); ?>
    <?php  /* echo $form->field($model, 'estado')->dropDownList(
            ['disponible' => 'Disponible', 'mantenimiento' => 'Mantenimiento', 'reservada' => 'Reservada','ocupada' => 'Ocupada'],
            ['prompt' => 'Seleccione...']
        ); */ ?>

    <?php /*  echo $form->field($model, 'fecha_ingreso')->hiddenInput('date') */ ?>

    <?php /*  echo $form->field($model, 'fecha_salida')->hiddenInput('date') */ ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
