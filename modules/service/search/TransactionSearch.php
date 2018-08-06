<?php

namespace app\modules\service\search;

use app\modules\service\models\Transaction;
use yii\data\ActiveDataProvider;

class TransactionSearch extends Transaction
{
    public function search(array $params = [])
    {
        $query = Transaction::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails

            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $function = Transaction::getDb()->driverName === 'sqlite'? 'RANDOM()': 'RAND()';

        $query->orderBy($function);

        return $dataProvider;
    }

}