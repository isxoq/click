<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\click\models\ClickTransactions */

$this->title = 'Create Click Transactions';
$this->params['breadcrumbs'][] = ['label' => 'Click Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="click-transactions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
