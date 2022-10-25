<?php

use app\models\TblCategorias;
use kartik\daterange\DateRangePicker;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\Select2;
use kartik\widgets\FileInput;

use kartik\widgets\SwitchInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Crear / Editar registro</h3>
            </div>
            <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); ?>
            <div class="card-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <?= Html::activeLabel($model, 'nombre', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'nombre', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= Html::activeLabel($model, 'id_categoria', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'id_categoria', ['showLabels' => false])->widget(Select2::class, [
                                'data' => ArrayHelper::map(TblCategorias::find()->all(), 'id_categoria', 'nombre'),
                                'language' => 'es',
                                'options' => ['placeholder' => '- Seleccionar Categoria -'],
                                'pluginOptions' => ['allowClear' => true],
                            ]); ?>
                        </div>
                        <div class="col-md-12">
                            <?= Html::activeLabel($model, 'descripcion', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'descripcion', ['showLabels' => false])->textarea(['rows' => 4]) ?>
                        </div>
                      <!--  <div class="col-md-6">
                            <php?= Html::activeLabel($model, 'imagen', ['class' => 'control-label']) ?>
                            <php?= $form->field($model, 'imagen', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>-->
                        <div class="col-md-12">
                            <?= Html::activeLabel($model, 'imagen', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'imagen', ['showLabels' => false])->widget(
                                FileInput::class,
                                ['options' => ['accept' => 'image/*']]
                            ); ?>
                            <?= $form->field($model, 'imagen', ['showLabels' => false])->hiddenInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= Html::activeLabel($model, 'estado', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'estado', ['showLabels' => false])->label('Estado')->widget(SwitchInput::class, [
                                'value' => $model->estado, //checked status can change by db value
                                'options' => ['uncheck' => 0, 'value' => 1], //value if not set ,default is 1
                                'pluginOptions' => [
                                    'handleWidth' => 60,
                                    'onColor' => 'success',
                                    'offColor' => 'danger',
                                    'onText' => 'Activo',
                                    'offText' => 'Inactivo'
                                ]
                            ]); ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Guardar' : '<i class="fa fa-save"></i> Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        <?= Html::a('<i class="fa fa-ban"></i> Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
                    </div>
                </form>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>