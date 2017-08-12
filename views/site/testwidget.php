<?php

use yii\bootstrap\Progress;
use yii\bootstrap\Alert;
use yii\bootstrap\Button;
use yii\bootstrap\ButtonGroup;
use yii\bootstrap\Html;
use yii\jui\DatePicker;

//yii\bootstrap\Alert » yii\bootstrap\Widget » yii\base\Widget » yii\base\Component » yii\base\Object
?>


<?= Progress::widget(['percent' => 60, 'label' => 'Progress x63%']) ?>





<?php

$a = 10;
$alert = Alert::widget([
            'options' => [
                'class' => 'alert-info',
            ],
            'body' => 'Say hello...',
                //'id' => 'alert_1',
                //'counter' => '1',
        ]);
echo $alert;

echo Button::widget([
    'label' => 'Action',
    'options' => ['class' => 'btn-primary'], // produces class "btn btn-primary"
]);

echo ButtonGroup::widget([
    'options' => [
        'class' => ['widget' => 'btn-group-vertical'] // replaces 'btn-group' with 'btn-group-vertical'
    ],
    'buttons' => [
        ['label' => 'A'],
        ['label' => 'B'],
    ]
]);
echo '<br>';
echo Button::widget([
    'label' => Html::icon('approve') . Html::encode('Save & apply'),
    'encodeLabel' => false,
    'options' => ['class' => 'btn-primary'],
]);
//yii\jui\DatePicker::widget(['name' => 'attributeName', 'clientOptions' => ['defaultDate' => '2014-01-01']])
?>
