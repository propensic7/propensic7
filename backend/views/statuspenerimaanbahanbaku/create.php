<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StatusPenerimaanBahanBaku */

$this->title = 'Create Status Penerimaan Bahan Baku';
$this->params['breadcrumbs'][] = ['label' => 'Status Penerimaan Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-penerimaan-bahan-baku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
