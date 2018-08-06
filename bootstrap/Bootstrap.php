<?php
namespace app\bootstrap;

use app\modules\service\search\TransactionSearch;
use yii\base\BootstrapInterface;
use yii\bootstrap\BootstrapAsset;
use yii\di\Container;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($application)
    {
        /** @var Container $container */
        $container = \Yii::$container;

        $container->set(TransactionSearch::class, new TransactionSearch());
    }
}