<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Siswaku */

$this->title = 'Create Siswaku';
$this->params['breadcrumbs'][] = ['label' => 'Siswakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswaku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
