<?php namespace Fungku\NetSuite\Classes;

class ServicePurchaseItem extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $purchaseDescription;
	public $manufacturingChargeItem;
	public $cost;
	public $costUnits;
	public $issueProduct;
	public $includeChildren;
	public $expenseAccount;
	public $isTaxable;
	public $matrixType;
	public $unitsType;
	public $purchaseUnit;
	public $customForm;
	public $itemId;
	public $upcCode;
	public $displayName;
	public $vendorName;
	public $parent;
	public $isInactive;
	public $availableToPartners;
	public $department;
	public $class;
	public $location;
	public $subsidiaryList;
	public $taxSchedule;
	public $deferralAccount;
	public $amortizationTemplate;
	public $residual;
	public $amortizationPeriod;
	public $isFulfillable;
	public $accountingBookDetailList;
	public $costCategory;
	public $purchaseOrderQuantity;
	public $purchaseOrderAmount;
	public $purchaseOrderQuantityDiff;
	public $receiptQuantity;
	public $receiptAmount;
	public $receiptQuantityDiff;
	public $currency;
	public $itemOptionsList;
	public $matrixOptionList;
	public $itemVendorList;
	public $purchaseTaxCode;
	public $salesTaxCode;
	public $translationsList;
	public $vendor;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"purchaseDescription" => "string",
		"manufacturingChargeItem" => "boolean",
		"cost" => "float",
		"costUnits" => "string",
		"issueProduct" => "RecordRef",
		"includeChildren" => "boolean",
		"expenseAccount" => "RecordRef",
		"isTaxable" => "boolean",
		"matrixType" => "ItemMatrixType",
		"unitsType" => "RecordRef",
		"purchaseUnit" => "RecordRef",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"vendorName" => "string",
		"parent" => "RecordRef",
		"isInactive" => "boolean",
		"availableToPartners" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiaryList" => "RecordRefList",
		"taxSchedule" => "RecordRef",
		"deferralAccount" => "RecordRef",
		"amortizationTemplate" => "RecordRef",
		"residual" => "string",
		"amortizationPeriod" => "integer",
		"isFulfillable" => "boolean",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"costCategory" => "RecordRef",
		"purchaseOrderQuantity" => "float",
		"purchaseOrderAmount" => "float",
		"purchaseOrderQuantityDiff" => "float",
		"receiptQuantity" => "float",
		"receiptAmount" => "float",
		"receiptQuantityDiff" => "float",
		"currency" => "string",
		"itemOptionsList" => "ItemOptionsList",
		"matrixOptionList" => "MatrixOptionList",
		"itemVendorList" => "ItemVendorList",
		"purchaseTaxCode" => "RecordRef",
		"salesTaxCode" => "RecordRef",
		"translationsList" => "TranslationList",
		"vendor" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

