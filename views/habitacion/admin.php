<?php

use app\models\Habitacion;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HabitacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Administrar habitaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="habitacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Agregar habitacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'numero',
            'estado',
            'fecha_ingreso',
            'fecha_salida',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Habitacion $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>