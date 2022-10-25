<?php

use yii\helpers\Html;

$this->title = 'Detalle';
$this->params['breadcrumbs'][] = ['label' => 'Listado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title"><?= $model->producto->nombre ?></h3>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-hover table-bordered">
                    <tr>
                        <td width="200px"><b>ID:</b></td>
                        <td><?= $model->id_inventario ?></td>
                    </tr>
                    <tr>
                        <td><b>Producto:</b></td>
                        <td><?= $model->producto->nombre ?></td>
                    </tr>
                    <tr>
                        <td><b>Existencias:</b></td>
                        <td><?= $model->existencias ?></td>
                    </tr>
                    <tr>
                        <td><b>Fecha Creación:</b></td>
                        <td><?= $model->fecha_ing?></td>
                        <tr>
                        <td><b>Fecha Editado:</b></td>
                        <td><?= $model->fecha_mod?></td>
                    </tr>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <?php echo Html::a('<i class="fa fa-edit"></i> Editar', ['update', 'id_inventario' => $model->id_inventario], ['class' => 'btn btn-primary', 'data-toggle' => 'tooltip', 'title' => 'Edit record']) ?>
                <?php echo Html::a('<i class="fa fa-ban"></i> Cancelar', ['index'], ['class' => 'btn btn-danger', 'data-toggle' => 'tooltip', 'title' => 'Cancelar']) ?>
            </div>
        </div>
    </div>
</div>