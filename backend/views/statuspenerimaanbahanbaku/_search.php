<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatusPenerimaanBahanBakuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-penerimaan-bahan-baku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Penerimaan') ?>

    <?= $form->field($model, 'BahanBaku') ?>

    <?= $form->field($model, 'Jumlah_Dipesan') ?>

    <?= $form->field($model, 'Jumlah_Diterima') ?>

    <?= $form->field($model, 'Keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
