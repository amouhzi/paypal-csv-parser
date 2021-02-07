<?php

namespace Amouhzi\PaypalCsvParser;

class CsvHeaders
{
    private static $headers = [
        'fr' => [
            'date' => 'Date',
            'time' => 'Heure',
            'timeZone' => 'Fuseau horaire',
            'name' => 'Nom',
            'type' => 'Type',
            'status' => 'État',
            'currency' => 'Devise',
            'gross' => 'Avant commission',
            'fee' => 'Commission',
            'net' => 'Net',
            'fromMailAddress' => 'De l\'adresse email',
            'toMailAddress' => 'À l\'adresse email',
            'transactionId' => 'Numéro de transaction',
            'otherPartyStatus' => 'État de l\'autre partie',
            'shippingAddress' => 'Adresse de livraison',
            'statusAddress' => 'État de l\'adresse',
            'itemTitle' => 'Titre de l\'objet',
            'itemId' => 'Numéro de l\'objet',
            'shippingAmount' => 'Montant des frais d\'expédition et de traitement',
            'insuranceAmount' => 'Montant de l\'assurance',
            'salesTax' => 'TVA',
            'option1Name' => 'Nom de l\'option 1',
            'option1Value' => 'Valeur de l\'option 1',
            'option2Name' => 'Nom de l\'option 2',
            'option2Value' => 'Valeur de l\'option 2',
            'auctionSite' => 'Site d\'enchère',
            'buyerId' => 'Identifiant de l\'acheteur',
            'itemUrl' => 'URL de l\'objet',
            'closingDate' => 'Date de clôture',
            'trustedThirdPartyNumber' => 'Numéro de tiers de confiance',
            'referenceTxnId' => 'Numéro de la transaction de référence',
            'invoiceNumber' => 'Numéro de facture',
            'customNumber' => 'Numéro de client',
            'amount' => 'Quantité',
            'receiptId' => 'Numéro de reçu',
            'balance' => 'Solde',
            'addressLine1' => 'Adresse',
            'addressLine2' => 'Adresse (suite)/District/Quartier',
            'location' => 'Ville',
            'state' => 'État/Province/Région/Comté/Territoire/Préfecture/République',
            'zipCode' => 'Code postal',
            'country' => 'Pays',
            'contactPhoneNumber' => 'Numéro de téléphone du contact',
            'subject' => 'Objet',
            'note' => 'Remarque',
            'paymentType' => 'Source de paiement',
            'cardType' => 'Type de carte',
            'transactionCode' => 'Code de transaction',
            'paymentTrackingNumber' => 'N° du suivi des paiements',
            'bankId' => 'Identifiant bancaire',
            'transactionBuyerCountryCode' => 'Code du pays de l\'acheteur pour cette transaction',
            'itemDetails' => 'Détails de l\'objet',
            'coupons' => 'Bons de réduction',
            'purchaseVouchers' => 'Bons d\'achat',
            'loyaltyCardNumber' => 'Numéro de la carte de fidélité',
            'authorizationCheckStatus' => 'État de vérification de l\'autorisation',
            'protectionEligibility' => 'Éligibilité à la protection',
            'countryCode' => 'Indicatif pays',
            'balanceImpact' => 'Impact sur le solde',
            'buyerPortfolio' => 'Portefeuille de l\'acheteur',
            'comment1' => 'Commentaire 1',
            'comment2' => 'Commentaire 2',
            'billNumber' => 'Numéro de facture',
            'orderNumber' => 'Numéro de commande',
            'customerReferenceNumber' => 'Numéro de référence client',
            'payflowTransactionNumber' => 'Numéro de transaction Payflow (PNREF)',
            'tip' => 'Pourboire',
            'reduction' => 'Réduction',
        ],
        'en' => [
            'date' => 'Date',
            'time' => 'Time',
            'timeZone' => 'Time Zone',
            'name' => 'Name',
            'type' => 'Type',
            'status' => 'Status',
            'currency' => 'Currency',
            'gross' => 'Gross',
            'fee' => 'Fee',
            'net' => 'Net',
            'fromMailAddress' => 'From Email Address',
            'toMailAddress' => 'To Email Address',
            'transactionId' => 'Transaction ID',
            'otherPartyStatus' => 'État de l\'autre partie',
            'shippingAddress' => 'Shipping Address',
            'statusAddress' => 'État de l\'adresse',
            'itemTitle' => 'Item Title',
            'itemId' => 'Item ID',
            'shippingAmount' => 'Shipping and Handling Amount',
            'insuranceAmount' => 'Insurance Amount',
            'salesTax' => 'Sales Tax',
            'option1Name' => 'Option 1 Name',
            'option1Value' => 'Option 1 Value',
            'option2Name' => 'Option 2 Name',
            'option2Value' => 'Option 2 Value',
            'auctionSite' => 'Auction Site',
            'buyerId' => 'Identifiant de l\'acheteur',
            'itemUrl' => 'URL de l\'objet',
            'closingDate' => 'Closing Date',
            'trustedThirdPartyNumber' => 'Numéro de tiers de confiance',
            'referenceTxnId' => 'Reference Txn ID',
            'invoiceNumber' => 'Invoice Number',
            'customNumber' => 'Custom Number',
            'amount' => 'Amount',
            'receiptId' => 'Receipt ID',
            'balance' => 'Balance',
            'addressLine1' => 'Adresse',
            'addressLine2' => 'Adresse (suite)/District/Quartier',
            'location' => 'Ville',
            'state' => 'État/Province/Région/Comté/Territoire/Préfecture/République',
            'zipCode' => 'Code postal',
            'country' => 'Pays',
            'contactPhoneNumber' => 'Contact Phone Number',
            'subject' => 'Objet',
            'note' => 'Note',
            'paymentType' => 'Payment Type',
            'cardType' => 'Type de carte',
            'transactionCode' => 'Code de transaction',
            'paymentTrackingNumber' => 'N° du suivi des paiements',
            'bankId' => 'Identifiant bancaire',
            'transactionBuyerCountryCode' => 'Code du pays de l\'acheteur pour cette transaction',
            'itemDetails' => 'Détails de l\'objet',
            'coupons' => 'Bons de réduction',
            'purchaseVouchers' => 'Bons d\'achat',
            'loyaltyCardNumber' => 'Numéro de la carte de fidélité',
            'authorizationCheckStatus' => 'État de vérification de l\'autorisation',
            'protectionEligibility' => 'Éligibilité à la protection',
            'countryCode' => 'Indicatif pays',
            'balanceImpact' => 'Balance Impact',
            'buyerPortfolio' => 'Portefeuille de l\'acheteur',
            'comment1' => 'Commentaire 1',
            'comment2' => 'Commentaire 2',
            'billNumber' => 'Numéro de facture',
            'orderNumber' => 'Numéro de commande',
            'customerReferenceNumber' => 'Numéro de référence client',
            'payflowTransactionNumber' => 'Numéro de transaction Payflow (PNREF)',
            'tip' => 'Pourboire',
            'reduction' => 'Réduction',
        ],
    ];

    private static $mandatoryHeaders = [
        'date',
        'time',
        'timeZone',
        'name',
        'type',
        'status',
        'currency',
        'receiptId',
        'balance',
    ];

    public function isValid(array $headers)
    {
        return null !== $this->getHeaders($headers);
    }

    public function getHeaders(array $headers)
    {
        $keys = [];

        foreach (self::$headers as $group) {
            $groupCopy = $group;

            foreach ($headers as $header) {
                $key = array_search($header, $groupCopy, true);

                if (false === $key) {
                    $keys = [];

                    break;
                }

                unset($groupCopy[$key]);
                $keys[] = $key;
            }

            if (!empty($keys)) {
                break;
            }
        }

        foreach (self::$mandatoryHeaders as $header) {
            if (!in_array($header, $keys, true)) {
                return null;
            }
        }

        return $keys;
    }
}
