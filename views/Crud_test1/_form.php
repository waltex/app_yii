<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Crud_test1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="crud-test1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'campoa')->textInput() ?>

    <?= $form->field($model, 'campob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campoe')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
