<?php
// -----
// Part of the VAT4EU plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2017 Vinos de Frutas Tropicales
//
define('VAT4EU_TEXT_MESSAGE_INSTALLED', 'v%s of the <em>VAT Mod</em> plugin has been successfully installed.');
define('VAT4EU_TEXT_MESSAGE_UPDATED', 'The <em>VAT4EU</em> plugin has been successfully updated from v%1$s to v%2$s.');

define('BOX_CONFIG_VAT4EU', 'VAT for EU Countries');

define('VAT4EU_ENTRY_VAT_NUMBER', 'VAT Number:');
define('VAT4EU_ENTRY_OVERRIDE_VALIDATION', 'VAT Validation Override:');

define('VAT4EU_CUSTOMERS_HEADING', 'VAT Number');

define('VAT4EU_ENTRY_VAT_MIN_ERROR', '<span class="errorText">At least ' . VAT4EU_MIN_LENGTH . ' characters.</span>');
define('VAT4EU_ENTRY_VAT_PREFIX_INVALID', '<span class="errorText">Must begin with <b>%1$s</b>, since the address is in <em>%2$s</em>.</span>');
define('VAT4EU_ENTRY_VAT_INVALID', '<span class="errorText">Failed VIES validation.</span>');

// -----
// Used as in the title attribute when displaying VAT Numbers' status in Customrs->Customers.
//
define('VAT4EU_ADMIN_OVERRIDE', 'Overridden by Admin');
define('VAT4EU_VIES_OK', 'Validated by VIES');
define('VAT4EU_NOT_VALIDATED', 'Requires Admin Validation');
define('VAT4EU_VIES_NOT_OK', 'Found Invalid by VIES');

// -----
// Used as the title attribute for the heading sorts in Customers->Customers.
//
define('VAT4EU_SORT_ASC', 'Sort by Status, Asc');
define('VAT4EU_SORT_DESC', 'Sort by Status, Desc');