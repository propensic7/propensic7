<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StatusPenerimaanBahanBaku */

$this->title = 'Update Status Penerimaan Bahan Baku: ' . ' ' . $model->Id_Penerimaan;
$this->params['breadcrumbs'][] = ['label' => 'Status Penerimaan Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Penerimaan, 'url' => ['view', 'id' => $model->Id_Penerimaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-penerimaan-bahan-baku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
