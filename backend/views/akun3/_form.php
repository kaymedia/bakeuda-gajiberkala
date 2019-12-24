<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\akun3 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun3-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_akun1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_akun2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_akun3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akun3')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
