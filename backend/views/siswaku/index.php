<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SiswakuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswaku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswaku-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Siswaku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_siswa',
            'nis',
            'nama',
            'kelas.namakelas',
            'tglmasuk',
			'gajiorangtua',
			
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
