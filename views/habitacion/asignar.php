<?php

use app\models\Cliente;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Habitacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="habitacion-form">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Añadir cliente
    </button>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numero')->textInput(['disabled' => true])->label('Numero de la habitacion') ?>

    <?= $form->field($model, 'estado')->dropDownList(
        ['reservada' => 'Reservada', 'ocupada' => 'Ocupada'],
        ['prompt' => 'Seleccione...']
    );  ?>

    <?= $form->field($model, 'fecha_ingreso')->input('date') ?>

    <?= $form->field($model, 'fecha_salida')->input('date') ?>

    <?php date_default_timezone_set('America/Bogota');
    $fechaActual = date("Y-m-d H:i:s");
    ?>

    <?= $form->field($model, 'cambio_estado')->hiddenInput(['value' => $fechaActual])->label(false) ?>

    <?= $form->field($model, 'id_cliente')->label('Selecciona al Cliente')->dropDownList(
        ArrayHelper::map(Cliente::find()->all(), 'id', 'nombre'),
        ['prompt' => 'Seleccione...']
    ); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir nuevo cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $form = ActiveForm::begin()?>

                    <?= $form->field($modelCliente, 'cedula')->textInput() ?>

                    <?= $form->field($modelCliente, 'nombre')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($modelCliente, 'telefono')->textInput() ?>

                    <?= $form->field($modelCliente, 'correo')->textInput(['maxlength' => true]) ?>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <?= Html::submitButton('Guardar cliente', ['class' => 'btn btn-primary']) ?>
                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>

</div>