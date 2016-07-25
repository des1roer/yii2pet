<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\unit\models\UnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a('Create Unit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(['enablePushState' => false]); ?>    
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'exp',
            'lvl',
            [
                'attribute' => 'base_id',
                'format' => 'raw',
                //'label' => 'раса',
                'filter' => ArrayHelper::map(\app\modules\unit\models\Basemodel::find()->all(), 'id', 'name'),
                'value' => 'base.name'
            ],
            [
                'attribute' => 'ext_id',
                'format' => 'raw',
                //'label' => 'раса',
                'filter' => ArrayHelper::map(\app\modules\unit\models\Extmodel::find()->all(), 'id', 'name'),
                'value' => 'ext.name'
            ],
            // 'ext_id',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
    <?php Pjax::end(); ?></div>
