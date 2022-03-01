<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "habitacion".
 *
 * @property int $id
 * @property int $numero
 * @property string $estado
 * @property string|null $fecha_ingreso
 * @property string|null $fecha_salida
 * @property string|null $cambio_estado
 * @property int|null $id_cliente
 */
class Habitacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'habitacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero', 'estado'], 'required'],
            [['numero'], 'unique'],
            [['numero', 'id_cliente'], 'integer'],
            [['fecha_ingreso', 'fecha_salida', 'cambio_estado'], 'safe'],
            [['estado'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'estado' => 'Estado',
            'fecha_ingreso' => 'Fecha Ingreso',
            'fecha_salida' => 'Fecha Salida',
            'cambio_estado' => 'Cambio Estado',
            'id_cliente' => 'Id Cliente',
        ];
    }
}
