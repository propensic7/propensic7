<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengeluaranHarianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengeluaran-harian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Pengeluaran') ?>

    <?= $form->field($model, 'Jenis_Pengeluaran') ?>

    <?= $form->field($model, 'Total') ?>

    <?= $form->field($model, 'Keterangan') ?>

    <?= $form->field($model, 'Pencatat') ?>

    <?php // echo $form->field($model, 'Timestamp_Pengeluaran_Harian') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
