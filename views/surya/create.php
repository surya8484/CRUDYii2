<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Surya */

$this->title = 'Create Data for Application Process';
$this->params['breadcrumbs'][] = ['label' => 'Suryas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
