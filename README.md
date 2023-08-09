## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');





$apiInstance = new Webfox\MYOB\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/x-www-form-urlencoded; // string
$client_id = {{client_id}}; // string
$redirect_uri = {{redirect_uri}}; // string
$response_type = code; // string
$scope = CompanyFile; // string

try {
    $apiInstance->oauth2AccountAuthorizeGet($content_type, $client_id, $redirect_uri, $response_type, $scope);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->oauth2AccountAuthorizeGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://secure.myob.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**oauth2AccountAuthorizeGet**](docs/Api/AuthenticationApi.md#oauth2accountauthorizeget) | **GET** /oauth2/account/authorize | Get Access Code
*AuthenticationApi* | [**oauth2V1AuthorizePost**](docs/Api/AuthenticationApi.md#oauth2v1authorizepost) | **POST** /oauth2/v1/authorize/ | Refresh Tokens
*BankingApi* | [**companyFileIdBankingStatementGet**](docs/Api/BankingApi.md#companyfileidbankingstatementget) | **GET** /{company_file_id}/Banking/Statement | Fetch the bank statements
*BankingReceiveMoneyTransactionsApi* | [**companyFileIdBankingReceiveMoneyTxnGet**](docs/Api/BankingReceiveMoneyTransactionsApi.md#companyfileidbankingreceivemoneytxnget) | **GET** /{company_file_id}/Banking/ReceiveMoneyTxn | Get all the receive money transactions
*BankingReceiveMoneyTransactionsApi* | [**companyFileIdBankingReceiveMoneyTxnGuidDelete**](docs/Api/BankingReceiveMoneyTransactionsApi.md#companyfileidbankingreceivemoneytxnguiddelete) | **DELETE** /{company_file_id}/Banking/ReceiveMoneyTxn/{guid} | Delete a spend money transaction
*BankingReceiveMoneyTransactionsApi* | [**companyFileIdBankingReceiveMoneyTxnGuidPut**](docs/Api/BankingReceiveMoneyTransactionsApi.md#companyfileidbankingreceivemoneytxnguidput) | **PUT** /{company_file_id}/Banking/ReceiveMoneyTxn/{guid} | Update a receive money transaction
*BankingReceiveMoneyTransactionsApi* | [**companyFileIdBankingReceiveMoneyTxnPost**](docs/Api/BankingReceiveMoneyTransactionsApi.md#companyfileidbankingreceivemoneytxnpost) | **POST** /{company_file_id}/Banking/ReceiveMoneyTxn | Create a receive money transaction
*BankingSpendMoneyTransactionsApi* | [**companyFileIdBankingSpendMoneyTxnGet**](docs/Api/BankingSpendMoneyTransactionsApi.md#companyfileidbankingspendmoneytxnget) | **GET** /{company_file_id}/Banking/SpendMoneyTxn | Get all the spend money transactions
*BankingSpendMoneyTransactionsApi* | [**companyFileIdBankingSpendMoneyTxnGuidDelete**](docs/Api/BankingSpendMoneyTransactionsApi.md#companyfileidbankingspendmoneytxnguiddelete) | **DELETE** /{company_file_id}/Banking/SpendMoneyTxn/{guid} | Delete a spend money transaction
*BankingSpendMoneyTransactionsApi* | [**companyFileIdBankingSpendMoneyTxnGuidPut**](docs/Api/BankingSpendMoneyTransactionsApi.md#companyfileidbankingspendmoneytxnguidput) | **PUT** /{company_file_id}/Banking/SpendMoneyTxn/{guid} | Update a spend money transaction
*BankingSpendMoneyTransactionsApi* | [**companyFileIdBankingSpendMoneyTxnPost**](docs/Api/BankingSpendMoneyTransactionsApi.md#companyfileidbankingspendmoneytxnpost) | **POST** /{company_file_id}/Banking/SpendMoneyTxn | Create a spend money transaction
*BankingTransferMoneyTransactionsApi* | [**companyFileIdBankingTransferMoneyTxn06019a46E63544a5806d06fef313062dDelete**](docs/Api/BankingTransferMoneyTransactionsApi.md#companyfileidbankingtransfermoneytxn06019a46e63544a5806d06fef313062ddelete) | **DELETE** /{company_file_id}/Banking/TransferMoneyTxn/06019a46-e635-44a5-806d-06fef313062d | Delete a Transfer money transaction
*BankingTransferMoneyTransactionsApi* | [**companyFileIdBankingTransferMoneyTxnGet**](docs/Api/BankingTransferMoneyTransactionsApi.md#companyfileidbankingtransfermoneytxnget) | **GET** /{company_file_id}/Banking/TransferMoneyTxn | Get all the Transfer money transactions
*BankingTransferMoneyTransactionsApi* | [**companyFileIdBankingTransferMoneyTxnGuidPut**](docs/Api/BankingTransferMoneyTransactionsApi.md#companyfileidbankingtransfermoneytxnguidput) | **PUT** /{company_file_id}/Banking/TransferMoneyTxn/{guid} | Update a Transfer money transaction
*BankingTransferMoneyTransactionsApi* | [**companyFileIdBankingTransferMoneyTxnPost**](docs/Api/BankingTransferMoneyTransactionsApi.md#companyfileidbankingtransfermoneytxnpost) | **POST** /{company_file_id}/Banking/TransferMoneyTxn | Create a Transfer money transaction
*CompanyUserSettingsApi* | [**companyFileIdCompanyFormTemplateGet**](docs/Api/CompanyUserSettingsApi.md#companyfileidcompanyformtemplateget) | **GET** /{company_file_id}/Company/FormTemplate | Form template
*CompanyUserSettingsApi* | [**companyFileIdCompanyGet**](docs/Api/CompanyUserSettingsApi.md#companyfileidcompanyget) | **GET** /{company_file_id}/Company/ | Company Information
*CompanyUserSettingsApi* | [**companyFileIdCompanyPreferencesGet**](docs/Api/CompanyUserSettingsApi.md#companyfileidcompanypreferencesget) | **GET** /{company_file_id}/Company/Preferences | Company Preferences
*CompanyUserSettingsApi* | [**companyFileIdCurrentUserGet**](docs/Api/CompanyUserSettingsApi.md#companyfileidcurrentuserget) | **GET** /{company_file_id}/CurrentUser | Current User
*ContactsApi* | [**companyFileIdContactGet**](docs/Api/ContactsApi.md#companyfileidcontactget) | **GET** /{company_file_id}/Contact | Fetch a list of all contacts
*ContactsCustomerApi* | [**companyFileIdContactCustomerGet**](docs/Api/ContactsCustomerApi.md#companyfileidcontactcustomerget) | **GET** /{company_file_id}/Contact/Customer | Find a customer by DisplayID
*ContactsCustomerApi* | [**companyFileIdContactCustomerGuidDelete**](docs/Api/ContactsCustomerApi.md#companyfileidcontactcustomerguiddelete) | **DELETE** /{company_file_id}/Contact/Customer/{guid} | Delete a customer
*ContactsCustomerApi* | [**companyFileIdContactCustomerGuidPut**](docs/Api/ContactsCustomerApi.md#companyfileidcontactcustomerguidput) | **PUT** /{company_file_id}/Contact/Customer/{guid} | Edit a customer
*ContactsCustomerApi* | [**companyFileIdContactCustomerPost**](docs/Api/ContactsCustomerApi.md#companyfileidcontactcustomerpost) | **POST** /{company_file_id}/Contact/Customer | Create a new customer
*ContactsEmployeeApi* | [**companyFileIdContactEmployeeGet**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeeget) | **GET** /{company_file_id}/Contact/Employee | Find a employee by DisplayID
*ContactsEmployeeApi* | [**companyFileIdContactEmployeeGuidDelete**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeeguiddelete) | **DELETE** /{company_file_id}/Contact/Employee/{guid} | Delete an employee
*ContactsEmployeeApi* | [**companyFileIdContactEmployeeGuidPut**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeeguidput) | **PUT** /{company_file_id}/Contact/Employee/{guid} | Edit an employee
*ContactsEmployeeApi* | [**companyFileIdContactEmployeePaymentDetailsGet**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeepaymentdetailsget) | **GET** /{company_file_id}/Contact/EmployeePaymentDetails | Employee payment details
*ContactsEmployeeApi* | [**companyFileIdContactEmployeePaymentDetailsGuidPut**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeepaymentdetailsguidput) | **PUT** /{company_file_id}/Contact/EmployeePaymentDetails/{guid} | Update an employee&#39;s payment details
*ContactsEmployeeApi* | [**companyFileIdContactEmployeePayrollDetails0d9fbb518b454a10Be81070d30fca7fcPut**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeepayrolldetails0d9fbb518b454a10be81070d30fca7fcput) | **PUT** /{company_file_id}/Contact/EmployeePayrollDetails/0d9fbb51-8b45-4a10-be81-070d30fca7fc | Update an employee&#39;s payroll details
*ContactsEmployeeApi* | [**companyFileIdContactEmployeePayrollDetailsGet**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeepayrolldetailsget) | **GET** /{company_file_id}/Contact/EmployeePayrollDetails | Employee Payroll Details
*ContactsEmployeeApi* | [**companyFileIdContactEmployeePayrollDetailsGuidGet**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeepayrolldetailsguidget) | **GET** /{company_file_id}/Contact/EmployeePayrollDetails/{guid} | Example of a specific employee&#39;s payroll details
*ContactsEmployeeApi* | [**companyFileIdContactEmployeePost**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeepost) | **POST** /{company_file_id}/Contact/Employee | Create a new employee
*ContactsEmployeeApi* | [**companyFileIdContactEmployeeStandardPayGet**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeestandardpayget) | **GET** /{company_file_id}/Contact/EmployeeStandardPay | Employee standard pay details
*ContactsEmployeeApi* | [**companyFileIdContactEmployeeStandardPayGuidPut**](docs/Api/ContactsEmployeeApi.md#companyfileidcontactemployeestandardpayguidput) | **PUT** /{company_file_id}/Contact/EmployeeStandardPay/{guid} | Update an employee&#39;s standard pay
*ContactsPersonalApi* | [**companyFileIdContactPersonal0714acb8A1b447889b86C81fc464ac84Put**](docs/Api/ContactsPersonalApi.md#companyfileidcontactpersonal0714acb8a1b447889b86c81fc464ac84put) | **PUT** /{company_file_id}/Contact/Personal/0714acb8-a1b4-4788-9b86-c81fc464ac84 | Edit a Personal contact
*ContactsPersonalApi* | [**companyFileIdContactPersonalPost**](docs/Api/ContactsPersonalApi.md#companyfileidcontactpersonalpost) | **POST** /{company_file_id}/Contact/Personal | Create a new Personal contact
*ContactsPersonalApi* | [**companyFileIdContactSupplierGuidDelete**](docs/Api/ContactsPersonalApi.md#companyfileidcontactsupplierguiddelete) | **DELETE** /{company_file_id}/Contact/Supplier/{guid} | Delete a Personal contact
*ContactsSupplierApi* | [**companyFileIdContactSupplierGet**](docs/Api/ContactsSupplierApi.md#companyfileidcontactsupplierget) | **GET** /{company_file_id}/Contact/Supplier | Find a supplier by DisplayID
*ContactsSupplierApi* | [**companyFileIdContactSupplierGuidPut**](docs/Api/ContactsSupplierApi.md#companyfileidcontactsupplierguidput) | **PUT** /{company_file_id}/Contact/Supplier/{guid} | Edit a supplier
*ContactsSupplierApi* | [**companyFileIdContactSupplierPost**](docs/Api/ContactsSupplierApi.md#companyfileidcontactsupplierpost) | **POST** /{company_file_id}/Contact/Supplier | Create a new supplier
*ExampleODATAQueriesApi* | [**companyFileIdContactCustomerGet**](docs/Api/ExampleODATAQueriesApi.md#companyfileidcontactcustomerget) | **GET** /{company_file_id}/Contact/Customer/ | Search for all items that match search criteria
*ExampleODATAQueriesApi* | [**companyFileIdContactPersonalGet**](docs/Api/ExampleODATAQueriesApi.md#companyfileidcontactpersonalget) | **GET** /{company_file_id}/Contact/Personal | Find a personal contact by UID
*ExampleODATAQueriesApi* | [**companyFileIdGeneralLedgerCategoryGet**](docs/Api/ExampleODATAQueriesApi.md#companyfileidgeneralledgercategoryget) | **GET** /{company_file_id}/GeneralLedger/Category/ | Find a category by name
*ExampleODATAQueriesApi* | [**companyFileIdGeneralLedgerJournalTransactionGet**](docs/Api/ExampleODATAQueriesApi.md#companyfileidgeneralledgerjournaltransactionget) | **GET** /{company_file_id}/GeneralLedger/JournalTransaction | Find purchases between a date
*ExampleODATAQueriesApi* | [**companyFileIdJournalTransactionGet**](docs/Api/ExampleODATAQueriesApi.md#companyfileidjournaltransactionget) | **GET** /{company_file_id}/JournalTransaction/ | Partial matching
*ExampleODATAQueriesApi* | [**companyFileIdSaleInvoiceGet**](docs/Api/ExampleODATAQueriesApi.md#companyfileidsaleinvoiceget) | **GET** /{company_file_id}/Sale/Invoice/ | Search within an object
*GeneralAPIEndpointsApi* | [**companyFileIdGet**](docs/Api/GeneralAPIEndpointsApi.md#companyfileidget) | **GET** /{company_file_id} | Get the details of one specific company file
*GeneralAPIEndpointsApi* | [**infoGet**](docs/Api/GeneralAPIEndpointsApi.md#infoget) | **GET** /Info | API Info
*GeneralAPIEndpointsApi* | [**rootGet**](docs/Api/GeneralAPIEndpointsApi.md#rootget) | **GET** / | List all company files in the users account
*GeneralLedgerApi* | [**companyFileIdGeneralLedgerCurrencyGet**](docs/Api/GeneralLedgerApi.md#companyfileidgeneralledgercurrencyget) | **GET** /{company_file_id}/GeneralLedger/Currency | Currency
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerAccountBudgetGet**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgeraccountbudgetget) | **GET** /{company_file_id}/GeneralLedger/AccountBudget | Account Budget
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerAccountBudgetGuidPut**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgeraccountbudgetguidput) | **PUT** /{company_file_id}/GeneralLedger/AccountBudget/{guid} | Update a budget
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerAccountGet**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgeraccountget) | **GET** /{company_file_id}/GeneralLedger/Account | List all accounts
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerAccountGuidDelete**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgeraccountguiddelete) | **DELETE** /{company_file_id}/GeneralLedger/Account/{guid} | Delete an account
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerAccountGuidPut**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgeraccountguidput) | **PUT** /{company_file_id}/GeneralLedger/Account/{guid} | Update an account
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerAccountPost**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgeraccountpost) | **POST** /{company_file_id}/GeneralLedger/Account | Create an account
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerAccountRegisterGet**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgeraccountregisterget) | **GET** /{company_file_id}/GeneralLedger/AccountRegister | Account Register
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerAccountingPropertiesGet**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgeraccountingpropertiesget) | **GET** /{company_file_id}/GeneralLedger/AccountingProperties | Accounting Properties
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerLinkedAccountGet**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgerlinkedaccountget) | **GET** /{company_file_id}/GeneralLedger/LinkedAccount | List all linked accounts
*GeneralLedgerAccountsAccountBudgetsApi* | [**companyFileIdGeneralLedgerLinkedAccountGuidPut**](docs/Api/GeneralLedgerAccountsAccountBudgetsApi.md#companyfileidgeneralledgerlinkedaccountguidput) | **PUT** /{company_file_id}/GeneralLedger/LinkedAccount/{guid} | Update a linked account
*GeneralLedgerCategoriesApi* | [**companyFileIdGeneralLedgerCategoryCategoryIdDelete**](docs/Api/GeneralLedgerCategoriesApi.md#companyfileidgeneralledgercategorycategoryiddelete) | **DELETE** /{company_file_id}/GeneralLedger/Category/{category_id} | Delete a category
*GeneralLedgerCategoriesApi* | [**companyFileIdGeneralLedgerCategoryCategoryIdPut**](docs/Api/GeneralLedgerCategoriesApi.md#companyfileidgeneralledgercategorycategoryidput) | **PUT** /{company_file_id}/GeneralLedger/Category/{category_id} | Update a category
*GeneralLedgerCategoriesApi* | [**companyFileIdGeneralLedgerCategoryGet**](docs/Api/GeneralLedgerCategoriesApi.md#companyfileidgeneralledgercategoryget) | **GET** /{company_file_id}/GeneralLedger/Category | List all categories Copy
*GeneralLedgerCategoriesApi* | [**companyFileIdGeneralLedgerCategoryPost**](docs/Api/GeneralLedgerCategoriesApi.md#companyfileidgeneralledgercategorypost) | **POST** /{company_file_id}/GeneralLedger/Category | Add a category
*GeneralLedgerJobsJobBudgetsApi* | [**companyFileIdGeneralLedgerJobBudgetGet**](docs/Api/GeneralLedgerJobsJobBudgetsApi.md#companyfileidgeneralledgerjobbudgetget) | **GET** /{company_file_id}/GeneralLedger/JobBudget | List all job budgets
*GeneralLedgerJobsJobBudgetsApi* | [**companyFileIdGeneralLedgerJobBudgetGuidPost**](docs/Api/GeneralLedgerJobsJobBudgetsApi.md#companyfileidgeneralledgerjobbudgetguidpost) | **POST** /{company_file_id}/GeneralLedger/JobBudget/{guid} | Update a job budget
*GeneralLedgerJobsJobBudgetsApi* | [**companyFileIdGeneralLedgerJobGet**](docs/Api/GeneralLedgerJobsJobBudgetsApi.md#companyfileidgeneralledgerjobget) | **GET** /{company_file_id}/GeneralLedger/Job | List all jobs
*GeneralLedgerJobsJobBudgetsApi* | [**companyFileIdGeneralLedgerJobGuidDelete**](docs/Api/GeneralLedgerJobsJobBudgetsApi.md#companyfileidgeneralledgerjobguiddelete) | **DELETE** /{company_file_id}/GeneralLedger/Job/{guid} | Delete a job
*GeneralLedgerJobsJobBudgetsApi* | [**companyFileIdGeneralLedgerJobGuidPut**](docs/Api/GeneralLedgerJobsJobBudgetsApi.md#companyfileidgeneralledgerjobguidput) | **PUT** /{company_file_id}/GeneralLedger/Job/{guid} | Update a job
*GeneralLedgerJobsJobBudgetsApi* | [**companyFileIdGeneralLedgerJobPost**](docs/Api/GeneralLedgerJobsJobBudgetsApi.md#companyfileidgeneralledgerjobpost) | **POST** /{company_file_id}/GeneralLedger/Job | Add a job
*GeneralLedgerJobsJobBudgetsApi* | [**companyFileIdGeneralLedgerJobRegisterGet**](docs/Api/GeneralLedgerJobsJobBudgetsApi.md#companyfileidgeneralledgerjobregisterget) | **GET** /{company_file_id}/GeneralLedger/JobRegister | Fetch the job register
*GeneralLedgerJournalsTransactionsApi* | [**companyFileIdGeneralLedgerGeneralJournal11206936Ae564c06A4f8Fcb625878a84Put**](docs/Api/GeneralLedgerJournalsTransactionsApi.md#companyfileidgeneralledgergeneraljournal11206936ae564c06a4f8fcb625878a84put) | **PUT** /{company_file_id}/GeneralLedger/GeneralJournal/11206936-ae56-4c06-a4f8-fcb625878a84 | Update a general journal
*GeneralLedgerJournalsTransactionsApi* | [**companyFileIdGeneralLedgerGeneralJournalD7d418e010c04437B2bfD24cdb34f508Delete**](docs/Api/GeneralLedgerJournalsTransactionsApi.md#companyfileidgeneralledgergeneraljournald7d418e010c04437b2bfd24cdb34f508delete) | **DELETE** /{company_file_id}/GeneralLedger/GeneralJournal/d7d418e0-10c0-4437-b2bf-d24cdb34f508 | Delete a general journal
*GeneralLedgerJournalsTransactionsApi* | [**companyFileIdGeneralLedgerGeneralJournalGet**](docs/Api/GeneralLedgerJournalsTransactionsApi.md#companyfileidgeneralledgergeneraljournalget) | **GET** /{company_file_id}/GeneralLedger/GeneralJournal | Fetch all general journals
*GeneralLedgerJournalsTransactionsApi* | [**companyFileIdGeneralLedgerGeneralJournalPost**](docs/Api/GeneralLedgerJournalsTransactionsApi.md#companyfileidgeneralledgergeneraljournalpost) | **POST** /{company_file_id}/GeneralLedger/GeneralJournal | Create a general journal
*GeneralLedgerTaxCodesApi* | [**companyFileIdGeneralLedgerTaxCodeGet**](docs/Api/GeneralLedgerTaxCodesApi.md#companyfileidgeneralledgertaxcodeget) | **GET** /{company_file_id}/GeneralLedger/TaxCode | List all the tax codes
*GeneralLedgerTaxCodesApi* | [**companyFileIdGeneralLedgerTaxCodeGuidDelete**](docs/Api/GeneralLedgerTaxCodesApi.md#companyfileidgeneralledgertaxcodeguiddelete) | **DELETE** /{company_file_id}/GeneralLedger/TaxCode/{guid} | Delete a taxcode
*GeneralLedgerTaxCodesApi* | [**companyFileIdGeneralLedgerTaxCodeGuidPut**](docs/Api/GeneralLedgerTaxCodesApi.md#companyfileidgeneralledgertaxcodeguidput) | **PUT** /{company_file_id}/GeneralLedger/TaxCode/{guid} | Update a taxcode
*GeneralLedgerTaxCodesApi* | [**companyFileIdGeneralLedgerTaxCodePost**](docs/Api/GeneralLedgerTaxCodesApi.md#companyfileidgeneralledgertaxcodepost) | **POST** /{company_file_id}/GeneralLedger/TaxCode | Create a tax code
*InventoryApi* | [**companyFileIdInventoryLocationGet**](docs/Api/InventoryApi.md#companyfileidinventorylocationget) | **GET** /{company_file_id}/Inventory/Location | List all item locations
*InventoryInventoryAdjustmentsApi* | [**companyFileIdInventoryAdjustmentGet**](docs/Api/InventoryInventoryAdjustmentsApi.md#companyfileidinventoryadjustmentget) | **GET** /{company_file_id}/Inventory/Adjustment | List all item adjustments
*InventoryInventoryAdjustmentsApi* | [**companyFileIdInventoryAdjustmentGuidDelete**](docs/Api/InventoryInventoryAdjustmentsApi.md#companyfileidinventoryadjustmentguiddelete) | **DELETE** /{company_file_id}/Inventory/Adjustment/{guid} | Delete an item adjustment
*InventoryInventoryAdjustmentsApi* | [**companyFileIdInventoryAdjustmentGuidPut**](docs/Api/InventoryInventoryAdjustmentsApi.md#companyfileidinventoryadjustmentguidput) | **PUT** /{company_file_id}/Inventory/Adjustment/{guid} | Update an adjustment for an item
*InventoryInventoryAdjustmentsApi* | [**companyFileIdInventoryAdjustmentPost**](docs/Api/InventoryInventoryAdjustmentsApi.md#companyfileidinventoryadjustmentpost) | **POST** /{company_file_id}/Inventory/Adjustment | Create an adjustment for an item
*InventoryItemApi* | [**companyFileIdInventoryItemGet**](docs/Api/InventoryItemApi.md#companyfileidinventoryitemget) | **GET** /{company_file_id}/Inventory/Item | Fetch a list of items
*InventoryItemApi* | [**companyFileIdInventoryItemGuidDelete**](docs/Api/InventoryItemApi.md#companyfileidinventoryitemguiddelete) | **DELETE** /{company_file_id}/Inventory/Item/{guid} | Delete an item
*InventoryItemApi* | [**companyFileIdInventoryItemGuidPut**](docs/Api/InventoryItemApi.md#companyfileidinventoryitemguidput) | **PUT** /{company_file_id}/Inventory/Item/{guid} | Update an item
*InventoryItemApi* | [**companyFileIdInventoryItemPost**](docs/Api/InventoryItemApi.md#companyfileidinventoryitempost) | **POST** /{company_file_id}/Inventory/Item | Create a new item
*InventoryItemApi* | [**companyFileIdInventoryItemPriceMatrix37af587eB7994568B3cf82c120745821Put**](docs/Api/InventoryItemApi.md#companyfileidinventoryitempricematrix37af587eb7994568b3cf82c120745821put) | **PUT** /{company_file_id}/Inventory/ItemPriceMatrix/37af587e-b799-4568-b3cf-82c120745821 | Update a specific price matrix
*InventoryItemApi* | [**companyFileIdInventoryItemPriceMatrixGet**](docs/Api/InventoryItemApi.md#companyfileidinventoryitempricematrixget) | **GET** /{company_file_id}/Inventory/ItemPriceMatrix | List the pricing matrices for all items
*PayrollApi* | [**companyFileIdPayrollEmploymentClassificationGet**](docs/Api/PayrollApi.md#companyfileidpayrollemploymentclassificationget) | **GET** /{company_file_id}/Payroll/EmploymentClassification | List the employee classifications
*PayrollApi* | [**companyFileIdPayrollSuperannuationFundGet**](docs/Api/PayrollApi.md#companyfileidpayrollsuperannuationfundget) | **GET** /{company_file_id}/Payroll/SuperannuationFund | List the super funds in the company file
*PayrollApi* | [**companyFileIdPayrollTimesheetGet**](docs/Api/PayrollApi.md#companyfileidpayrolltimesheetget) | **GET** /{company_file_id}/Payroll/Timesheet | List the timesheets
*PayrollApi* | [**companyFileIdPayrollTimesheetGuidPut**](docs/Api/PayrollApi.md#companyfileidpayrolltimesheetguidput) | **PUT** /{company_file_id}/Payroll/Timesheet/{guid} | Update a timesheet
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategoryDeductionGet**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategorydeductionget) | **GET** /{company_file_id}/Payroll/PayrollCategory/Deduction | List all the payroll Deduction categories
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategoryEntitlementGet**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategoryentitlementget) | **GET** /{company_file_id}/Payroll/PayrollCategory/Entitlement | List all the payroll entitlements categories
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategoryExpenseGet**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategoryexpenseget) | **GET** /{company_file_id}/Payroll/PayrollCategory/Expense | List all the payroll Expense categories
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategoryGet**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategoryget) | **GET** /{company_file_id}/Payroll/PayrollCategory | List the payroll categories
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategorySuperannuationGet**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategorysuperannuationget) | **GET** /{company_file_id}/Payroll/PayrollCategory/Superannuation | List all the payroll Superannuation categories
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategoryTaxTableGet**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategorytaxtableget) | **GET** /{company_file_id}/Payroll/PayrollCategory/TaxTable | List all the payroll TaxTable categories
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategoryWageGet**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategorywageget) | **GET** /{company_file_id}/Payroll/PayrollCategory/Wage | List all the payroll wage categories
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategoryWageGuidDelete**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategorywageguiddelete) | **DELETE** /{company_file_id}/Payroll/PayrollCategory/Wage/{guid} | Update a wage payroll category Copy
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategoryWageGuidPut**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategorywageguidput) | **PUT** /{company_file_id}/Payroll/PayrollCategory/Wage/{guid} | Update a wage payroll category
*PayrollPayrollCategoriesApi* | [**companyFileIdPayrollPayrollCategoryWagePost**](docs/Api/PayrollPayrollCategoriesApi.md#companyfileidpayrollpayrollcategorywagepost) | **POST** /{company_file_id}/Payroll/PayrollCategory/Wage | Create a new wage payroll category
*PurchasesBillsDebitRefundApi* | [**companyFileIdPurchaseDebitRefundE9e6011222d64aa3814572c86a0ca191Delete**](docs/Api/PurchasesBillsDebitRefundApi.md#companyfileidpurchasedebitrefunde9e6011222d64aa3814572c86a0ca191delete) | **DELETE** /{company_file_id}/Purchase/DebitRefund/e9e60112-22d6-4aa3-8145-72c86a0ca191 | Delete a supplier payment
*PurchasesBillsDebitRefundApi* | [**companyFileIdPurchaseDebitRefundGet**](docs/Api/PurchasesBillsDebitRefundApi.md#companyfileidpurchasedebitrefundget) | **GET** /{company_file_id}/Purchase/DebitRefund | List all debit refunds
*PurchasesBillsDebitRefundApi* | [**companyFileIdPurchaseDebitRefundPost**](docs/Api/PurchasesBillsDebitRefundApi.md#companyfileidpurchasedebitrefundpost) | **POST** /{company_file_id}/Purchase/DebitRefund | Create a debit refund
*PurchasesBillsDebitSettlementApi* | [**companyFileIdPurchaseDebitSettlementEe1c61ed98f04e0eA0d5712149206b69Delete**](docs/Api/PurchasesBillsDebitSettlementApi.md#companyfileidpurchasedebitsettlementee1c61ed98f04e0ea0d5712149206b69delete) | **DELETE** /{company_file_id}/Purchase/DebitSettlement/ee1c61ed-98f0-4e0e-a0d5-712149206b69 | Delete a supplier payment
*PurchasesBillsDebitSettlementApi* | [**companyFileIdPurchaseDebitSettlementGet**](docs/Api/PurchasesBillsDebitSettlementApi.md#companyfileidpurchasedebitsettlementget) | **GET** /{company_file_id}/Purchase/DebitSettlement | List all debit settlments
*PurchasesBillsDebitSettlementApi* | [**companyFileIdPurchaseDebitSettlementPost**](docs/Api/PurchasesBillsDebitSettlementApi.md#companyfileidpurchasedebitsettlementpost) | **POST** /{company_file_id}/Purchase/DebitSettlement | Create a debit settlement
*PurchasesBillsPurchaseBillsApi* | [**companyFileIdPurchaseBillGet**](docs/Api/PurchasesBillsPurchaseBillsApi.md#companyfileidpurchasebillget) | **GET** /{company_file_id}/Purchase/Bill | List all the bills
*PurchasesBillsPurchaseBillsApi* | [**companyFileIdPurchaseBillTypeGuidGet**](docs/Api/PurchasesBillsPurchaseBillsApi.md#companyfileidpurchasebilltypeguidget) | **GET** /{company_file_id}/Purchase/Bill/{type}/{guid} | Render bill as PDF
*PurchasesBillsPurchaseBillsItemsApi* | [**companyFileIdPurchaseBillItemGet**](docs/Api/PurchasesBillsPurchaseBillsItemsApi.md#companyfileidpurchasebillitemget) | **GET** /{company_file_id}/Purchase/Bill/Item | List all the Item bills
*PurchasesBillsPurchaseBillsItemsApi* | [**companyFileIdPurchaseBillItemGuidDelete**](docs/Api/PurchasesBillsPurchaseBillsItemsApi.md#companyfileidpurchasebillitemguiddelete) | **DELETE** /{company_file_id}/Purchase/Bill/Item/{guid} | Delete an bill of item type
*PurchasesBillsPurchaseBillsItemsApi* | [**companyFileIdPurchaseBillItemGuidPut**](docs/Api/PurchasesBillsPurchaseBillsItemsApi.md#companyfileidpurchasebillitemguidput) | **PUT** /{company_file_id}/Purchase/Bill/Item/{guid} | Update a new item type bill
*PurchasesBillsPurchaseBillsItemsApi* | [**companyFileIdPurchaseBillItemPost**](docs/Api/PurchasesBillsPurchaseBillsItemsApi.md#companyfileidpurchasebillitempost) | **POST** /{company_file_id}/Purchase/Bill/Item | Create a new item bill
*PurchasesBillsPurchaseBillsMiscellaneousApi* | [**companyFileIdPurchaseBillMiscellaneousGet**](docs/Api/PurchasesBillsPurchaseBillsMiscellaneousApi.md#companyfileidpurchasebillmiscellaneousget) | **GET** /{company_file_id}/Purchase/Bill/Miscellaneous | List all the Miscellaneous bills
*PurchasesBillsPurchaseBillsMiscellaneousApi* | [**companyFileIdPurchaseBillMiscellaneousPost**](docs/Api/PurchasesBillsPurchaseBillsMiscellaneousApi.md#companyfileidpurchasebillmiscellaneouspost) | **POST** /{company_file_id}/Purchase/Bill/Miscellaneous | Create a new Miscellaneous bill
*PurchasesBillsPurchaseBillsProfessionalApi* | [**companyFileIdPurchaseBillProfessionalGet**](docs/Api/PurchasesBillsPurchaseBillsProfessionalApi.md#companyfileidpurchasebillprofessionalget) | **GET** /{company_file_id}/Purchase/Bill/Professional | List all the professional bills
*PurchasesBillsPurchaseBillsProfessionalApi* | [**companyFileIdPurchaseBillProfessionalGuidDelete**](docs/Api/PurchasesBillsPurchaseBillsProfessionalApi.md#companyfileidpurchasebillprofessionalguiddelete) | **DELETE** /{company_file_id}/Purchase/Bill/Professional/{guid} | Delete an bill of professional type
*PurchasesBillsPurchaseBillsProfessionalApi* | [**companyFileIdPurchaseBillProfessionalGuidPut**](docs/Api/PurchasesBillsPurchaseBillsProfessionalApi.md#companyfileidpurchasebillprofessionalguidput) | **PUT** /{company_file_id}/Purchase/Bill/Professional/{guid} | Update a new professional type bill
*PurchasesBillsPurchaseBillsProfessionalApi* | [**companyFileIdPurchaseBillProfessionalPost**](docs/Api/PurchasesBillsPurchaseBillsProfessionalApi.md#companyfileidpurchasebillprofessionalpost) | **POST** /{company_file_id}/Purchase/Bill/Professional | Create a new professional bill
*PurchasesBillsPurchaseBillsServicesApi* | [**companyFileIdPurchaseBillServiceGet**](docs/Api/PurchasesBillsPurchaseBillsServicesApi.md#companyfileidpurchasebillserviceget) | **GET** /{company_file_id}/Purchase/Bill/Service | List all the service bills
*PurchasesBillsPurchaseBillsServicesApi* | [**companyFileIdPurchaseBillServiceGuidDelete**](docs/Api/PurchasesBillsPurchaseBillsServicesApi.md#companyfileidpurchasebillserviceguiddelete) | **DELETE** /{company_file_id}/Purchase/Bill/Service/{guid} | Delete an bill of service type
*PurchasesBillsPurchaseBillsServicesApi* | [**companyFileIdPurchaseBillServiceGuidPut**](docs/Api/PurchasesBillsPurchaseBillsServicesApi.md#companyfileidpurchasebillserviceguidput) | **PUT** /{company_file_id}/Purchase/Bill/Service/{guid} | Update a new service type bill
*PurchasesBillsPurchaseBillsServicesApi* | [**companyFileIdPurchaseBillServicePost**](docs/Api/PurchasesBillsPurchaseBillsServicesApi.md#companyfileidpurchasebillservicepost) | **POST** /{company_file_id}/Purchase/Bill/Service | Create a new service bill
*PurchasesBillsPurchaseOrderApi* | [**companyFileIdPurchaseOrderGet**](docs/Api/PurchasesBillsPurchaseOrderApi.md#companyfileidpurchaseorderget) | **GET** /{company_file_id}/Purchase/Order | List all the orders
*PurchasesBillsPurchaseOrderApi* | [**companyFileIdPurchaseOrderTypeGuidGet**](docs/Api/PurchasesBillsPurchaseOrderApi.md#companyfileidpurchaseordertypeguidget) | **GET** /{company_file_id}/Purchase/Order/{type}/{guid} | Render order as PDF
*PurchasesBillsPurchaseOrderItemsApi* | [**companyFileIdPurchaseOrderItemGet**](docs/Api/PurchasesBillsPurchaseOrderItemsApi.md#companyfileidpurchaseorderitemget) | **GET** /{company_file_id}/Purchase/Order/Item | List all the Item Orders
*PurchasesBillsPurchaseOrderItemsApi* | [**companyFileIdPurchaseOrderItemGuidDelete**](docs/Api/PurchasesBillsPurchaseOrderItemsApi.md#companyfileidpurchaseorderitemguiddelete) | **DELETE** /{company_file_id}/Purchase/Order/Item/{guid} | Delete an order of item type
*PurchasesBillsPurchaseOrderItemsApi* | [**companyFileIdPurchaseOrderItemGuidPut**](docs/Api/PurchasesBillsPurchaseOrderItemsApi.md#companyfileidpurchaseorderitemguidput) | **PUT** /{company_file_id}/Purchase/Order/Item/{guid} | Update a new item type order
*PurchasesBillsPurchaseOrderItemsApi* | [**companyFileIdPurchaseOrderItemPost**](docs/Api/PurchasesBillsPurchaseOrderItemsApi.md#companyfileidpurchaseorderitempost) | **POST** /{company_file_id}/Purchase/Order/Item | Create a new item order
*PurchasesBillsPurchaseOrderMiscellaneousApi* | [**companyFileIdPurchaseOrderMiscellaneousGet**](docs/Api/PurchasesBillsPurchaseOrderMiscellaneousApi.md#companyfileidpurchaseordermiscellaneousget) | **GET** /{company_file_id}/Purchase/Order/Miscellaneous | List all the Miscellaneous orders
*PurchasesBillsPurchaseOrderMiscellaneousApi* | [**companyFileIdPurchaseOrderMiscellaneousGuidDelete**](docs/Api/PurchasesBillsPurchaseOrderMiscellaneousApi.md#companyfileidpurchaseordermiscellaneousguiddelete) | **DELETE** /{company_file_id}/Purchase/Order/Miscellaneous/{guid} | Delete an order of professional type
*PurchasesBillsPurchaseOrderMiscellaneousApi* | [**companyFileIdPurchaseOrderMiscellaneousGuidPut**](docs/Api/PurchasesBillsPurchaseOrderMiscellaneousApi.md#companyfileidpurchaseordermiscellaneousguidput) | **PUT** /{company_file_id}/Purchase/Order/Miscellaneous/{guid} | Update a new Miscellaneous type order
*PurchasesBillsPurchaseOrderMiscellaneousApi* | [**companyFileIdPurchaseOrderMiscellaneousPost**](docs/Api/PurchasesBillsPurchaseOrderMiscellaneousApi.md#companyfileidpurchaseordermiscellaneouspost) | **POST** /{company_file_id}/Purchase/Order/Miscellaneous | Create a new Miscellaneous order
*PurchasesBillsPurchaseOrderProfessionalApi* | [**companyFileIdPurchaseOrderProfessionalGet**](docs/Api/PurchasesBillsPurchaseOrderProfessionalApi.md#companyfileidpurchaseorderprofessionalget) | **GET** /{company_file_id}/Purchase/Order/Professional | List all the professional orders
*PurchasesBillsPurchaseOrderProfessionalApi* | [**companyFileIdPurchaseOrderProfessionalGuidDelete**](docs/Api/PurchasesBillsPurchaseOrderProfessionalApi.md#companyfileidpurchaseorderprofessionalguiddelete) | **DELETE** /{company_file_id}/Purchase/Order/Professional/{guid} | Delete an bill of professional type
*PurchasesBillsPurchaseOrderProfessionalApi* | [**companyFileIdPurchaseOrderProfessionalGuidPut**](docs/Api/PurchasesBillsPurchaseOrderProfessionalApi.md#companyfileidpurchaseorderprofessionalguidput) | **PUT** /{company_file_id}/Purchase/Order/Professional/{guid} | Update a new professional type bill
*PurchasesBillsPurchaseOrderProfessionalApi* | [**companyFileIdPurchaseOrderProfessionalPost**](docs/Api/PurchasesBillsPurchaseOrderProfessionalApi.md#companyfileidpurchaseorderprofessionalpost) | **POST** /{company_file_id}/Purchase/Order/Professional | Create a new professional Order
*PurchasesBillsPurchaseOrderServicesApi* | [**companyFileIdPurchaseOrderServiceGet**](docs/Api/PurchasesBillsPurchaseOrderServicesApi.md#companyfileidpurchaseorderserviceget) | **GET** /{company_file_id}/Purchase/Order/Service | List all the service orders
*PurchasesBillsPurchaseOrderServicesApi* | [**companyFileIdPurchaseOrderServiceGuidDelete**](docs/Api/PurchasesBillsPurchaseOrderServicesApi.md#companyfileidpurchaseorderserviceguiddelete) | **DELETE** /{company_file_id}/Purchase/Order/Service/{guid} | Delete an order of service type
*PurchasesBillsPurchaseOrderServicesApi* | [**companyFileIdPurchaseOrderServiceGuidPut**](docs/Api/PurchasesBillsPurchaseOrderServicesApi.md#companyfileidpurchaseorderserviceguidput) | **PUT** /{company_file_id}/Purchase/Order/Service/{guid} | Update a new service type order
*PurchasesBillsPurchaseOrderServicesApi* | [**companyFileIdPurchaseOrderServicePost**](docs/Api/PurchasesBillsPurchaseOrderServicesApi.md#companyfileidpurchaseorderservicepost) | **POST** /{company_file_id}/Purchase/Order/Service | Create a new service order
*PurchasesBillsSupplierPaymentsApi* | [**companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost**](docs/Api/PurchasesBillsSupplierPaymentsApi.md#companyfileidpurchasesupplierpaymentcalculatediscountspost) | **POST** /{company_file_id}/Purchase/SupplierPayment/CalculateDiscounts | Calculate the discounts
*PurchasesBillsSupplierPaymentsApi* | [**companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete**](docs/Api/PurchasesBillsSupplierPaymentsApi.md#companyfileidpurchasesupplierpaymentee1c61ed98f04e0ea0d5712149206b69delete) | **DELETE** /{company_file_id}/Purchase/SupplierPayment/ee1c61ed-98f0-4e0e-a0d5-712149206b69 | Delete a supplier payment
*PurchasesBillsSupplierPaymentsApi* | [**companyFileIdPurchaseSupplierPaymentGet**](docs/Api/PurchasesBillsSupplierPaymentsApi.md#companyfileidpurchasesupplierpaymentget) | **GET** /{company_file_id}/Purchase/SupplierPayment | List all supplier payments
*PurchasesBillsSupplierPaymentsApi* | [**companyFileIdPurchaseSupplierPaymentGuidPut**](docs/Api/PurchasesBillsSupplierPaymentsApi.md#companyfileidpurchasesupplierpaymentguidput) | **PUT** /{company_file_id}/Purchase/SupplierPayment/{guid} | Update a supplier payment
*PurchasesBillsSupplierPaymentsApi* | [**companyFileIdPurchaseSupplierPaymentPost**](docs/Api/PurchasesBillsSupplierPaymentsApi.md#companyfileidpurchasesupplierpaymentpost) | **POST** /{company_file_id}/Purchase/SupplierPayment | Create a supplier payment
*PurchasesBillsSupplierPaymentsApi* | [**companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost**](docs/Api/PurchasesBillsSupplierPaymentsApi.md#companyfileidpurchasesupplierpaymentrecordwithdiscountsandfeespost) | **POST** /{company_file_id}/Purchase/SupplierPayment/RecordWithDiscountsAndFees | Create a supplier payment with discounts and fees
*ReportsApi* | [**companyFileIdReportGSTNZGSTReportGet**](docs/Api/ReportsApi.md#companyfileidreportgstnzgstreportget) | **GET** /{company_file_id}/Report/GST/NZGSTReport | NZ GST Report
*ReportsApi* | [**companyFileIdReportPayrollCategorySummaryGet**](docs/Api/ReportsApi.md#companyfileidreportpayrollcategorysummaryget) | **GET** /{company_file_id}/Report/PayrollCategorySummary | Payroll Category Summary
*ReportsApi* | [**companyFileIdReportPayrollEmployeePayrollAdviceGet**](docs/Api/ReportsApi.md#companyfileidreportpayrollemployeepayrolladviceget) | **GET** /{company_file_id}/Report/Payroll/EmployeePayrollAdvice | Employee Payroll Advice
*ReportsApi* | [**companyFileIdReportProfitAndLossSummaryGet**](docs/Api/ReportsApi.md#companyfileidreportprofitandlosssummaryget) | **GET** /{company_file_id}/Report/ProfitAndLossSummary | Profit and Loss (P &#39;n&#39; L) summary
*ReportsApi* | [**companyFileIdReportTaxCodeSummaryGet**](docs/Api/ReportsApi.md#companyfileidreporttaxcodesummaryget) | **GET** /{company_file_id}/Report/TaxCodeSummary | Tax Code Summary
*ReportsApi* | [**companyFileIdReportTransactionCodingSummaryGet**](docs/Api/ReportsApi.md#companyfileidreporttransactioncodingsummaryget) | **GET** /{company_file_id}/Report/TransactionCodingSummary | Transaction Coding Summary
*SalesInvoicesCreditRefundApi* | [**companyFileIdSaleCreditRefundGet**](docs/Api/SalesInvoicesCreditRefundApi.md#companyfileidsalecreditrefundget) | **GET** /{company_file_id}/Sale/CreditRefund | List all credit refunds
*SalesInvoicesCreditRefundApi* | [**companyFileIdSaleCreditRefundGuidDelete**](docs/Api/SalesInvoicesCreditRefundApi.md#companyfileidsalecreditrefundguiddelete) | **DELETE** /{company_file_id}/Sale/CreditRefund/{guid} | Delete a credit refund
*SalesInvoicesCreditRefundApi* | [**companyFileIdSaleCreditRefundPost**](docs/Api/SalesInvoicesCreditRefundApi.md#companyfileidsalecreditrefundpost) | **POST** /{company_file_id}/Sale/CreditRefund | Create a credit refund
*SalesInvoicesCreditSettlementApi* | [**companyFileIdSaleCreditSettlementGet**](docs/Api/SalesInvoicesCreditSettlementApi.md#companyfileidsalecreditsettlementget) | **GET** /{company_file_id}/Sale/CreditSettlement | List all credit settlments
*SalesInvoicesCreditSettlementApi* | [**companyFileIdSaleCreditSettlementGuidDelete**](docs/Api/SalesInvoicesCreditSettlementApi.md#companyfileidsalecreditsettlementguiddelete) | **DELETE** /{company_file_id}/Sale/CreditSettlement/{guid} | Delete a credit settlement
*SalesInvoicesCreditSettlementApi* | [**companyFileIdSaleCreditSettlementPost**](docs/Api/SalesInvoicesCreditSettlementApi.md#companyfileidsalecreditsettlementpost) | **POST** /{company_file_id}/Sale/CreditSettlement | Create a debit settlement
*SalesInvoicesCustomerPaymentsApi* | [**companyFileIdSaleCustomerPaymentCalculateDiscountsFeesPost**](docs/Api/SalesInvoicesCustomerPaymentsApi.md#companyfileidsalecustomerpaymentcalculatediscountsfeespost) | **POST** /{company_file_id}/Sale/CustomerPayment/CalculateDiscountsFees | Calculate the discounts
*SalesInvoicesCustomerPaymentsApi* | [**companyFileIdSaleCustomerPaymentGet**](docs/Api/SalesInvoicesCustomerPaymentsApi.md#companyfileidsalecustomerpaymentget) | **GET** /{company_file_id}/Sale/CustomerPayment | List all customer payments
*SalesInvoicesCustomerPaymentsApi* | [**companyFileIdSaleCustomerPaymentGuidPut**](docs/Api/SalesInvoicesCustomerPaymentsApi.md#companyfileidsalecustomerpaymentguidput) | **PUT** /{company_file_id}/Sale/CustomerPayment/{guid} | Update a customer payment
*SalesInvoicesCustomerPaymentsApi* | [**companyFileIdSaleCustomerPaymentPost**](docs/Api/SalesInvoicesCustomerPaymentsApi.md#companyfileidsalecustomerpaymentpost) | **POST** /{company_file_id}/Sale/CustomerPayment | Create a customer payment
*SalesInvoicesCustomerPaymentsApi* | [**companyFileIdSaleCustomerPaymentRecordWithDiscountsAndFeesPost**](docs/Api/SalesInvoicesCustomerPaymentsApi.md#companyfileidsalecustomerpaymentrecordwithdiscountsandfeespost) | **POST** /{company_file_id}/Sale/CustomerPayment/RecordWithDiscountsAndFees | Create a customer payment with discounts and fees
*SalesInvoicesCustomerPaymentsApi* | [**companyFileIdSaleCustomerPaymenttGuidDelete**](docs/Api/SalesInvoicesCustomerPaymentsApi.md#companyfileidsalecustomerpaymenttguiddelete) | **DELETE** /{company_file_id}/Sale/CustomerPaymentt/{guid} | Delete a customer payment
*SalesInvoicesSaleInvoicesApi* | [**companyFileIdSaleInvoiceGet**](docs/Api/SalesInvoicesSaleInvoicesApi.md#companyfileidsaleinvoiceget) | **GET** /{company_file_id}/Sale/Invoice | List all the invoices
*SalesInvoicesSaleInvoicesApi* | [**companyFileIdSaleInvoiceTypeGuidGet**](docs/Api/SalesInvoicesSaleInvoicesApi.md#companyfileidsaleinvoicetypeguidget) | **GET** /{company_file_id}/Sale/Invoice/{type}/{guid} | Render invoice as PDF
*SalesInvoicesSaleInvoicesItemsApi* | [**companyFileIdSaleInvoiceItemGet**](docs/Api/SalesInvoicesSaleInvoicesItemsApi.md#companyfileidsaleinvoiceitemget) | **GET** /{company_file_id}/Sale/Invoice/Item | List all the Item invoices
*SalesInvoicesSaleInvoicesItemsApi* | [**companyFileIdSaleInvoiceItemGuidDelete**](docs/Api/SalesInvoicesSaleInvoicesItemsApi.md#companyfileidsaleinvoiceitemguiddelete) | **DELETE** /{company_file_id}/Sale/Invoice/Item/{guid} | Delete an invoice of item type
*SalesInvoicesSaleInvoicesItemsApi* | [**companyFileIdSaleInvoiceItemGuidPut**](docs/Api/SalesInvoicesSaleInvoicesItemsApi.md#companyfileidsaleinvoiceitemguidput) | **PUT** /{company_file_id}/Sale/Invoice/Item/{guid} | Update a new item type invoice
*SalesInvoicesSaleInvoicesItemsApi* | [**companyFileIdSaleInvoiceItemPost**](docs/Api/SalesInvoicesSaleInvoicesItemsApi.md#companyfileidsaleinvoiceitempost) | **POST** /{company_file_id}/Sale/Invoice/Item | Create a new item invoice
*SalesInvoicesSaleInvoicesMiscellaneousApi* | [**companyFileIdPurchaseBillMiscellaneousGuidDelete**](docs/Api/SalesInvoicesSaleInvoicesMiscellaneousApi.md#companyfileidpurchasebillmiscellaneousguiddelete) | **DELETE** /{company_file_id}/Purchase/Bill/Miscellaneous/{guid} | Delete an invoice of miscellaneous type
*SalesInvoicesSaleInvoicesMiscellaneousApi* | [**companyFileIdPurchaseBillMiscellaneousGuidPut**](docs/Api/SalesInvoicesSaleInvoicesMiscellaneousApi.md#companyfileidpurchasebillmiscellaneousguidput) | **PUT** /{company_file_id}/Purchase/Bill/Miscellaneous/{guid} | Update a new Miscellaneous type invoice
*SalesInvoicesSaleInvoicesMiscellaneousApi* | [**companyFileIdSaleInvoiceMiscellaneousGet**](docs/Api/SalesInvoicesSaleInvoicesMiscellaneousApi.md#companyfileidsaleinvoicemiscellaneousget) | **GET** /{company_file_id}/Sale/Invoice/Miscellaneous | List all the Miscellaneous invoices
*SalesInvoicesSaleInvoicesMiscellaneousApi* | [**companyFileIdSaleInvoiceMiscellaneousPost**](docs/Api/SalesInvoicesSaleInvoicesMiscellaneousApi.md#companyfileidsaleinvoicemiscellaneouspost) | **POST** /{company_file_id}/Sale/Invoice/Miscellaneous | Create a new Miscellaneous Invoice
*SalesInvoicesSaleInvoicesProfessionalApi* | [**companyFileIdSaleInvoiceProfessionalGet**](docs/Api/SalesInvoicesSaleInvoicesProfessionalApi.md#companyfileidsaleinvoiceprofessionalget) | **GET** /{company_file_id}/Sale/Invoice/Professional | List all the professional invoices
*SalesInvoicesSaleInvoicesProfessionalApi* | [**companyFileIdSaleInvoiceProfessionalGuidDelete**](docs/Api/SalesInvoicesSaleInvoicesProfessionalApi.md#companyfileidsaleinvoiceprofessionalguiddelete) | **DELETE** /{company_file_id}/Sale/invoice/Professional/{guid} | Delete an invoice of professional type
*SalesInvoicesSaleInvoicesProfessionalApi* | [**companyFileIdSaleInvoiceProfessionalGuidPut**](docs/Api/SalesInvoicesSaleInvoicesProfessionalApi.md#companyfileidsaleinvoiceprofessionalguidput) | **PUT** /{company_file_id}/Sale/Invoice/Professional/{guid} | Update a new professional type invoice
*SalesInvoicesSaleInvoicesProfessionalApi* | [**companyFileIdSaleInvoiceProfessionalPost**](docs/Api/SalesInvoicesSaleInvoicesProfessionalApi.md#companyfileidsaleinvoiceprofessionalpost) | **POST** /{company_file_id}/Sale/Invoice/Professional | Create a new professional bill
*SalesInvoicesSaleInvoicesServicesApi* | [**companyFileIdSaleInvoiceServiceGet**](docs/Api/SalesInvoicesSaleInvoicesServicesApi.md#companyfileidsaleinvoiceserviceget) | **GET** /{company_file_id}/Sale/Invoice/Service | List all the service invoice
*SalesInvoicesSaleInvoicesServicesApi* | [**companyFileIdSaleInvoiceServiceGuidDelete**](docs/Api/SalesInvoicesSaleInvoicesServicesApi.md#companyfileidsaleinvoiceserviceguiddelete) | **DELETE** /{company_file_id}/Sale/Invoice/Service/{guid} | Delete an order of service type
*SalesInvoicesSaleInvoicesServicesApi* | [**companyFileIdSaleInvoiceServiceGuidPut**](docs/Api/SalesInvoicesSaleInvoicesServicesApi.md#companyfileidsaleinvoiceserviceguidput) | **PUT** /{company_file_id}/Sale/Invoice/Service/{guid} | Update a new service type invoice
*SalesInvoicesSaleInvoicesServicesApi* | [**companyFileIdSaleInvoiceServicePost**](docs/Api/SalesInvoicesSaleInvoicesServicesApi.md#companyfileidsaleinvoiceservicepost) | **POST** /{company_file_id}/Sale/Invoice/Service | Create a new service invoice
*SalesInvoicesSaleInvoicesTimeBillingApi* | [**companyFileIdSaleInvoiceTimeBillingGet**](docs/Api/SalesInvoicesSaleInvoicesTimeBillingApi.md#companyfileidsaleinvoicetimebillingget) | **GET** /{company_file_id}/Sale/Invoice/TimeBilling | List all the TimeBilling invoice
*SalesInvoicesSaleInvoicesTimeBillingApi* | [**companyFileIdSaleInvoiceTimeBillingGuidDelete**](docs/Api/SalesInvoicesSaleInvoicesTimeBillingApi.md#companyfileidsaleinvoicetimebillingguiddelete) | **DELETE** /{company_file_id}/Sale/Invoice/TimeBilling/{guid} | Delete an invoice of time billing type
*SalesInvoicesSaleInvoicesTimeBillingApi* | [**companyFileIdSaleInvoiceTimeBillingGuidPut**](docs/Api/SalesInvoicesSaleInvoicesTimeBillingApi.md#companyfileidsaleinvoicetimebillingguidput) | **PUT** /{company_file_id}/Sale/Invoice/TimeBilling/{guid} | Update a new time billing type invoice
*SalesInvoicesSaleInvoicesTimeBillingApi* | [**companyFileIdSaleInvoiceTimeBillingPost**](docs/Api/SalesInvoicesSaleInvoicesTimeBillingApi.md#companyfileidsaleinvoicetimebillingpost) | **POST** /{company_file_id}/Sale/Invoice/TimeBilling | Create a new time billing invoice
*SalesInvoicesSaleOrderApi* | [**companyFileIdSaleOrderGet**](docs/Api/SalesInvoicesSaleOrderApi.md#companyfileidsaleorderget) | **GET** /{company_file_id}/Sale/Order | List all the orders
*SalesInvoicesSaleOrderApi* | [**companyFileIdSaleOrderTypeGuidGet**](docs/Api/SalesInvoicesSaleOrderApi.md#companyfileidsaleordertypeguidget) | **GET** /{company_file_id}/Sale/Order/{type}/{guid} | Render order as PDF
*SalesInvoicesSaleOrderItemsApi* | [**companyFileIdSaleOrderItemGet**](docs/Api/SalesInvoicesSaleOrderItemsApi.md#companyfileidsaleorderitemget) | **GET** /{company_file_id}/Sale/Order/Item | List all the Item Orders
*SalesInvoicesSaleOrderItemsApi* | [**companyFileIdSaleOrderItemGuidDelete**](docs/Api/SalesInvoicesSaleOrderItemsApi.md#companyfileidsaleorderitemguiddelete) | **DELETE** /{company_file_id}/Sale/Order/Item/{guid} | Delete an order of item type
*SalesInvoicesSaleOrderItemsApi* | [**companyFileIdSaleOrderItemGuidPut**](docs/Api/SalesInvoicesSaleOrderItemsApi.md#companyfileidsaleorderitemguidput) | **PUT** /{company_file_id}/Sale/Order/Item/{guid} | Update a new item type order
*SalesInvoicesSaleOrderItemsApi* | [**companyFileIdSaleOrderItemPost**](docs/Api/SalesInvoicesSaleOrderItemsApi.md#companyfileidsaleorderitempost) | **POST** /{company_file_id}/Sale/Order/Item | Create a new item order
*SalesInvoicesSaleOrderMiscellaneousApi* | [**companyFileIdSaleOrderMiscellaneousGet**](docs/Api/SalesInvoicesSaleOrderMiscellaneousApi.md#companyfileidsaleordermiscellaneousget) | **GET** /{company_file_id}/Sale/Order/Miscellaneous | List all the Miscellaneous orders
*SalesInvoicesSaleOrderMiscellaneousApi* | [**companyFileIdSaleOrderMiscellaneousGuidDelete**](docs/Api/SalesInvoicesSaleOrderMiscellaneousApi.md#companyfileidsaleordermiscellaneousguiddelete) | **DELETE** /{company_file_id}/Sale/Order/Miscellaneous/{guid} | Delete an order of professional type
*SalesInvoicesSaleOrderMiscellaneousApi* | [**companyFileIdSaleOrderMiscellaneousGuidPut**](docs/Api/SalesInvoicesSaleOrderMiscellaneousApi.md#companyfileidsaleordermiscellaneousguidput) | **PUT** /{company_file_id}/Sale/Order/Miscellaneous/{guid} | Update a new Miscellaneous type order
*SalesInvoicesSaleOrderMiscellaneousApi* | [**companyFileIdSaleOrderMiscellaneousPost**](docs/Api/SalesInvoicesSaleOrderMiscellaneousApi.md#companyfileidsaleordermiscellaneouspost) | **POST** /{company_file_id}/Sale/Order/Miscellaneous | Create a new Miscellaneous order
*SalesInvoicesSaleOrderProfessionalApi* | [**companyFileIdSaleOrderProfessionalGet**](docs/Api/SalesInvoicesSaleOrderProfessionalApi.md#companyfileidsaleorderprofessionalget) | **GET** /{company_file_id}/Sale/Order/Professional | List all the professional orders
*SalesInvoicesSaleOrderProfessionalApi* | [**companyFileIdSaleOrderProfessionalGuidDelete**](docs/Api/SalesInvoicesSaleOrderProfessionalApi.md#companyfileidsaleorderprofessionalguiddelete) | **DELETE** /{company_file_id}/Sale/Order/Professional/{guid} | Delete an bill of professional type
*SalesInvoicesSaleOrderProfessionalApi* | [**companyFileIdSaleOrderProfessionalGuidPut**](docs/Api/SalesInvoicesSaleOrderProfessionalApi.md#companyfileidsaleorderprofessionalguidput) | **PUT** /{company_file_id}/Sale/Order/Professional/{guid} | Update a new professional type bill
*SalesInvoicesSaleOrderProfessionalApi* | [**companyFileIdSaleOrderProfessionalPost**](docs/Api/SalesInvoicesSaleOrderProfessionalApi.md#companyfileidsaleorderprofessionalpost) | **POST** /{company_file_id}/Sale/Order/Professional | Create a new professional Order
*SalesInvoicesSaleOrderServicesApi* | [**companyFileIdSaleOrderServiceGet**](docs/Api/SalesInvoicesSaleOrderServicesApi.md#companyfileidsaleorderserviceget) | **GET** /{company_file_id}/Sale/Order/Service | List all the service orders
*SalesInvoicesSaleOrderServicesApi* | [**companyFileIdSaleOrderServiceGuidPut**](docs/Api/SalesInvoicesSaleOrderServicesApi.md#companyfileidsaleorderserviceguidput) | **PUT** /{company_file_id}/Sale/Order/Service/{guid} | Update a new service type order
*SalesInvoicesSaleOrderServicesApi* | [**companyFileIdSaleOrderServicePost**](docs/Api/SalesInvoicesSaleOrderServicesApi.md#companyfileidsaleorderservicepost) | **POST** /{company_file_id}/Sale/Order/Service | Create a new service order
*SalesInvoicesSaleOrderTimeBillingApi* | [**companyFileIdSaleOrderTimeBillingGet**](docs/Api/SalesInvoicesSaleOrderTimeBillingApi.md#companyfileidsaleordertimebillingget) | **GET** /{company_file_id}/Sale/Order/TimeBilling | List all the TimeBilling order
*SalesInvoicesSaleOrderTimeBillingApi* | [**companyFileIdSaleOrderTimeBillingGuidDelete**](docs/Api/SalesInvoicesSaleOrderTimeBillingApi.md#companyfileidsaleordertimebillingguiddelete) | **DELETE** /{company_file_id}/Sale/Order/TimeBilling/{guid} | Delete an order of time billing type
*SalesInvoicesSaleOrderTimeBillingApi* | [**companyFileIdSaleOrderTimeBillingGuidPut**](docs/Api/SalesInvoicesSaleOrderTimeBillingApi.md#companyfileidsaleordertimebillingguidput) | **PUT** /{company_file_id}/Sale/Order/TimeBilling/{guid} | Update a new time billing type order
*SalesInvoicesSaleOrderTimeBillingApi* | [**companyFileIdSaleOrderTimeBillingPost**](docs/Api/SalesInvoicesSaleOrderTimeBillingApi.md#companyfileidsaleordertimebillingpost) | **POST** /{company_file_id}/Sale/Order/TimeBilling | Create a new time billing order
*SalesInvoicesSaleQuotesApi* | [**companyFileIdSaleQuoteGet**](docs/Api/SalesInvoicesSaleQuotesApi.md#companyfileidsalequoteget) | **GET** /{company_file_id}/Sale/Quote | List all the quotes
*SalesInvoicesSaleQuotesItemsApi* | [**companyFileIdSaleQuoteItem4f3ef6a0A31e4f9aB0e585ff5e551259Put**](docs/Api/SalesInvoicesSaleQuotesItemsApi.md#companyfileidsalequoteitem4f3ef6a0a31e4f9ab0e585ff5e551259put) | **PUT** /{company_file_id}/Sale/Quote/Item/4f3ef6a0-a31e-4f9a-b0e5-85ff5e551259 | Update a new item type quote
*SalesInvoicesSaleQuotesItemsApi* | [**companyFileIdSaleQuoteItemGet**](docs/Api/SalesInvoicesSaleQuotesItemsApi.md#companyfileidsalequoteitemget) | **GET** /{company_file_id}/Sale/Quote/Item | List all the Item Quotes
*SalesInvoicesSaleQuotesItemsApi* | [**companyFileIdSaleQuoteItemGuidDelete**](docs/Api/SalesInvoicesSaleQuotesItemsApi.md#companyfileidsalequoteitemguiddelete) | **DELETE** /{company_file_id}/Sale/Quote/Item/{guid} | Delete an order of item type
*SalesInvoicesSaleQuotesItemsApi* | [**companyFileIdSaleQuoteItemPost**](docs/Api/SalesInvoicesSaleQuotesItemsApi.md#companyfileidsalequoteitempost) | **POST** /{company_file_id}/Sale/Quote/Item | Create a new item quote
*SalesInvoicesSaleQuotesMiscellaneousApi* | [**companyFileIdSaleQuoteMiscellaneousGet**](docs/Api/SalesInvoicesSaleQuotesMiscellaneousApi.md#companyfileidsalequotemiscellaneousget) | **GET** /{company_file_id}/Sale/Quote/Miscellaneous | List all the Miscellaneous quote
*SalesInvoicesSaleQuotesMiscellaneousApi* | [**companyFileIdSaleQuoteMiscellaneousGuidDelete**](docs/Api/SalesInvoicesSaleQuotesMiscellaneousApi.md#companyfileidsalequotemiscellaneousguiddelete) | **DELETE** /{company_file_id}/Sale/Quote/Miscellaneous/{guid} | Delete a quote of professional type
*SalesInvoicesSaleQuotesMiscellaneousApi* | [**companyFileIdSaleQuoteMiscellaneousGuidPut**](docs/Api/SalesInvoicesSaleQuotesMiscellaneousApi.md#companyfileidsalequotemiscellaneousguidput) | **PUT** /{company_file_id}/Sale/Quote/Miscellaneous/{guid} | Update a new Miscellaneous type quote
*SalesInvoicesSaleQuotesMiscellaneousApi* | [**companyFileIdSaleQuoteMiscellaneousPost**](docs/Api/SalesInvoicesSaleQuotesMiscellaneousApi.md#companyfileidsalequotemiscellaneouspost) | **POST** /{company_file_id}/Sale/Quote/Miscellaneous | Create a new Miscellaneous quote
*SalesInvoicesSaleQuotesProfessionalApi* | [**companyFileIdSaleQuoteProfessional2f777648Be6343dfAf262772fee9d5b2Put**](docs/Api/SalesInvoicesSaleQuotesProfessionalApi.md#companyfileidsalequoteprofessional2f777648be6343dfaf262772fee9d5b2put) | **PUT** /{company_file_id}/Sale/Quote/Professional/2f777648-be63-43df-af26-2772fee9d5b2 | Update a new professional type quote
*SalesInvoicesSaleQuotesProfessionalApi* | [**companyFileIdSaleQuoteProfessionalGet**](docs/Api/SalesInvoicesSaleQuotesProfessionalApi.md#companyfileidsalequoteprofessionalget) | **GET** /{company_file_id}/Sale/Quote/Professional | List all the professional quote
*SalesInvoicesSaleQuotesProfessionalApi* | [**companyFileIdSaleQuoteProfessionalGuidDelete**](docs/Api/SalesInvoicesSaleQuotesProfessionalApi.md#companyfileidsalequoteprofessionalguiddelete) | **DELETE** /{company_file_id}/Sale/Quote/Professional/{guid} | Delete a quote of professional type
*SalesInvoicesSaleQuotesProfessionalApi* | [**companyFileIdSaleQuoteProfessionalPost**](docs/Api/SalesInvoicesSaleQuotesProfessionalApi.md#companyfileidsalequoteprofessionalpost) | **POST** /{company_file_id}/Sale/Quote/Professional | Create a new professional quote
*SalesInvoicesSaleQuotesServicesApi* | [**companyFileIdSaleOrderServiceGuidDelete**](docs/Api/SalesInvoicesSaleQuotesServicesApi.md#companyfileidsaleorderserviceguiddelete) | **DELETE** /{company_file_id}/Sale/Order/Service/{guid} | Delete an order of service type
*SalesInvoicesSaleQuotesServicesApi* | [**companyFileIdSaleQuoteServiceGet**](docs/Api/SalesInvoicesSaleQuotesServicesApi.md#companyfileidsalequoteserviceget) | **GET** /{company_file_id}/Sale/Quote/Service | List all the service quotes
*SalesInvoicesSaleQuotesServicesApi* | [**companyFileIdSaleQuoteServiceGuidPut**](docs/Api/SalesInvoicesSaleQuotesServicesApi.md#companyfileidsalequoteserviceguidput) | **PUT** /{company_file_id}/Sale/Quote/Service/{guid} | Update a new service type quote
*SalesInvoicesSaleQuotesServicesApi* | [**companyFileIdSaleQuoteServicePost**](docs/Api/SalesInvoicesSaleQuotesServicesApi.md#companyfileidsalequoteservicepost) | **POST** /{company_file_id}/Sale/Quote/Service | Create a new service quote
*SalesInvoicesSaleQuotesTimeBillingApi* | [**companyFileIdSaleQuoteTimeBillingGet**](docs/Api/SalesInvoicesSaleQuotesTimeBillingApi.md#companyfileidsalequotetimebillingget) | **GET** /{company_file_id}/Sale/Quote/TimeBilling | List all the TimeBilling quotes
*SalesInvoicesSaleQuotesTimeBillingApi* | [**companyFileIdSaleQuoteTimeBillingGuidDelete**](docs/Api/SalesInvoicesSaleQuotesTimeBillingApi.md#companyfileidsalequotetimebillingguiddelete) | **DELETE** /{company_file_id}/Sale/Quote/TimeBilling/{guid} | Delete a quote of time billing type
*SalesInvoicesSaleQuotesTimeBillingApi* | [**companyFileIdSaleQuoteTimeBillingGuidPut**](docs/Api/SalesInvoicesSaleQuotesTimeBillingApi.md#companyfileidsalequotetimebillingguidput) | **PUT** /{company_file_id}/Sale/Quote/TimeBilling/{$guid} | Update a new time billing type order
*SalesInvoicesSaleQuotesTimeBillingApi* | [**companyFileIdSaleQuoteTimeBillingPost**](docs/Api/SalesInvoicesSaleQuotesTimeBillingApi.md#companyfileidsalequotetimebillingpost) | **POST** /{company_file_id}/Sale/Quote/TimeBilling | Create a new time billing quote
*TimeBillingActivitiesApi* | [**companyFileIdTimeBillingActivityGet**](docs/Api/TimeBillingActivitiesApi.md#companyfileidtimebillingactivityget) | **GET** /{company_file_id}/TimeBilling/Activity | Get a list of all activities
*TimeBillingActivitiesApi* | [**companyFileIdTimeBillingActivityGuidDelete**](docs/Api/TimeBillingActivitiesApi.md#companyfileidtimebillingactivityguiddelete) | **DELETE** /{company_file_id}/TimeBilling/Activity/{guid} | Delete a time billing activity
*TimeBillingActivitiesApi* | [**companyFileIdTimeBillingActivityGuidPut**](docs/Api/TimeBillingActivitiesApi.md#companyfileidtimebillingactivityguidput) | **PUT** /{company_file_id}/TimeBilling/Activity/{guid} | Update a time billing activity
*TimeBillingActivitiesApi* | [**companyFileIdTimeBillingActivityPost**](docs/Api/TimeBillingActivitiesApi.md#companyfileidtimebillingactivitypost) | **POST** /{company_file_id}/TimeBilling/Activity | Create a new time billing activity
*TimeBillingActivitySlipsApi* | [**companyFileIdTimeBillingActivitySlipGet**](docs/Api/TimeBillingActivitySlipsApi.md#companyfileidtimebillingactivityslipget) | **GET** /{company_file_id}/TimeBilling/ActivitySlip | Get a list of all activity slips
*TimeBillingActivitySlipsApi* | [**companyFileIdTimeBillingActivitySlipGuidDelete**](docs/Api/TimeBillingActivitySlipsApi.md#companyfileidtimebillingactivityslipguiddelete) | **DELETE** /{company_file_id}/TimeBilling/ActivitySlip/{guid} | Delete a time billing activity
*TimeBillingActivitySlipsApi* | [**companyFileIdTimeBillingActivitySlipGuidPut**](docs/Api/TimeBillingActivitySlipsApi.md#companyfileidtimebillingactivityslipguidput) | **PUT** /{company_file_id}/TimeBilling/ActivitySlip/{guid} | Update an activity slip
*TimeBillingActivitySlipsApi* | [**companyFileIdTimeBillingActivitySlipPost**](docs/Api/TimeBillingActivitySlipsApi.md#companyfileidtimebillingactivityslippost) | **POST** /{company_file_id}/TimeBilling/ActivitySlip | Create a new activity slip
*WorkingWithTheLocalAPIApi* | [**accountrightGet**](docs/Api/WorkingWithTheLocalAPIApi.md#accountrightget) | **GET** /accountright/ | Working over a network

## Models


## Authorization

Authentication schemes defined for the API:
### noauthAuth

### oauth2Auth

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
