<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Habitacion;

/**
 * HabitacionSearch represents the model behind the search form of `app\models\Habitacion`.
 */
class HabitacionSearch extends Habitacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'numero', 'id_cliente'], 'integer'],
           [['estado', 'fecha_ingreso', 'fecha_salida', 'cambio_estado'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Habitacion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'numero' => $this->numero,
            'fecha_ingreso' => $this->fecha_ingreso,
            'fecha_salida' => $this->fecha_salida,
            'cambio_estado' => $this->cambio_estado,
            'id_cliente' => $this->id_cliente,
        ]);

        $query->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
