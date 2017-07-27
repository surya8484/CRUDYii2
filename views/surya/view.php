<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Surya */

$this->title = $model->firstname;
$this->params['breadcrumbs'][] = ['label' => 'Suryas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surya-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->phone], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->phone], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'firstname',
            'lastname',
            'phone',
            'email:email',
        ],
    ]) ?>

</div>
