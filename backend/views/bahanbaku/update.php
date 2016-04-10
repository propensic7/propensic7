<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BahanBaku */

$this->title = 'Update Bahan Baku: ' . ' ' . $model->Id_Bahan;
$this->params['breadcrumbs'][] = ['label' => 'Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Bahan, 'url' => ['view', 'id' => $model->Id_Bahan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bahan-baku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
