<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblInventario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-inventario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_inventario')->textInput() ?>

    <?= $form->field($model, 'id_producto')->textInput() ?>

    <?= $form->field($model, 'existencias')->textInput() ?>

    <?= $form->field($model, 'fecha_ing')->textInput() ?>

    <?= $form->field($model, 'fecha_mod')->textInput() ?>

    <?= $form->field($model, 'id_usuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
