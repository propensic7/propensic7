<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Komposisi */

$this->title = $model->Menu;
$this->params['breadcrumbs'][] = ['label' => 'Komposisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komposisi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Menu' => $model->Menu, 'Bahan_Baku' => $model->Bahan_Baku], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Menu' => $model->Menu, 'Bahan_Baku' => $model->Bahan_Baku], [
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
            'Menu',
            'Bahan_Baku',
            'Jumlah_Bahan_Baku',
        ],
    ]) ?>

</div>
