<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\unit\models\Basemodel */

$this->title = 'Create Basemodel';
$this->params['breadcrumbs'][] = ['label' => 'Basemodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basemodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
