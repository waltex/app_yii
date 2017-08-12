<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCrud_test1 */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Crud Test1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crud-test1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Crud Test1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'campoa',
            'campob',
            'campod',
            'campoe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
