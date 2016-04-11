<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KaryawanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karyawan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Karyawan') ?>

    <?= $form->field($model, 'Nama') ?>

    <?= $form->field($model, 'Alamat') ?>

    <?= $form->field($model, 'No_Telepon') ?>

    <?= $form->field($model, 'Pendidikan_Terakhir') ?>

    <?php // echo $form->field($model, 'Gaji') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
