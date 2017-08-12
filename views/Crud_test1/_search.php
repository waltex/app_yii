<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchCrud_test1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="crud-test1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'campoa') ?>

    <?= $form->field($model, 'campob') ?>

    <?= $form->field($model, 'campod') ?>

    <?= $form->field($model, 'campoe') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
