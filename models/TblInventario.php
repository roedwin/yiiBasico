<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_inventario".
 *
 * @property int $id_inventario
 * @property int|null $id_producto
 * @property int|null $existencias
 * @property string $fecha_ing
 * @property string $fecha_mod
 * @property int $id_usuario
 *
 * @property TblProductos $producto
 * @property TblUsuarios $usuario
 */
class TblInventario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_inventario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'fecha_ing', 'fecha_mod', 'id_usuario'], 'required'],
            [['id_producto', 'existencias', 'id_usuario'], 'integer'],
            [['fecha_ing', 'fecha_mod'], 'safe'],
            [['id_inventario'], 'unique'],
            [['id_producto'], 'exist', 'skipOnError' => true, 'targetClass' => TblProductos::class, 'targetAttribute' => ['id_producto' => 'id_producto']],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => TblUsuarios::class, 'targetAttribute' => ['id_usuario' => 'id_usuario']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_inventario' => Yii::t('app', 'Id Inventario'),
            'id_producto' => Yii::t('app', 'Producto'),
            'existencias' => Yii::t('app', 'Existencias'),
            'fecha_ing' => Yii::t('app', 'Fecha Ing'),
            'fecha_mod' => Yii::t('app', 'Fecha Mod'),
            'id_usuario' => Yii::t('app', 'Id Usuario'),
        ];
    }

    /**
     * Gets query for [[Producto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(TblProductos::class, ['id_producto' => 'id_producto']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(TblUsuarios::class, ['id_usuario' => 'id_usuario']);
    }
}
