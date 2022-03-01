<?php

use app\models\Habitacion;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HabitacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Habitaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="habitacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Gestionar habitaciones', ['admin'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>



    <?php
    function stylo($estado)
    {
        if ($estado == 'disponible') {
            return "card text-white bg-success mb-3";
        } else if ($estado == 'mantenimiento') {
            return "card text-dark bg-warning mb-3";
        } else if ($estado == 'reservada') {
            return "card text-white bg-secondary mb-3";
        } else if ($estado == 'ocupada') {
            return "card text-white bg-danger mb-3";
        } else {
            return "card text-dark bg-info mb-3";
        }
    }
    ?>
    <?php foreach ($model   as $row) : ?>
        

        <div class="<?= stylo($row->estado) ?>" style="max-width: 18rem;">
            <div class="card-header">
                <p class="h1 text-center"><?= $row->numero ?></p>
            </div>
            <div class="card-body">
                <h2 class="card-title"><?= $row->estado ?></h2>
                

            </div>
            <div class="card-footer bg-transparent border-dark">
                <a href="#" class="btn btn-light ">tiempo de estado</a>
                <a href="<?=Url::toRoute(['asignar','id'=>$row->id]) ?>" class="btn btn-light <?= $row->estado == 'disponible'? 'enabled': 'disabled' ?>">Asignar </a>
            </div>
        </div>

    <?php endforeach; ?>



</div>