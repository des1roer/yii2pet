<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\unit\models\Extmodel */

$this->title = 'Update Extmodel: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Extmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="extmodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
