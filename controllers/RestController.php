<?php


namespace app\controllers;


use yii\helpers\Json;
use yii\rest\Controller as BaseRestController;
use yii\web\Response;

class RestController extends BaseRestController
{
    /**
     * Displays index.
     *
     * @return Response
     */
    public function actionTest(): Response
    {
        $resData = array();
        $resData['key'] = "oalala";
        return $this->asJson($resData);
    }
}