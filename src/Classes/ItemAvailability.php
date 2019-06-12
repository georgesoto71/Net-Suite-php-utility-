<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2019-06-12 10:27:00 AM PDT
 */

namespace NetSuite\Classes;

class ItemAvailability {
    public $item;
    public $lastQtyAvailableChange;
    public $locationId;
    public $quantityOnHand;
    public $onHandValueMli;
    public $reorderPoint;
    public $preferredStockLevel;
    public $quantityOnOrder;
    public $quantityCommitted;
    public $quantityBackOrdered;
    public $quantityAvailable;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "lastQtyAvailableChange" => "dateTime",
        "locationId" => "RecordRef",
        "quantityOnHand" => "float",
        "onHandValueMli" => "float",
        "reorderPoint" => "float",
        "preferredStockLevel" => "float",
        "quantityOnOrder" => "float",
        "quantityCommitted" => "float",
        "quantityBackOrdered" => "float",
        "quantityAvailable" => "float",
    );
}
