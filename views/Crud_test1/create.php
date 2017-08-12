<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Crud_test1 */

$this->title = 'Create Crud Test1';
$this->params['breadcrumbs'][] = ['label' => 'Crud Test1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crud-test1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
