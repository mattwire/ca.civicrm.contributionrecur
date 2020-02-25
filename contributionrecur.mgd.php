<?php
/*--------------------------------------------------------------------+
 | CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +-------------------------------------------------------------------*/

/**
 * The record will be automatically inserted, updated, or deleted from the
 * database as appropriate. For more details, see "hook_civicrm_managed" at:
 * http://wiki.civicrm.org/confluence/display/CRMDOC/Hook+Reference
 */
return [
  [
    'module' => 'ca.civicrm.contributionrecur',
    'name' => 'ContributionRecur',
    'entity' => 'PaymentProcessorType',
    'params' => [
      'version' => 3,
      'name' => 'Recurring Offline Credit Card Contribution',
      'title' => 'Offline Credit Card',
      'description' => 'Offline credit card dummy payment processor.',
      'class_name' => 'Payment_RecurOffline',
      'billing_mode' => 'form',
      'user_name_label' => 'Account (ignored)',
      'password_label' => 'Password (ignored)',
      'url_site_default' => 'https://github.com/adixon/ca.civicrm.contributionrecur',
      'url_site_test_default' => 'https://github.com/adixon/ca.civicrm.contributionrecur',
      'is_recur' => 1,
      'payment_type' => 1,
    ],
  ],
  [
    'module' => 'ca.civicrm.contributionrecur',
    'name' => 'ContributionRecurACHEFT',
    'entity' => 'PaymentProcessorType',
    'params' => [
      'version' => 3,
      'name' => 'Recurring Offline ACH/EFT Contribution',
      'title' => 'Offline ACH/EFT',
      'description' => 'Offline ACH/EFT dummy payment processor.',
      'class_name' => 'Payment_RecurOfflineACHEFT',
      'billing_mode' => 'form',
      'user_name_label' => 'Account (ignored)',
      'password_label' => 'Password (ignored)',
      'url_site_default' => 'https://github.com/adixon/ca.civicrm.contributionrecur',
      'url_site_test_default' => 'https://github.com/adixon/ca.civicrm.contributionrecur',
      'is_recur' => 1,
      'payment_type' => 2,
    ],
  ],
  [
    'module' => 'ca.civicrm.contributionrecur',
    'name' => 'ContributionRecurBASIC',
    'entity' => 'PaymentProcessorType',
    'params' => [
      'version' => 3,
      'name' => 'Recurring Offline Basic',
      'title' => 'Offline Basic',
      'description' => 'Offline Basic dummy payment processor.',
      'class_name' => 'Payment_RecurOfflineBasic',
      'user_name_label' => 'Account (ignored)',
      'password_label' => 'Password (ignored)',
      'url_site_default' => 'https://unused.org',
      'url_site_test_default' => 'https://unused.org',
      'billing_mode' => 1,
      'is_recur' => 1,
      'payment_type' => 2,
    ],
  ],
];
