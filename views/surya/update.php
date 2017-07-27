<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Surya */

$this->title = 'Update Surya: ' . $model->phone;
$this->params['breadcrumbs'][] = ['label' => 'Suryas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->phone, 'url' => ['view', 'id' => $model->phone]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
