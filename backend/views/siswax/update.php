<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Siswax */

$this->title = 'Update Siswax: ' . $model->id_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Siswaxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_siswa, 'url' => ['view', 'id' => $model->id_siswa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siswax-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
