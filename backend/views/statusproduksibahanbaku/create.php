<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StatusProduksiBahanBaku */

$this->title = 'Create Status Produksi Bahan Baku';
$this->params['breadcrumbs'][] = ['label' => 'Status Produksi Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-produksi-bahan-baku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
