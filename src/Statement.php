<?php

namespace Amouhzi\PaypalCsvParser;

class Statement
{
    const TYPE_CHARGE_FROM_CREDIT_CARD = 'Charge from Credit Card';
    const TYPE_CURRENCY_CONVERSION = 'Currency Conversion';
    const TYPE_ORDER = 'Order';
    const TYPE_PAYPAL_EXPRESS_CHECKOUT_PAYMENT_SENT = 'PayPal Express Checkout Payment Sent';
    const TYPE_SHOPPING_CART_PAYMENT_SENT = 'Shopping Cart Payment Sent';
    const TYPE_STANDARD_CREDIT_CARD_TRANSFER = 'Standard credit card transfer';

    const STATUS_COMPLETED = 'Completed';

    const BALANCE_IMPACT_DEBIT = 'Debit';
    const BALANCE_IMPACT_CREDIT = 'Credit';
    const TYPE_SUBSCRIPTION_PAYMENT_SENT = 'Subscription Payment Sent';

    public $datetime;
    public $name;
    public $type;
    public $status;
    public $currency;
    public $gross;
    public $fee;
    public $net;
    public $fromMailAddress;
    public $toMailAddress;
    public $transactionId;
    public $otherPartyStatus;
    public $shippingAddress;
    public $statusAddress;
    public $itemTitle;
    public $itemId;
    public $shippingAmount;
    public $insuranceAmount;
    public $salesTax;
    public $option1Name;
    public $option1Value;
    public $option2Name;
    public $option2Value;
    public $auctionSite;
    public $buyerId;
    public $itemUrl;
    public $closingDate;
    public $trustedThirdPartyNumber;
    public $referenceTxnId;
    public $invoiceNumber;
    public $customNumber;
    public $amount;
    public $receiptId;
    public $balance;
    public $addressLine1;
    public $addressLine2;
    public $location;
    public $state;
    public $zipCode;
    public $country;
    public $contactPhoneNumber;
    public $subject;
    public $note;
    public $paymentType;
    public $cardType;
    public $transactionCode;
    public $paymentTrackingNumber;
    public $bankId;
    public $transactionBuyerCountryCode;
    public $itemDetails;
    public $coupons;
    public $purchaseVouchers;
    public $loyaltyCardNumber;
    public $authorizationCheckStatus;
    public $protectionEligibility;
    public $countryCode;
    public $balanceImpact;
    public $buyerPortfolio;
    public $comment1;
    public $comment2;
    public $billNumber;
    public $orderNumber;
    public $customerReferenceNumber;
    public $payFlowTransactionNumber;
    public $tip;
    public $reduction;
}
