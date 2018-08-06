<?php
namespace app\modules\service\controllers;

use app\modules\service\search\TransactionSearch;
use app\modules\service\services\TransactionService;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use yii\base\Module;
use yii\rest\Controller;
use yii\web\JsonResponseFormatter;
use yii\web\Request;
use yii\web\Response;

class TransactionController extends Controller
{
    protected $request;
    protected $response;
    protected $service;

    public $modelClass = 'app\modules\service\models\Transaction';

    public function __construct($id, Module $module, TransactionService $service, Request $request, Response $response, array $config = [])
    {
        $this->request = $request;
        $this->response = $response;
        $this->service = $service;

        parent::__construct($id, $module, $config);
    }

    public function behaviors()
    {
        return [
            [
                'class' => \yii\filters\ContentNegotiator::class,
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->service->getDataProvider($this->request->queryParams);
    }
}