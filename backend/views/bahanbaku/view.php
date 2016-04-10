<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BahanBaku */

$this->title = $model->Id_Bahan;
$this->params['breadcrumbs'][] = ['label' => 'Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahan-baku-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Bahan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Bahan], [
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
            'Id_Bahan',
            'Nama_Bahan',
            'Jumlah_Stock',
            'Satuan',
        ],
    ]) ?>

</div>
