<?php

use yii\helpers\Html;
?>
<?= Html::encode($message) ?>

<?=

$form->field($model, 'from_date')->widget('WidgetClassName', [
        // configure additional widget properties here
])
?>