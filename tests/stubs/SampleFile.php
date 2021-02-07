<?php

use Amouhzi\PaypalCsvParser\Statement;

return array(
    array(
        'name' => 'TEST TRANSACTION',
        'type' => 'Shopping Cart Payment Sent',
        'status' => Statement::STATUS_COMPLETED,
        'currency' => 'USD',
        'gross' => -10.0,
        'fee' => 0,
        'net' => -10.0,
        'fromMailAddress' => 'You@YourOrg.com',
        'toMailAddress' => 'Martin@Cleaver.org',
        'transactionId' => '6K338567NB388074T',
        'shippingAddress' => null,
        'itemTitle' => 'Shopping Cart',
        'itemId' => null,
        'shippingAmount' => 0,
        'insuranceAmount' => null,
        'salesTax' => 0,
        'option1Name' => null,
        'option1Value' => null,
        'option2Name' => null,
        'option2Value' => null,
        'referenceTxnId' => null,
        'invoiceNumber' => null,
        'customNumber' => null,
        'receiptId' => null,
        'balance' => 0,
        'contactPhoneNumber' => null,
        'note' => null,
        'balanceImpact' => 'Debit',
        'datetime' => new DateTime('2011-01-09T07:57:03.000-08'),
        'otherPartyStatus' => null,
        'statusAddress' => null,
        'auctionSite' => null,
        'buyerId' => null,
        'itemUrl' => null,
        'closingDate' => null,
        'trustedThirdPartyNumber' => null,
        'amount' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'location' => null,
        'state' => null,
        'zipCode' => null,
        'country' => null,
        'subject' => null,
        'paymentType' => 'PayPal balance',
        'cardType' => null,
        'transactionCode' => null,
        'paymentTrackingNumber' => null,
        'bankId' => null,
        'transactionBuyerCountryCode' => null,
        'itemDetails' => null,
        'coupons' => null,
        'purchaseVouchers' => null,
        'loyaltyCardNumber' => null,
        'authorizationCheckStatus' => null,
        'protectionEligibility' => null,
        'countryCode' => null,
        'buyerPortfolio' => null,
        'comment1' => null,
        'comment2' => null,
        'billNumber' => null,
        'orderNumber' => null,
        'customerReferenceNumber' => null,
        'payFlowTransactionNumber' => null,
        'tip' => null,
        'reduction' => null,
    ),
    array(
        'name' => 'From Canadian Dollar',
        'type' => Statement::TYPE_CURRENCY_CONVERSION,
        'status' => Statement::STATUS_COMPLETED,
        'currency' => 'USD',
        'gross' => 10,
        'fee' => 0,
        'net' => 10,
        'fromMailAddress' => null,
        'toMailAddress' => null,
        'transactionId' => '110500018F693881B',
        'shippingAddress' => null,
        'itemTitle' => null,
        'itemId' => null,
        'shippingAmount' => null,
        'insuranceAmount' => null,
        'salesTax' => null,
        'option1Name' => null,
        'option1Value' => null,
        'option2Name' => null,
        'option2Value' => null,
        'referenceTxnId' => '6K338567NB388074T',
        'invoiceNumber' => null,
        'customNumber' => null,
        'receiptId' => null,
        'balance' => 10,
        'contactPhoneNumber' => null,
        'note' => null,
        'balanceImpact' => Statement::BALANCE_IMPACT_CREDIT,
        'datetime' => new DateTime('2011-01-09T07:57:03.00-08'),
        'otherPartyStatus' => null,
        'statusAddress' => null,
        'auctionSite' => null,
        'buyerId' => null,
        'itemUrl' => null,
        'closingDate' => null,
        'trustedThirdPartyNumber' => null,
        'amount' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'location' => null,
        'state' => null,
        'zipCode' => null,
        'country' => null,
        'subject' => null,
        'paymentType' => null,
        'cardType' => null,
        'transactionCode' => null,
        'paymentTrackingNumber' => null,
        'bankId' => null,
        'transactionBuyerCountryCode' => null,
        'itemDetails' => null,
        'coupons' => null,
        'purchaseVouchers' => null,
        'loyaltyCardNumber' => null,
        'authorizationCheckStatus' => null,
        'protectionEligibility' => null,
        'countryCode' => null,
        'buyerPortfolio' => null,
        'comment1' => null,
        'comment2' => null,
        'billNumber' => null,
        'orderNumber' => null,
        'customerReferenceNumber' => null,
        'payFlowTransactionNumber' => null,
        'tip' => null,
        'reduction' => null,
    ),
    array(
        'name' => 'To U.S. Dollar',
        'type' => Statement::TYPE_CURRENCY_CONVERSION,
        'status' => Statement::STATUS_COMPLETED,
        'currency' => 'CAD',
        'gross' => -106.0,
        'fee' => 0,
        'net' => -106.0,
        'fromMailAddress' => null,
        'toMailAddress' => null,
        'transactionId' => '6PT275867Y786821V',
        'shippingAddress' => null,
        'itemTitle' => null,
        'itemId' => null,
        'shippingAmount' => null,
        'insuranceAmount' => null,
        'salesTax' => null,
        'option1Name' => null,
        'option1Value' => null,
        'option2Name' => null,
        'option2Value' => null,
        'referenceTxnId' => '6K338567NB388074T',
        'invoiceNumber' => null,
        'customNumber' => null,
        'receiptId' => null,
        'balance' => 21718.0,
        'contactPhoneNumber' => null,
        'note' => null,
        'balanceImpact' => Statement::BALANCE_IMPACT_DEBIT,
        'datetime' => new DateTime('2011-01-09T07:57:03-08'),
        'otherPartyStatus' => null,
        'statusAddress' => null,
        'auctionSite' => null,
        'buyerId' => null,
        'itemUrl' => null,
        'closingDate' => null,
        'trustedThirdPartyNumber' => null,
        'amount' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'location' => null,
        'state' => null,
        'zipCode' => null,
        'country' => null,
        'subject' => null,
        'paymentType' => null,
        'cardType' => null,
        'transactionCode' => null,
        'paymentTrackingNumber' => null,
        'bankId' => null,
        'transactionBuyerCountryCode' => null,
        'itemDetails' => null,
        'coupons' => null,
        'purchaseVouchers' => null,
        'loyaltyCardNumber' => null,
        'authorizationCheckStatus' => null,
        'protectionEligibility' => null,
        'countryCode' => null,
        'buyerPortfolio' => null,
        'comment1' => null,
        'comment2' => null,
        'billNumber' => null,
        'orderNumber' => null,
        'customerReferenceNumber' => null,
        'payFlowTransactionNumber' => null,
        'tip' => null,
        'reduction' => null,
    ),
);
