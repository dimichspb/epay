<?php
use yii\db\Migration;

/**
 * Handles the creation of table `transaction`.
 */
class m180806_090541_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('transaction', [
            'id'=>$this->primaryKey(),
            'date_server'=> $this->dateTime()->defaultValue(null),
            'datetime' => $this->dateTime()->defaultValue(null),
            'local_datetime' => $this->dateTime()->defaultValue(null),
            'receipt_no' => $this->integer(11)->defaultValue(0),
            'trace_no' => $this->integer(11)->defaultValue(0),
            'comment' => $this->string(200),
            'terminalid' => $this->integer(11)->defaultValue(0),
            'serial' => $this->string(50),
            'value' => $this->integer(11)->defaultValue(0),
            'type' => $this->integer(11)->defaultValue(0),
            'result' => $this->integer(11)->defaultValue(0),
            'userref' => $this->string(50),
            'id_country' => $this->tinyInteger()->defaultValue(0),
            'country' => $this->string(100),
            'id_store' => $this->integer(11)->defaultValue(0),
            'store' => $this->string(11),
            'customer_store_id' => $this->string(20),
            'id_customer' => $this->integer(11)->defaultValue(0),
            'customer' => $this->string(100),
            'id_division' => $this->integer(11)->defaultValue(0),
            'division' => $this->string(100),
            'id_content_provider' => $this->integer(11)->defaultValue(0),
            'content_provider' => $this->string(100),
            'id_provider' => $this->integer(11)->defaultValue(0),
            'provider' => $this->string(100),
            'ean' => $this->string(100),
            'id_products' => $this->integer(11)->defaultValue(0),
            'product' => $this->string(100),
            'id_currency' => $this->tinyInteger()->defaultValue(0),
            'currency' => $this->string(10),
            'latitude' => $this->string(20)->notNull()->defaultValue(''),
            'longitude' => $this->string(20)->notNull()->defaultValue(''),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('transaction');
    }
}
