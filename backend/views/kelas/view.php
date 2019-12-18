<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kelas */

$this->title = $model->namakelas;
$this->params['breadcrumbs'][] = ['label' => 'Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kelas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kelas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kelas], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kelas',
            'namakelas',
        ],
    ]) ?>
	 <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                    </tr>
                    <?php
                        $no=0;
                        foreach($siswa as $s){
                            $no++;
                            echo "
                            <tr>
                                <td>".$no."</td>
                                <td>".$s->nis."</td>
                                <td>".$s->nama."</td>
                                <td>".$s->namakelas."</td>
                                </tr>
                            ";
                        }
                    ?>
                </table>
            </div>

</div>
