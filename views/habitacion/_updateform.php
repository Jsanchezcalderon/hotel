<?php

use app\models\Cliente;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Habitacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="habitacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'estado')->dropDownList(
        ['disponible' => 'Disponible', 'mantenimiento' => 'Mantenimiento', 'reservada' => 'Reservada', 'ocupada' => 'Ocupada'],
        ['prompt' => 'Seleccione...']
    );  ?>

    <?= $form->field($model, 'fecha_ingreso')->input('date') ?>

    <?= $form->field($model, 'fecha_salida')->input('date') ?>

    <?php date_default_timezone_set('America/Bogota');
     $fechaActual = date("Y-m-d H:i:s"); 
     ?>
    
    <?= $form->field($model, 'cambio_estado')->hiddenInput(['value'=>$fechaActual])->label(false) ?>

    <?= $form->field($model, 'id_cliente')->label('Selecciona al Cliente')->dropDownList(
            ArrayHelper::map(Cliente::find()->all(), 'id', 'nombre'),
            ['prompt' => 'Seleccione...']
        ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>