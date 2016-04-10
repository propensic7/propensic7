<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InvoiceBulanan */

$this->title = 'Update Invoice Bulanan: ' . ' ' . $model->Id_Invoice;
$this->params['breadcrumbs'][] = ['label' => 'Invoice Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Invoice, 'url' => ['view', 'id' => $model->Id_Invoice]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="invoice-bulanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
