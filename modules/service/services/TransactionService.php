<?php
namespace app\modules\service\services;

use app\modules\service\search\TransactionSearch;

class TransactionService
{
    protected $transactionSearch;

    public function __construct(TransactionSearch $transactionSearch)
    {
        $this->transactionSearch = $transactionSearch;
    }

    public function getDataProvider(array $params = [])
    {
        return $this->transactionSearch->search($params);
    }
}