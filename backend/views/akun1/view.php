<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\akun1 */
?>
<div class="akun1-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_akun1',
            'akun1',
        ],
    ]) ?>

</div>
