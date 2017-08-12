<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Crud_test1 */

$this->title = 'Update Crud Test1: ' . $model->campoa;
$this->params['breadcrumbs'][] = ['label' => 'Crud Test1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->campoa, 'url' => ['view', 'id' => $model->campoa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="crud-test1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
