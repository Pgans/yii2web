<?php
use kartik\grid\GridView;
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'ancbrush';
$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['dental/index']];
$this->params['breadcrumbs'][] = 'รายงานสอนแปรงฟันหญิงตั้งครรภ์(2338610,2338611)';
?>
<b>รายงานสอนแปรงฟันหญิงตั้งครรภ์</b>
<div class='well'>
    <?php $form = ActiveForm::begin(); ?>
     ระหว่างวันที่:
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
            'before'=>'<b style="color:blue ">รายงานสอนแปรงฟันหญิงตั้งครรภ์(2338610,2338611)</b>(<b style="color: red">(ครั้ง)</b>)',
            'after'=>'ประมวลผล '.date('Y-m-d H:i:s')
            ],
    ]
  );

        ?>