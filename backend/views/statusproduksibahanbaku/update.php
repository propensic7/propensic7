<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StatusProduksiBahanBaku */

$this->title = 'Update Status Produksi Bahan Baku: ' . ' ' . $model->Id_Produksi;
$this->params['breadcrumbs'][] = ['label' => 'Status Produksi Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Produksi, 'url' => ['view', 'id' => $model->Id_Produksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-produksi-bahan-baku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
