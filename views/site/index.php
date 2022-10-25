<?php
$this->title = 'Administración';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">
<div class="row">
    
</div>
    <?php $command = Yii::$app->db->createCommand("SELECT count(*) FROM tbl_categorias");  
                $categoria = $command->queryScalar();
    ?>
     <?php $command = Yii::$app->db->createCommand("SELECT count(*) FROM tbl_productos");  
                $producto = $command->queryScalar();
    ?>
    <?php $command = Yii::$app->db->createCommand("SELECT count(*) FROM tbl_inventario");  
                $inventario = $command->queryScalar();
    ?>

    <!---Fila dos-->
    <div class="row">
        
        <div class="col-md-4 col-sm-2 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'CATEGORIAS',
                'number' => $categoria,
                'theme' => 'red',
                'icon' => 'fa fa-list-alt',
            ]) ?>
        </div>
        
        <div class="col-md-4 col-sm-4 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'PRODUCTOS ',
                'number' => $producto ,
                'theme' => 'green',
                'icon' => 'fa fa-star',
            ]) ?>
        </div>
        <div class="col-md-4 col-sm-4 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'INVENTARIO',
                'number' => $inventario ,
                'theme' => 'warning',
                'icon' => 'fa fa-archive',
            ]) ?>
        </div>
    </div>

    
</div>