<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblInventario */

$this->title = Yii::t('app', ' Inventario');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', ' Inventario'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_inventario, 'url' => ['view', 'id_inventario' => $model->id_inventario]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="tbl-inventario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
