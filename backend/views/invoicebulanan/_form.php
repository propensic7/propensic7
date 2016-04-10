<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvoiceBulanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invoice-bulanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Invoice')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Tanggal_Diterima')->textInput() ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
