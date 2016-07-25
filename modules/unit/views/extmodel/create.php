<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\unit\models\ExtModel */

$this->title = 'Create Ext Model';
$this->params['breadcrumbs'][] = ['label' => 'Ext Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ext-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
