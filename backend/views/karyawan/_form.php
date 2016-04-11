<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Karyawan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karyawan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Karyawan')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'Alamat')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'No_Telepon')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'Pendidikan_Terakhir')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'Gaji')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
