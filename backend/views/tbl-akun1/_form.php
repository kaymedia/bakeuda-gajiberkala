<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAkun1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-akun1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_akun1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akun1')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
