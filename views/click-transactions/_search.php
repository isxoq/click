<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\click\models\ClickTransactionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="click-transactions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'click_trans_id') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'click_paydoc_id') ?>

    <?php // echo $form->field($model, 'service_id') ?>

    <?php // echo $form->field($model, 'sign_time') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
