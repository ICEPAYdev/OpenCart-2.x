<?php

/**
 * @package       ICEPAY Payment Module for OpenCart
 * @author        Ricardo Jacobs <ricardo.jacobs@icepay.com>
 * @copyright     (c) 2016 ICEPAY. All rights reserved.
 * @license       BSD 2 License, see https://github.com/icepay/OpenCart/blob/master/LICENSE
 */

require_once(realpath(dirname(__FILE__)) . '/icepay_basic.php');

class ControllerPaymentIcepayPm13 extends ControllerPaymentIcepayBasic
{
    protected $pmCode = '13';
}