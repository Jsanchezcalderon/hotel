<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property int $cedula
 * @property string $nombre
 * @property int $telefono
 * @property string $correo
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cedula', 'nombre', 'telefono', 'correo'], 'required'],
            [['cedula', 'telefono'], 'integer'],
            [['cedula'], 'unique'],
            [['nombre', 'correo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cedula' => 'Cedula',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
        ];
    }
}
