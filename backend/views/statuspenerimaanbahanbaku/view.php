<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StatusPenerimaanBahanBaku */

$this->title = $model->Id_Penerimaan;
$this->params['breadcrumbs'][] = ['label' => 'Status Penerimaan Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-penerimaan-bahan-baku-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Penerimaan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Penerimaan], [
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
            'Id_Penerimaan',
            'BahanBaku',
            'Jumlah_Dipesan',
            'Jumlah_Diterima',
            'Keterangan',
        ],
    ]) ?>

</div>
