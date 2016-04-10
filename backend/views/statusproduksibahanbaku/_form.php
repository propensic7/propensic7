<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatusProduksiBahanBaku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-produksi-bahan-baku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Produksi')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'BahanBakuProduksi')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Bahan_Diambil')->textInput() ?>

    <?= $form->field($model, 'Bahan_Terproses')->textInput() ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
