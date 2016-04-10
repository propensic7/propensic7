<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MenuMakanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-makanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Menu')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Nama_Menu')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'Harga_Menu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
