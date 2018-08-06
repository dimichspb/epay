<?php

namespace app\modules\service\models;

use Yii;

/**
 * This is the model class for table "transactions".
 *
 * @property int $id
 * @property string $date_server
 * @property string $datetime
 * @property string $local_datetime
 * @property int $receipt_no
 * @property int $trace_no
 * @property string $comment
 * @property int $terminalid
 * @property string $serial
 * @property int $value
 * @property int $type
 * @property int $result
 * @property string $userref
 * @property int $id_country
 * @property string $country
 * @property int $id_store
 * @property string $store
 * @property string $customer_store_id
 * @property int $id_customer
 * @property string $customer
 * @property int $id_division
 * @property string $division
 * @property int $id_content_provider
 * @property string $content_provider
 * @property int $id_provider
 * @property string $provider
 * @property string $ean
 * @property int $id_products
 * @property string $product
 * @property int $id_currency
 * @property string $currency
 * @property string $latitude
 * @property string $longitude
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_server', 'datetime', 'local_datetime'], 'safe'],
            [['receipt_no', 'trace_no', 'terminalid', 'value', 'type', 'result', 'id_country', 'id_store', 'id_customer', 'id_division', 'id_content_provider', 'id_provider', 'id_products', 'id_currency'], 'integer'],
            [['comment'], 'string', 'max' => 200],
            [['serial', 'userref'], 'string', 'max' => 50],
            [['country', 'store', 'customer', 'division', 'content_provider', 'provider', 'ean', 'product'], 'string', 'max' => 100],
            [['customer_store_id', 'latitude', 'longitude'], 'string', 'max' => 20],
            [['currency'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'date_server' => Yii::t('app', 'Date Server'),
            'datetime' => Yii::t('app', 'Datetime'),
            'local_datetime' => Yii::t('app', 'Local Datetime'),
            'receipt_no' => Yii::t('app', 'Receipt No'),
            'trace_no' => Yii::t('app', 'Trace No'),
            'comment' => Yii::t('app', 'Comment'),
            'terminalid' => Yii::t('app', 'Terminalid'),
            'serial' => Yii::t('app', 'Serial'),
            'value' => Yii::t('app', 'Value'),
            'type' => Yii::t('app', 'Type'),
            'result' => Yii::t('app', 'Result'),
            'userref' => Yii::t('app', 'Userref'),
            'id_country' => Yii::t('app', 'Id Country'),
            'country' => Yii::t('app', 'Country'),
            'id_store' => Yii::t('app', 'Id Store'),
            'store' => Yii::t('app', 'Store'),
            'customer_store_id' => Yii::t('app', 'Customer Store ID'),
            'id_customer' => Yii::t('app', 'Id Customer'),
            'customer' => Yii::t('app', 'Customer'),
            'id_division' => Yii::t('app', 'Id Division'),
            'division' => Yii::t('app', 'Division'),
            'id_content_provider' => Yii::t('app', 'Id Content Provider'),
            'content_provider' => Yii::t('app', 'Content Provider'),
            'id_provider' => Yii::t('app', 'Id Provider'),
            'provider' => Yii::t('app', 'Provider'),
            'ean' => Yii::t('app', 'Ean'),
            'id_products' => Yii::t('app', 'Id Products'),
            'product' => Yii::t('app', 'Product'),
            'id_currency' => Yii::t('app', 'Id Currency'),
            'currency' => Yii::t('app', 'Currency'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
        ];
    }
}
