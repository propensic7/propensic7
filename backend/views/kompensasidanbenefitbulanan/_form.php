<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KompensasiDanBenefitBulanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kompensasi-dan-benefit-bulanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Komben')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Bulan_Tahun')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Timestamp_KomBen')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
