<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\click\models\ClickTransactionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Click Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="click-transactions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Click Transactions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'click_trans_id',
            'amount',
            'click_paydoc_id',
            //'service_id',
            //'sign_time',
            //'status',
            //'create_time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
