<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\unit\models\BaseModel */

$this->title = 'Create Base Model';
$this->params['breadcrumbs'][] = ['label' => 'Base Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="base-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
