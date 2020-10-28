<?php

namespace backend\modules\click\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\click\models\ClickTransactions;

/**
 * ClickTransactionsSearch represents the model behind the search form of `backend\modules\click\models\ClickTransactions`.
 */
class ClickTransactionsSearch extends ClickTransactions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'click_trans_id', 'amount', 'click_paydoc_id', 'service_id', 'status', 'create_time'], 'integer'],
            [['sign_time'], 'safe'],
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
        $query = ClickTransactions::find();

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
            'user_id' => $this->user_id,
            'click_trans_id' => $this->click_trans_id,
            'amount' => $this->amount,
            'click_paydoc_id' => $this->click_paydoc_id,
            'service_id' => $this->service_id,
            'status' => $this->status,
            'create_time' => $this->create_time,
        ]);

        $query->andFilterWhere(['like', 'sign_time', $this->sign_time]);

        return $dataProvider;
    }
}
