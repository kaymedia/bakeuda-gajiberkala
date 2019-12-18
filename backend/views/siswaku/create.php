<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Siswaku */

$this->title = 'Create Siswaku';
$this->params['breadcrumbs'][] = ['label' => 'Siswakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswaku-create">


<?php $form = ActiveForm::begin(); ?>
 <?= $form->field($model, 'nis')->textInput() ?>
 <?= $form->field($model, 'nama')->textInput() ?>
 <?= $form->field($model, 'id_kelas')->textInput() ?>
  <?= $form->field($model, 'tglmasuk')->widget(
        DatePicker::className(), [
            
	'options' => ['placeholder' => 'Pilih Tanggal Masuk ...'],
	'pluginOptions' => [
		'format' => 'dd-MM-yyyy',
		'todayHighlight' => true
	]
    ]);?>
<br>
 <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	 <?php ActiveForm::end(); ?>
	

</div>
