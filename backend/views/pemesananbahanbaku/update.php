<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PemesananBahanBaku */

$this->title = 'Update Pemesanan Bahan Baku: ' . ' ' . $model->Id_Pemesanan;
$this->params['breadcrumbs'][] = ['label' => 'Pemesanan Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Pemesanan, 'url' => ['view', 'id' => $model->Id_Pemesanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemesanan-bahan-baku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
