<?php
namespace tests\models;

use app\modules\service\models\Transaction;

class TransactionTest extends \Codeception\Test\Unit
{
    public function testFindTransactionById()
    {
        expect_that($transaction = Transaction::findOne(551181844));
        expect($transaction->serial)->equals('10608862123');

        expect_not(Transaction::findOne(999));
    }
}