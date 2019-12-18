<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Siswax */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswax-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kelas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
