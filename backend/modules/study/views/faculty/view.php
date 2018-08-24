<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Faculty */

$this->title = $model->faculty_name;
$this->params['breadcrumbs'][] = ['label' => 'คณะวิชา', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
  <div class ="box-header">
          <h3 class = "box-title"><i class="fa fa-home"></i> <?= Html::encode($this->title) ?></h3>
            </div>
          <div class="box-body">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->faculty_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->faculty_id], [
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
            'faculty_id',
            'faculty_name',
        ],
    ]) ?>

</div>
</div>
