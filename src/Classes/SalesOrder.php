<?php

namespace Fungku\NetSuite\Classes;

class SalesOrder extends Record {
	public $createdDate;
	public $customForm;
	public $entity;
	public $job;
	public $currency;
	public $drAccount;
	public $fxAccount;
	public $tranDate;
	public $tranId;
	public $source;
	public $createdFrom;
	public $orderStatus;
	public $opportunity;
	public $salesRep;
	public $contribPct;
	public $partner;
	public $salesGroup;
	public $syncSalesTeams;
	public $leadSource;
	public $startDate;
	public $endDate;
	public $otherRefNum;
	public $memo;
	public $salesEffectiveDate;
	public $excludeCommission;
	public $totalCostEstimate;
	public $estGrossProfit;
	public $estGrossProfitPercent;
	public $exchangeRate;
	public $promoCode;
	public $currencyName;
	public $discountItem;
	public $discountRate;
	public $isTaxable;
	public $taxItem;
	public $taxRate;
	public $toBePrinted;
	public $toBeEmailed;
	public $email;
	public $toBeFaxed;
	public $fax;
	public $messageSel;
	public $message;
	public $billingAddress;
	public $billAddressList;
	public $shippingAddress;
	public $shipIsResidential;
	public $shipAddressList;
	public $fob;
	public $shipDate;
	public $actualShipDate;
	public $shipMethod;
	public $shippingCost;
	public $shippingTax1Rate;
	public $isMultiShipTo;
	public $shippingTax2Rate;
	public $shippingTaxCode;
	public $handlingTaxCode;
	public $handlingTax1Rate;
	public $handlingTax2Rate;
	public $handlingCost;
	public $trackingNumbers;
	public $linkedTrackingNumbers;
	public $shipComplete;
	public $paymentMethod;
	public $shopperIpAddress;
	public $saveOnAuthDecline;
	public $creditCard;
	public $revenueStatus;
	public $recognizedRevenue;
	public $deferredRevenue;
	public $revRecOnRevCommitment;
	public $revCommitStatus;
	public $ccNumber;
	public $ccExpireDate;
	public $ccName;
	public $ccStreet;
	public $ccZipCode;
	public $payPalStatus;
	public $creditCardProcessor;
	public $payPalTranId;
	public $ccApproved;
	public $getAuth;
	public $authCode;
	public $ccAvsStreetMatch;
	public $ccAvsZipMatch;
	public $isRecurringPayment;
	public $ccSecurityCodeMatch;
	public $altSalesTotal;
	public $ignoreAvs;
	public $paymentEventResult;
	public $paymentEventHoldReason;
	public $paymentEventType;
	public $paymentEventDate;
	public $paymentEventUpdatedBy;
	public $subTotal;
	public $discountTotal;
	public $taxTotal;
	public $altShippingCost;
	public $altHandlingCost;
	public $total;
	public $revRecSchedule;
	public $revRecStartDate;
	public $revRecEndDate;
	public $paypalAuthId;
	public $balance;
	public $paypalProcess;
	public $billingSchedule;
	public $ccSecurityCode;
	public $threeDStatusCode;
	public $class;
	public $department;
	public $subsidiary;
	public $intercoTransaction;
	public $intercoStatus;
	public $debitCardIssueNo;
	public $lastModifiedDate;
	public $location;
	public $pnRefNum;
	public $status;
	public $tax2Total;
	public $terms;
	public $validFrom;
	public $vatRegNum;
	public $giftCertApplied;
	public $tranIsVsoeBundle;
	public $vsoeAutoCalc;
	public $syncPartnerTeams;
	public $salesTeamList;
	public $partnersList;
	public $giftCertRedemptionList;
	public $itemList;
	public $shipGroupList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"customForm" => "RecordRef",
		"entity" => "RecordRef",
		"job" => "RecordRef",
		"currency" => "RecordRef",
		"drAccount" => "RecordRef",
		"fxAccount" => "RecordRef",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"createdFrom" => "RecordRef",
		"orderStatus" => "SalesOrderOrderStatus",
		"opportunity" => "RecordRef",
		"salesRep" => "RecordRef",
		"contribPct" => "string",
		"partner" => "RecordRef",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"leadSource" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"otherRefNum" => "string",
		"memo" => "string",
		"salesEffectiveDate" => "dateTime",
		"excludeCommission" => "boolean",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"exchangeRate" => "float",
		"promoCode" => "RecordRef",
		"currencyName" => "string",
		"discountItem" => "RecordRef",
		"discountRate" => "string",
		"isTaxable" => "boolean",
		"taxItem" => "RecordRef",
		"taxRate" => "float",
		"toBePrinted" => "boolean",
		"toBeEmailed" => "boolean",
		"email" => "string",
		"toBeFaxed" => "boolean",
		"fax" => "string",
		"messageSel" => "RecordRef",
		"message" => "string",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"fob" => "string",
		"shipDate" => "dateTime",
		"actualShipDate" => "dateTime",
		"shipMethod" => "RecordRef",
		"shippingCost" => "float",
		"shippingTax1Rate" => "float",
		"isMultiShipTo" => "boolean",
		"shippingTax2Rate" => "string",
		"shippingTaxCode" => "RecordRef",
		"handlingTaxCode" => "RecordRef",
		"handlingTax1Rate" => "float",
		"handlingTax2Rate" => "string",
		"handlingCost" => "float",
		"trackingNumbers" => "string",
		"linkedTrackingNumbers" => "string",
		"shipComplete" => "boolean",
		"paymentMethod" => "RecordRef",
		"shopperIpAddress" => "string",
		"saveOnAuthDecline" => "boolean",
		"creditCard" => "RecordRef",
		"revenueStatus" => "RevenueStatus",
		"recognizedRevenue" => "float",
		"deferredRevenue" => "float",
		"revRecOnRevCommitment" => "boolean",
		"revCommitStatus" => "RevenueCommitStatus",
		"ccNumber" => "string",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"payPalStatus" => "string",
		"creditCardProcessor" => "RecordRef",
		"payPalTranId" => "string",
		"ccApproved" => "boolean",
		"getAuth" => "boolean",
		"authCode" => "string",
		"ccAvsStreetMatch" => "AvsMatchCode",
		"ccAvsZipMatch" => "AvsMatchCode",
		"isRecurringPayment" => "boolean",
		"ccSecurityCodeMatch" => "AvsMatchCode",
		"altSalesTotal" => "float",
		"ignoreAvs" => "boolean",
		"paymentEventResult" => "TransactionPaymentEventResult",
		"paymentEventHoldReason" => "TransactionPaymentEventHoldReason",
		"paymentEventType" => "TransactionPaymentEventType",
		"paymentEventDate" => "dateTime",
		"paymentEventUpdatedBy" => "string",
		"subTotal" => "float",
		"discountTotal" => "float",
		"taxTotal" => "float",
		"altShippingCost" => "float",
		"altHandlingCost" => "float",
		"total" => "float",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"paypalAuthId" => "string",
		"balance" => "float",
		"paypalProcess" => "boolean",
		"billingSchedule" => "RecordRef",
		"ccSecurityCode" => "string",
		"threeDStatusCode" => "string",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"subsidiary" => "RecordRef",
		"intercoTransaction" => "RecordRef",
		"intercoStatus" => "IntercoStatus",
		"debitCardIssueNo" => "string",
		"lastModifiedDate" => "dateTime",
		"location" => "RecordRef",
		"pnRefNum" => "string",
		"status" => "string",
		"tax2Total" => "float",
		"terms" => "RecordRef",
		"validFrom" => "dateTime",
		"vatRegNum" => "string",
		"giftCertApplied" => "float",
		"tranIsVsoeBundle" => "boolean",
		"vsoeAutoCalc" => "boolean",
		"syncPartnerTeams" => "boolean",
		"salesTeamList" => "SalesOrderSalesTeamList",
		"partnersList" => "SalesOrderPartnersList",
		"giftCertRedemptionList" => "GiftCertRedemptionList",
		"itemList" => "SalesOrderItemList",
		"shipGroupList" => "SalesOrderShipGroupList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

