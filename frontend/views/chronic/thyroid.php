<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;

$this->title = "THYROID";
$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['chronic/index']];
$this->params['breadcrumbs'][] = 'รายงานผู้ป้วยโรคเรื้อรังมารับบริการคลินิกไทรอยด์[E050-E059](คน)';
?>
<b style="color:blue ">รายงานผู้ป้วยโรคเรื้อรังมารับบริการคลินิกไทรอยด์</b> <b style="color: red">(คน)</b>

<div class='well'>
    <?php $form = ActiveForm::begin(); ?>
     วันที่ระหว่าง:
           <?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date1',
            'value' => $date1,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ]
        ]);
        ?>
        ถึง:
           <?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date2',
            'value' => $date2,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ]
        ]);
        ?>
        <button class='btn btn-danger'> ตกลง </button>

    <?php ActiveForm::end(); ?>
</div>
<?php

echo GridView::widget([
        'dataProvider' => $dataProvider,
        'panel' => [
            'before'=>'<b style="color:blue ">รายงานผู้ป้วยโรคเรื้อรังมารับบริการคลินิกไทรอยด์(คน)</b>(<b style="color: red">E050-E059</b>)',
            'after'=>'ประมวลผล '.date('Y-m-d H:i:s')
            ],
    ]
  );

        ?>
    
        <div class="alert alert-danger">
            <?=$sql?>
        </div>
