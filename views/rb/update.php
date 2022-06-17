<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rb */

$this->title = 'Update Rb: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
