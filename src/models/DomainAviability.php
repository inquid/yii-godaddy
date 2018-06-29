<?php
/**
 * Created by PhpStorm.
 * User: gogl92
 * Date: 28/06/18
 * Time: 10:34 PM
 */

namespace inquid\godaddy\models;


use yii\base\Model;

class DomainAviability extends Model
{
    public $available;
    public $currency;
    public $definitive;
    public $domain;
    public $period;
    public $price;
}