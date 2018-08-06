<?php
namespace tests\models;

use app\modules\service\search\TransactionSearch;
use yii\data\DataProviderInterface;

class TransactionSearchTest extends \Codeception\Test\Unit
{
    public function testSearchSuccess()
    {
        $search = new TransactionSearch();
        $dataProvider = $search->search([]);

        expect_that($dataProvider instanceof DataProviderInterface);
        expect_that(is_array($dataProvider->models));
        expect_that(count($dataProvider->models) > 0);
    }

    public function testRandomSuccess()
    {
        $search1 = new TransactionSearch();
        $dataProvider1 = $search1->search([]);
        $model1 = $dataProvider1->models[0];


        $search2 = new TransactionSearch();
        $dataProvider2 = $search2->search([]);
        $model2 = $dataProvider2->models[0];

        expect_that($model1->id !== $model2->id);
    }
}