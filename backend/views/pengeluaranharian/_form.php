<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengeluaranHarian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengeluaran-harian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Pengeluaran')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Jenis_Pengeluaran')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'Total')->textInput() ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Pencatat')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Timestamp_Pengeluaran_Harian')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
