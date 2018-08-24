<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Permits */

$this->title = 'แก้ไขเวชระเบียน: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'การยืม', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-warning box-solid">
  <div class ="box-header">
          <h3 class = "box-title"><i class="fa fa-home"></i> <?= Html::encode($this->title) ?></h3>
            </div>
          <div class="box-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
