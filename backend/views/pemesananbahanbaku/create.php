<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PemesananBahanBaku */

$this->title = 'Create Pemesanan Bahan Baku';
$this->params['breadcrumbs'][] = ['label' => 'Pemesanan Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-bahan-baku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
