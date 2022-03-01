<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Habitacion */

$this->title = 'Update Habitacion: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Habitacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="habitacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_updateform', [
        'model' => $model,
    ]) ?>

</div>
