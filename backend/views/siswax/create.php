<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Siswax */

$this->title = 'Create Siswax';
$this->params['breadcrumbs'][] = ['label' => 'Siswaxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswax-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
