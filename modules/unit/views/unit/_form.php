<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\unit\models\Unit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lvl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'base_id')->dropDownList(ArrayHelper::map(\app\modules\unit\models\Basemodel::find()->all(), 'id', 'name'), ['prompt' => 'Select...']) ?>

    <?= $form->field($model, 'ext_id')->dropDownList(ArrayHelper::map(\app\modules\unit\models\Extmodel::find()->all(), 'id', 'name'), ['prompt' => 'Select...']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
