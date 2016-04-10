<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StatusProduksiBahanBaku */

$this->title = $model->Id_Produksi;
$this->params['breadcrumbs'][] = ['label' => 'Status Produksi Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-produksi-bahan-baku-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Produksi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Produksi], [
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
            'Id_Produksi',
            'BahanBakuProduksi',
            'Bahan_Diambil',
            'Bahan_Terproses',
            'Keterangan',
        ],
    ]) ?>

</div>
