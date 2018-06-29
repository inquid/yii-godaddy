<?php
/**
 * Created by PhpStorm.
 * User: gogl92
 * Date: 28/06/18
 * Time: 10:26 PM
 */

namespace inquid\godaddy;


use yii\base\Component;
use inquid\godaddy\models\Error;
use inquid\godaddy\models\Record;

class Godaddy extends HttpClientV1
{
    /**
     * Get domain aviability
     * @param array $params
     * @return array|Trips|Error
     */
    public function getDomainAviability($params)
    {
        try {
            return $this->modelResponse($this->sendRequest('get', "domains/available?domain=" . $params['domain']), Record::className(), true);
        } catch (\Exception $exception) {
            return new Error(500, $exception->getMessage());
        }
    }

    /**
     * Get domain aviability
     * @param array $params
     * @return array|Trips|Error
     */
    public function getRecordByTypeName($params)
    {
        try {
            return $this->modelResponse($this->sendRequest('get', "domains/" . $params['domain'] . "/" . $params['type'] . "/" . $params['name']), Record::className(), false);
        } catch (\Exception $exception) {
            return new Error(500, $exception->getMessage());
        }
    }

    /**
     * Get domain aviability
     * Types must be A AAAA CNAME MX ...
     * @param array $params
     * @return array|Trips|Error
     */
    public function getRecordByType($params)
    {
        try {
            return $this->modelResponse($this->sendRequest('get', "domains/" . $params['domain'] . "/" . $params['type']), Record::className(), false);
        } catch (\Exception $exception) {
            return new Error(500, $exception->getMessage());
        }
    }

    /**
     * Inserts a new record to a domain
      $response = Yii::$app->godaddy->insertRecord("domain.com",[
    'data'=>'XX.XX.XX.XX', //IP
     'name'=>'subdomain',
    'ttl' => '600',
     'type'=>'A'
    ]);
    print_r($response);
     * Types must be A AAAA CNAME MX ...
     * @param array $params
     * @return array|Trips|Error
     */
    public function insertRecord($domain, $params)
    {
        try {
            return $this->booleanResponse($this->sendRequest('patch', "domains/" . $params['domain'] . "/records", $params));
        } catch (\Exception $exception) {
            return new Error(500, $exception->getMessage());
        }
    }

}