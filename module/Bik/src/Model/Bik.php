<?php
/**
 * Created by PhpStorm.
 * User: qwerty123
 * Date: 18.04.18
 * Time: 10:00
 */
namespace Bik\Model;

class Bik {

    public $idState;
    public $idBank;
    public $state;
    public $bikState;
    public $bank;
    public $bikBank;
    public $inn;

    public function exchangeArray(array $data){
        $this->idState = !empty($data['']);
    }
}