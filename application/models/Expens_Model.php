<?php
/**
 * Created by PhpStorm.
 * User: Kidus
 * Date: 4/3/2017
 * Time: 10:13 PM
 */

class Expens_Model extends MY_Model
{
    protected $_table = 'expense';
    protected $primary_key = 'id';
    protected $return_type = 'array';
}