<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BahanBaku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bahan-baku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Bahan')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Nama_Bahan')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'Jumlah_Stock')->textInput() ?>

    <?= $form->field($model, 'Satuan')->textInput(['maxlength' => 25]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
