<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatusProduksiBahanBakuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-produksi-bahan-baku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Produksi') ?>

    <?= $form->field($model, 'BahanBakuProduksi') ?>

    <?= $form->field($model, 'Bahan_Diambil') ?>

    <?= $form->field($model, 'Bahan_Terproses') ?>

    <?= $form->field($model, 'Keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
