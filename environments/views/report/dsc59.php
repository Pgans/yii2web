<?php
use kartik\grid\GridView;
use yii\helpers\Html;

$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายงานนับผู้ป่วยแยกตามแผนก';
echo GridView::widget([
        'dataProvider' => $dataProvider,
        'panel' => [
            'before'=>'รายงานผู้ป่วยมารับบริการแยกตามแผนก59',
            'after'=>'ประมวลผล '.date('Y-m-d H:i:s')
          ],
              'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'unit_id',
                        'header' => 'รหัสแผนก',
                    ],
                    [
                        'attribute' => 'แผนกที่รับบริการ',
                        'format' => 'raw',
                        'value' => function($model) {
                            $unitid = $model['unit_id'];
                            $cuname = $model['แผนกที่รับบริการ'];
                            return Html::a(Html::encode($cuname), ['report/dsc_list59', 'unit_id' => $unitid]);
                        }
                            ],
                         [
                                'attribute' => 'จำนวนผู้ป่วย',
                                'header' => 'จำนวนผู้ป่วย(คน)'
                            ],
                  ]
                ]
                    )

                    ?>
                    <div class="alert alert-danger">
                        <?=$sql?>
                    </div>
