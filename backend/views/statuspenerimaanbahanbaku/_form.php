<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatusPenerimaanBahanBaku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-penerimaan-bahan-baku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Penerimaan')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'BahanBaku')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Jumlah_Dipesan')->textInput() ?>

    <?= $form->field($model, 'Jumlah_Diterima')->textInput() ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
