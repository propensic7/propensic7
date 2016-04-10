<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PemesananBahanBaku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-bahan-baku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Pemesanan')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Timestamp_Pemesanan_Bahan_Baku')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
