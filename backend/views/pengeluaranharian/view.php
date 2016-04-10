<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PengeluaranHarian */

$this->title = $model->Id_Pengeluaran;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengeluaran-harian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Pengeluaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Pengeluaran], [
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
            'Id_Pengeluaran',
            'Jenis_Pengeluaran',
            'Total',
            'Keterangan',
            'Pencatat',
            'Timestamp_Pengeluaran_Harian',
        ],
    ]) ?>

</div>
