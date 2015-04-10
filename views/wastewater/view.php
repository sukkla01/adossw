<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wastewater */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wastewaters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wastewater-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date_rec',
            'time_rec',
            'too1',
            'too2',
            'takon',
            'pump',
            'chlorine',
            'pump_chlorine',
            'count_chlorine',
            'ph',
            'do',
            'staff',
            'comment',
        ],
    ]) ?>

</div>
