<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\akun3 */
?>
<div class="akun3-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_akun1',
            'kd_akun2',
            'kd_akun3',
            'akun3',
        ],
    ]) ?>

</div>
