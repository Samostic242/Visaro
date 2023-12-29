<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Visaro Ng Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://visaronigeria.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.26.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.26.0.js") }}"></script>

</head>

<body data-languages="[&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-creditors" class="tocify-header">
                <li class="tocify-item level-1" data-unique="creditors">
                    <a href="#creditors">Creditors</a>
                </li>
                                    <ul id="tocify-subheader-creditors" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="creditors-POSTapi-v1-bnpl-creditors">
                                <a href="#creditors-POSTapi-v1-bnpl-creditors">Add new creditor.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="creditors-GETapi-v1-bnpl-creditors">
                                <a href="#creditors-GETapi-v1-bnpl-creditors">Fetch all creditors.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="creditors-GETapi-v1-bnpl-creditors--creditor_id-">
                                <a href="#creditors-GETapi-v1-bnpl-creditors--creditor_id-">Get a creditor.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="creditors-PATCHapi-v1-bnpl-creditors--creditor_id--update">
                                <a href="#creditors-PATCHapi-v1-bnpl-creditors--creditor_id--update">Update creditor record.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="creditors-DELETEapi-v1-bnpl-creditors--creditor_id--delete">
                                <a href="#creditors-DELETEapi-v1-bnpl-creditors--creditor_id--delete">Delete creditor record.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="creditors-conditions">
                                <a href="#creditors-conditions">Conditions</a>
                            </li>
                                                            <ul id="tocify-subheader-creditors-conditions" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="creditors-GETapi-v1-bnpl-creditors--creditor_id--conditions">
                                            <a href="#creditors-GETapi-v1-bnpl-creditors--creditor_id--conditions">fetch Creditor Conditions</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="creditors-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update">
                                            <a href="#creditors-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update">Update Creditor Conditions</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-credits" class="tocify-header">
                <li class="tocify-item level-1" data-unique="credits">
                    <a href="#credits">Credits</a>
                </li>
                                    <ul id="tocify-subheader-credits" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="credits-GETapi-v1-bnpl-credits">
                                <a href="#credits-GETapi-v1-bnpl-credits">Fetch all Credits.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="credits-GETapi-v1-bnpl-credits--credit_id-">
                                <a href="#credits-GETapi-v1-bnpl-credits--credit_id-">Get a credit record.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="credits-GETapi-v1-bnpl-credits-manage-user">
                                <a href="#credits-GETapi-v1-bnpl-credits-manage-user">Fetch user active Credits.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="credits-POSTapi-v1-bnpl-credits-requests">
                                <a href="#credits-POSTapi-v1-bnpl-credits-requests">Initiate Credit request.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="credits-POSTapi-v1-bnpl-credits-requests-complete">
                                <a href="#credits-POSTapi-v1-bnpl-credits-requests-complete">Complete Credit request.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="credits-GETapi-v1-bnpl-credits-requests--credit_request_id--status">
                                <a href="#credits-GETapi-v1-bnpl-credits-requests--credit_request_id--status">Get Credit request status.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Display Swagger API page.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                                <a href="#endpoints-GETapi-oauth2-callback">Display Oauth2 callback pages.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-register">
                                <a href="#endpoints-POSTapi-v1-register">POST api/v1/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-login">
                                <a href="#endpoints-POSTapi-v1-login">Login user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-refresh-token">
                                <a href="#endpoints-POSTapi-v1-refresh-token">POST api/v1/refresh-token</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-region_list--country_key-">
                                <a href="#endpoints-GETapi-v1-region_list--country_key-">GET api/v1/region_list/{country_key}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-country_list">
                                <a href="#endpoints-GETapi-v1-country_list">GET api/v1/country_list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-forgotpassword">
                                <a href="#endpoints-POSTapi-v1-forgotpassword">POST api/v1/forgotpassword</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-list_otp_types">
                                <a href="#endpoints-GETapi-v1-list_otp_types">GET api/v1/list_otp_types</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-logout">
                                <a href="#endpoints-POSTapi-v1-logout">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-validate_otp">
                                <a href="#endpoints-POSTapi-v1-validate_otp">POST api/v1/validate_otp</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-resend_otp--otp_type-">
                                <a href="#endpoints-GETapi-v1-resend_otp--otp_type-">GET api/v1/resend_otp/{otp_type}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-create_password">
                                <a href="#endpoints-POSTapi-v1-create_password">POST api/v1/create_password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-initialize_transaction">
                                <a href="#endpoints-POSTapi-v1-initialize_transaction">POST api/v1/initialize_transaction</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-verify_transaction--ref-">
                                <a href="#endpoints-GETapi-v1-verify_transaction--ref-">GET api/v1/verify_transaction/{ref}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-initialize_change_password">
                                <a href="#endpoints-POSTapi-v1-initialize_change_password">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-bvn_verification">
                                <a href="#endpoints-POSTapi-v1-bvn_verification">POST api/v1/bvn_verification</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-dashboard">
                                <a href="#endpoints-GETapi-v1-dashboard">GET api/v1/dashboard</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-profile_details">
                                <a href="#endpoints-GETapi-v1-profile_details">GET api/v1/profile_details</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-balance_enquiry">
                                <a href="#endpoints-GETapi-v1-balance_enquiry">GET api/v1/balance_enquiry</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-get_bank_list">
                                <a href="#endpoints-GETapi-v1-get_bank_list">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-get_bill_payment_category">
                                <a href="#endpoints-GETapi-v1-get_bill_payment_category">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-profile-phone-verification-initiate">
                                <a href="#endpoints-POSTapi-v1-profile-phone-verification-initiate">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-profile-phone-verification-complete">
                                <a href="#endpoints-POSTapi-v1-profile-phone-verification-complete">POST api/v1/profile/phone/verification/complete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-initialize_change_transaction_pin">
                                <a href="#endpoints-POSTapi-v1-initialize_change_transaction_pin">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-username_check--email-">
                                <a href="#endpoints-GETapi-v1-username_check--email-">GET api/v1/username_check/{email}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-create_transaction_pin">
                                <a href="#endpoints-POSTapi-v1-create_transaction_pin">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-beneficial_enquiry">
                                <a href="#endpoints-GETapi-v1-beneficial_enquiry">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-transfer">
                                <a href="#endpoints-POSTapi-v1-transfer">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-transfer_to_visaro">
                                <a href="#endpoints-POSTapi-v1-transfer_to_visaro">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-company_profile_update">
                                <a href="#endpoints-POSTapi-v1-company_profile_update">POST api/v1/company_profile_update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-profile_update">
                                <a href="#endpoints-POSTapi-v1-profile_update">Access method to authenticate.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-articles">
                                <a href="#endpoints-GETapi-v1-articles">GET api/v1/articles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-articles">
                                <a href="#endpoints-POSTapi-v1-articles">POST api/v1/articles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-articles--id-">
                                <a href="#endpoints-GETapi-v1-articles--id-">GET api/v1/articles/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-articles--id-">
                                <a href="#endpoints-PUTapi-v1-articles--id-">PUT api/v1/articles/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-articles--id-">
                                <a href="#endpoints-DELETEapi-v1-articles--id-">DELETE api/v1/articles/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-articles--id--comments">
                                <a href="#endpoints-GETapi-v1-articles--id--comments">GET api/v1/articles/{id}/comments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-articles--id--comments">
                                <a href="#endpoints-POSTapi-v1-articles--id--comments">POST api/v1/articles/{id}/comments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-articles--id--likes">
                                <a href="#endpoints-GETapi-v1-articles--id--likes">GET api/v1/articles/{id}/likes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-articles--id--views">
                                <a href="#endpoints-GETapi-v1-articles--id--views">GET api/v1/articles/{id}/views</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-articles--id--likes">
                                <a href="#endpoints-PUTapi-v1-articles--id--likes">PUT api/v1/articles/{id}/likes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-articles--id--views">
                                <a href="#endpoints-PUTapi-v1-articles--id--views">PUT api/v1/articles/{id}/views</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-aviation-widget-initialize">
                                <a href="#endpoints-GETapi-v1-aviation-widget-initialize">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-aviation-flights-bookings">
                                <a href="#endpoints-GETapi-v1-aviation-flights-bookings">GET api/v1/aviation/flights/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-aviation-flights-bookings--id-">
                                <a href="#endpoints-GETapi-v1-aviation-flights-bookings--id-">GET api/v1/aviation/flights/bookings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-aviation-flights-bookings-submit">
                                <a href="#endpoints-POSTapi-v1-aviation-flights-bookings-submit">POST api/v1/aviation/flights/bookings/submit</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-aviation-flights-bookings--id--confirm">
                                <a href="#endpoints-POSTapi-v1-aviation-flights-bookings--id--confirm">POST api/v1/aviation/flights/bookings/{id}/confirm</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-aviation-flights-bookings--id--payments-options">
                                <a href="#endpoints-GETapi-v1-aviation-flights-bookings--id--payments-options">GET api/v1/aviation/flights/bookings/{id}/payments/options</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-">
                                <a href="#endpoints-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-">GET api/v1/aviation/flights/bookings/{id}/payments/options/{option_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-aviation-flights-bookings--id--payments-confirm">
                                <a href="#endpoints-POSTapi-v1-aviation-flights-bookings--id--payments-confirm">POST api/v1/aviation/flights/bookings/{id}/payments/confirm</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-bnpl-transactions-widget-initialize">
                                <a href="#endpoints-GETapi-v1-bnpl-transactions-widget-initialize">*****************************************************************************************************************************</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-bnpl-transactions-flights-bookings">
                                <a href="#endpoints-GETapi-v1-bnpl-transactions-flights-bookings">GET api/v1/bnpl/transactions/flights/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-bnpl-transactions-flights-bookings--id-">
                                <a href="#endpoints-GETapi-v1-bnpl-transactions-flights-bookings--id-">GET api/v1/bnpl/transactions/flights/bookings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-bnpl-transactions-flights-bookings-submit">
                                <a href="#endpoints-POSTapi-v1-bnpl-transactions-flights-bookings-submit">POST api/v1/bnpl/transactions/flights/bookings/submit</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm">
                                <a href="#endpoints-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm">POST api/v1/bnpl/transactions/flights/bookings/{id}/confirm</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options">
                                <a href="#endpoints-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options">GET api/v1/bnpl/transactions/flights/bookings/{id}/payments/options</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-">
                                <a href="#endpoints-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-">GET api/v1/bnpl/transactions/flights/bookings/{id}/payments/options/{option_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm">
                                <a href="#endpoints-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm">POST api/v1/bnpl/transactions/flights/bookings/{id}/payments/confirm</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-invoices" class="tocify-header">
                <li class="tocify-item level-1" data-unique="invoices">
                    <a href="#invoices">Invoices</a>
                </li>
                                    <ul id="tocify-subheader-invoices" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="invoices-POSTapi-v1-bnpl-merchants-manage-invoices">
                                <a href="#invoices-POSTapi-v1-bnpl-merchants-manage-invoices">Create new invoice.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoices-GETapi-v1-bnpl-merchants-manage-invoices">
                                <a href="#invoices-GETapi-v1-bnpl-merchants-manage-invoices">Fetch all invoices.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoices-GETapi-v1-bnpl-merchants-manage-invoices-user">
                                <a href="#invoices-GETapi-v1-bnpl-merchants-manage-invoices-user">Fetch user active invoices.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoices-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-">
                                <a href="#invoices-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-">Get an invoice record.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoices-GETapi-v1-bnpl-merchants-manage-invoices-code--code-">
                                <a href="#invoices-GETapi-v1-bnpl-merchants-manage-invoices-code--code-">Fetch invoice by code.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoices-GETapi-v1-bnpl-merchants-manage-invoices-number--number-">
                                <a href="#invoices-GETapi-v1-bnpl-merchants-manage-invoices-number--number-">Fetch invoice by number.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoices-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update">
                                <a href="#invoices-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update">Update an invoice.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invoices-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete">
                                <a href="#invoices-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete">Delete invoice.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-merchant" class="tocify-header">
                <li class="tocify-item level-1" data-unique="merchant">
                    <a href="#merchant">Merchant</a>
                </li>
                                    <ul id="tocify-subheader-merchant" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="merchant-POSTapi-v1-bnpl-merchants">
                                <a href="#merchant-POSTapi-v1-bnpl-merchants">Register Merchant.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="merchant-GETapi-v1-bnpl-merchants">
                                <a href="#merchant-GETapi-v1-bnpl-merchants">Fetch all Merchants.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="merchant-GETapi-v1-bnpl-merchants--merchant_id-">
                                <a href="#merchant-GETapi-v1-bnpl-merchants--merchant_id-">Get a merchant.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="merchant-PATCHapi-v1-bnpl-merchants--merchant_id--update">
                                <a href="#merchant-PATCHapi-v1-bnpl-merchants--merchant_id--update">Update merchant record.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="merchant-DELETEapi-v1-bnpl-merchants--merchant_id--delete">
                                <a href="#merchant-DELETEapi-v1-bnpl-merchants--merchant_id--delete">Delete merchant record.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="merchant-compliance">
                                <a href="#merchant-compliance">Compliance</a>
                            </li>
                                                            <ul id="tocify-subheader-merchant-compliance" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="merchant-GETapi-v1-bnpl-merchants--merchant_id--compliance">
                                            <a href="#merchant-GETapi-v1-bnpl-merchants--merchant_id--compliance">Fetch Merchant Compliance</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="merchant-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update">
                                            <a href="#merchant-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update">Update Merchant Compliance</a>
                                        </li>
                                                                    </ul>
                                                                                <li class="tocify-item level-2" data-unique="merchant-settings">
                                <a href="#merchant-settings">Settings</a>
                            </li>
                                                            <ul id="tocify-subheader-merchant-settings" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="merchant-GETapi-v1-bnpl-merchants--merchant_id--settings">
                                            <a href="#merchant-GETapi-v1-bnpl-merchants--merchant_id--settings">fetch Merchant Settings</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="merchant-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update">
                                            <a href="#merchant-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update">Update Merchant Settings</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: December 30, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://visaronigeria.test</code>
</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="creditors">Creditors</h1>

    

                                <h2 id="creditors-POSTapi-v1-bnpl-creditors">Add new creditor.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bnpl-creditors">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/creditors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nemo",
    "acronym": "ducimus",
    "official_name": "aspernatur",
    "website": "nostrum",
    "logo": "quaerat",
    "country_id": 14,
    "phone_code": "consequatur",
    "phone": "voluptatibus",
    "category": "maxime",
    "email": "shanahan.grady@example.net",
    "conflict_resolution_email": "lesch.zackary@example.com",
    "conflict_resolution_phone_code": "ad",
    "conflict_resolution_phone": "ut",
    "entity": "individual",
    "entity_category": "private"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-bnpl-creditors">
</span>
<span id="execution-results-POSTapi-v1-bnpl-creditors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-bnpl-creditors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-bnpl-creditors"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-bnpl-creditors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-bnpl-creditors">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-bnpl-creditors" data-method="POST"
      data-path="api/v1/bnpl/creditors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-bnpl-creditors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-bnpl-creditors"
                    onclick="tryItOut('POSTapi-v1-bnpl-creditors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-bnpl-creditors"
                    onclick="cancelTryOut('POSTapi-v1-bnpl-creditors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-bnpl-creditors"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/bnpl/creditors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="nemo"
               data-component="body">
    <br>
<p>Example: <code>nemo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>acronym</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="acronym"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="ducimus"
               data-component="body">
    <br>
<p>Example: <code>ducimus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>official_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="official_name"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="aspernatur"
               data-component="body">
    <br>
<p>Example: <code>aspernatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="website"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="nostrum"
               data-component="body">
    <br>
<p>Example: <code>nostrum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="quaerat"
               data-component="body">
    <br>
<p>Example: <code>quaerat</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="country_id"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="14"
               data-component="body">
    <br>
<p>Example: <code>14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_code"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="voluptatibus"
               data-component="body">
    <br>
<p>Example: <code>voluptatibus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="maxime"
               data-component="body">
    <br>
<p>Example: <code>maxime</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="shanahan.grady@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>shanahan.grady@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_email"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="lesch.zackary@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>lesch.zackary@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_phone_code"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="ad"
               data-component="body">
    <br>
<p>Example: <code>ad</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_phone"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entity</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="entity"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="individual"
               data-component="body">
    <br>
<p>Example: <code>individual</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>individual</code></li> <li><code>institution</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entity_category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="entity_category"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value="private"
               data-component="body">
    <br>
<p>Example: <code>private</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>private</code></li> <li><code>government</code></li> <li><code>individual</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>customization</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="customization"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="meta"                data-endpoint="POSTapi-v1-bnpl-creditors"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="creditors-GETapi-v1-bnpl-creditors">Fetch all creditors.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-creditors">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/creditors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-creditors">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-creditors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-creditors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-creditors"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-creditors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-creditors">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-creditors" data-method="GET"
      data-path="api/v1/bnpl/creditors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-creditors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-creditors"
                    onclick="tryItOut('GETapi-v1-bnpl-creditors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-creditors"
                    onclick="cancelTryOut('GETapi-v1-bnpl-creditors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-creditors"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/creditors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-creditors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-creditors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="creditors-GETapi-v1-bnpl-creditors--creditor_id-">Get a creditor.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-creditors--creditor_id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/creditors/voluptas"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-creditors--creditor_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-creditors--creditor_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-creditors--creditor_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-creditors--creditor_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-creditors--creditor_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-creditors--creditor_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-creditors--creditor_id-" data-method="GET"
      data-path="api/v1/bnpl/creditors/{creditor_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-creditors--creditor_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-creditors--creditor_id-"
                    onclick="tryItOut('GETapi-v1-bnpl-creditors--creditor_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-creditors--creditor_id-"
                    onclick="cancelTryOut('GETapi-v1-bnpl-creditors--creditor_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-creditors--creditor_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/creditors/{creditor_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-creditors--creditor_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-creditors--creditor_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>creditor_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="creditor_id"                data-endpoint="GETapi-v1-bnpl-creditors--creditor_id-"
               value="voluptas"
               data-component="url">
    <br>
<p>The ID of the creditor. Example: <code>voluptas</code></p>
            </div>
                    </form>

                    <h2 id="creditors-PATCHapi-v1-bnpl-creditors--creditor_id--update">Update creditor record.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-bnpl-creditors--creditor_id--update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/creditors/fuga/update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nobis",
    "acronym": "ratione",
    "official_name": "incidunt",
    "website": "aut",
    "logo": "voluptatum",
    "country_id": 2,
    "phone_code": "amet",
    "phone": "enim",
    "category": "voluptate",
    "email": "nitzsche.maxwell@example.org",
    "conflict_resolution_email": "torphy.chet@example.com",
    "conflict_resolution_phone_code": "nemo",
    "conflict_resolution_phone": "quia",
    "entity": "individual",
    "entity_category": "government"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-bnpl-creditors--creditor_id--update">
</span>
<span id="execution-results-PATCHapi-v1-bnpl-creditors--creditor_id--update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-bnpl-creditors--creditor_id--update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-bnpl-creditors--creditor_id--update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-bnpl-creditors--creditor_id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-bnpl-creditors--creditor_id--update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-bnpl-creditors--creditor_id--update" data-method="PATCH"
      data-path="api/v1/bnpl/creditors/{creditor_id}/update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-bnpl-creditors--creditor_id--update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-bnpl-creditors--creditor_id--update"
                    onclick="tryItOut('PATCHapi-v1-bnpl-creditors--creditor_id--update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-bnpl-creditors--creditor_id--update"
                    onclick="cancelTryOut('PATCHapi-v1-bnpl-creditors--creditor_id--update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-bnpl-creditors--creditor_id--update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/bnpl/creditors/{creditor_id}/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>creditor_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="creditor_id"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="fuga"
               data-component="url">
    <br>
<p>The ID of the creditor. Example: <code>fuga</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="nobis"
               data-component="body">
    <br>
<p>Example: <code>nobis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>acronym</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="acronym"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="ratione"
               data-component="body">
    <br>
<p>Example: <code>ratione</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>official_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="official_name"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="incidunt"
               data-component="body">
    <br>
<p>Example: <code>incidunt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="website"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="aut"
               data-component="body">
    <br>
<p>Example: <code>aut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="voluptatum"
               data-component="body">
    <br>
<p>Example: <code>voluptatum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="country_id"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="2"
               data-component="body">
    <br>
<p>Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_code"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="amet"
               data-component="body">
    <br>
<p>Example: <code>amet</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="enim"
               data-component="body">
    <br>
<p>Example: <code>enim</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="voluptate"
               data-component="body">
    <br>
<p>Example: <code>voluptate</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="nitzsche.maxwell@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>nitzsche.maxwell@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_email"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="torphy.chet@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>torphy.chet@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_phone_code"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="nemo"
               data-component="body">
    <br>
<p>Example: <code>nemo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_phone"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="quia"
               data-component="body">
    <br>
<p>Example: <code>quia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entity</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="entity"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="individual"
               data-component="body">
    <br>
<p>Example: <code>individual</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>individual</code></li> <li><code>institution</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entity_category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="entity_category"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value="government"
               data-component="body">
    <br>
<p>Example: <code>government</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>private</code></li> <li><code>government</code></li> <li><code>individual</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>customization</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="customization"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="meta"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--update"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="creditors-DELETEapi-v1-bnpl-creditors--creditor_id--delete">Delete creditor record.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-bnpl-creditors--creditor_id--delete">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/creditors/odit/delete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-bnpl-creditors--creditor_id--delete">
</span>
<span id="execution-results-DELETEapi-v1-bnpl-creditors--creditor_id--delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-bnpl-creditors--creditor_id--delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-bnpl-creditors--creditor_id--delete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-bnpl-creditors--creditor_id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-bnpl-creditors--creditor_id--delete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-bnpl-creditors--creditor_id--delete" data-method="DELETE"
      data-path="api/v1/bnpl/creditors/{creditor_id}/delete"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-bnpl-creditors--creditor_id--delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-bnpl-creditors--creditor_id--delete"
                    onclick="tryItOut('DELETEapi-v1-bnpl-creditors--creditor_id--delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-bnpl-creditors--creditor_id--delete"
                    onclick="cancelTryOut('DELETEapi-v1-bnpl-creditors--creditor_id--delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-bnpl-creditors--creditor_id--delete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/bnpl/creditors/{creditor_id}/delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-bnpl-creditors--creditor_id--delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-bnpl-creditors--creditor_id--delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>creditor_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="creditor_id"                data-endpoint="DELETEapi-v1-bnpl-creditors--creditor_id--delete"
               value="odit"
               data-component="url">
    <br>
<p>The ID of the creditor. Example: <code>odit</code></p>
            </div>
                    </form>

                                <h2 id="creditors-conditions">Conditions</h2>
                                                    <h2 id="creditors-GETapi-v1-bnpl-creditors--creditor_id--conditions">fetch Creditor Conditions</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-creditors--creditor_id--conditions">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/creditors/ad/conditions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-creditors--creditor_id--conditions">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-creditors--creditor_id--conditions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-creditors--creditor_id--conditions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-creditors--creditor_id--conditions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-creditors--creditor_id--conditions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-creditors--creditor_id--conditions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-creditors--creditor_id--conditions" data-method="GET"
      data-path="api/v1/bnpl/creditors/{creditor_id}/conditions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-creditors--creditor_id--conditions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-creditors--creditor_id--conditions"
                    onclick="tryItOut('GETapi-v1-bnpl-creditors--creditor_id--conditions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-creditors--creditor_id--conditions"
                    onclick="cancelTryOut('GETapi-v1-bnpl-creditors--creditor_id--conditions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-creditors--creditor_id--conditions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/creditors/{creditor_id}/conditions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-creditors--creditor_id--conditions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-creditors--creditor_id--conditions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>creditor_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="creditor_id"                data-endpoint="GETapi-v1-bnpl-creditors--creditor_id--conditions"
               value="ad"
               data-component="url">
    <br>
<p>The ID of the creditor. Example: <code>ad</code></p>
            </div>
                    </form>

                    <h2 id="creditors-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update">Update Creditor Conditions</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/creditors/est/conditions/update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "creditor_id": 4,
    "tier": 12,
    "base_url": "http:\/\/wolf.biz\/",
    "callback_url": "http:\/\/dicki.com\/minus-dignissimos-consequatur-ullam-quaerat-est",
    "connection_type": "id",
    "payment_mode": "qui",
    "recovery_mode": "id",
    "recovery_channel": "est",
    "maximum_credit_installments": 3,
    "minimum_credit_installments": 14,
    "operating_account_number": "nobis",
    "operating_account_id": "ut",
    "conflict_resolution_email": "roxane.cruickshank@example.net",
    "terms_and_conditions": "voluptas",
    "active": false
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update">
</span>
<span id="execution-results-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update" data-method="PATCH"
      data-path="api/v1/bnpl/creditors/{creditor_id}/conditions/update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
                    onclick="tryItOut('PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
                    onclick="cancelTryOut('PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/bnpl/creditors/{creditor_id}/conditions/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>creditor_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="creditor_id"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="est"
               data-component="url">
    <br>
<p>The ID of the creditor. Example: <code>est</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>creditor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="creditor_id"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="4"
               data-component="body">
    <br>
<p>Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tier</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="tier"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="12"
               data-component="body">
    <br>
<p>Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>base_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="base_url"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="http://wolf.biz/"
               data-component="body">
    <br>
<p>Example: <code>http://wolf.biz/</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>callback_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="callback_url"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="http://dicki.com/minus-dignissimos-consequatur-ullam-quaerat-est"
               data-component="body">
    <br>
<p>Example: <code>http://dicki.com/minus-dignissimos-consequatur-ullam-quaerat-est</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>connection_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="connection_type"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="id"
               data-component="body">
    <br>
<p>Example: <code>id</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_mode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="payment_mode"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="qui"
               data-component="body">
    <br>
<p>Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recovery_mode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recovery_mode"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="id"
               data-component="body">
    <br>
<p>Example: <code>id</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recovery_channel</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recovery_channel"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="est"
               data-component="body">
    <br>
<p>Example: <code>est</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>maximum_credit_installments</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="maximum_credit_installments"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="3"
               data-component="body">
    <br>
<p>Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>minimum_credit_installments</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="minimum_credit_installments"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="14"
               data-component="body">
    <br>
<p>Example: <code>14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>operating_account_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="operating_account_number"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="nobis"
               data-component="body">
    <br>
<p>Example: <code>nobis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>operating_account_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="operating_account_id"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_email"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="roxane.cruickshank@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>roxane.cruickshank@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>terms_and_conditions</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="terms_and_conditions"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value="voluptas"
               data-component="body">
    <br>
<p>Example: <code>voluptas</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="meta"                data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update" style="display: none">
            <input type="radio" name="active"
                   value="true"
                   data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update" style="display: none">
            <input type="radio" name="active"
                   value="false"
                   data-endpoint="PATCHapi-v1-bnpl-creditors--creditor_id--conditions-update"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                <h1 id="credits">Credits</h1>

    

                                <h2 id="credits-GETapi-v1-bnpl-credits">Fetch all Credits.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-credits">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/credits"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-credits">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-credits" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-credits"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-credits"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-credits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-credits">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-credits" data-method="GET"
      data-path="api/v1/bnpl/credits"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-credits', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-credits"
                    onclick="tryItOut('GETapi-v1-bnpl-credits');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-credits"
                    onclick="cancelTryOut('GETapi-v1-bnpl-credits');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-credits"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/credits</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-credits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-credits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="credits-GETapi-v1-bnpl-credits--credit_id-">Get a credit record.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-credits--credit_id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/credits/sint"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-credits--credit_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-credits--credit_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-credits--credit_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-credits--credit_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-credits--credit_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-credits--credit_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-credits--credit_id-" data-method="GET"
      data-path="api/v1/bnpl/credits/{credit_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-credits--credit_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-credits--credit_id-"
                    onclick="tryItOut('GETapi-v1-bnpl-credits--credit_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-credits--credit_id-"
                    onclick="cancelTryOut('GETapi-v1-bnpl-credits--credit_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-credits--credit_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/credits/{credit_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-credits--credit_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-credits--credit_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>credit_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="credit_id"                data-endpoint="GETapi-v1-bnpl-credits--credit_id-"
               value="sint"
               data-component="url">
    <br>
<p>The ID of the credit. Example: <code>sint</code></p>
            </div>
                    </form>

                    <h2 id="credits-GETapi-v1-bnpl-credits-manage-user">Fetch user active Credits.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-credits-manage-user">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/credits/manage/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-credits-manage-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-credits-manage-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-credits-manage-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-credits-manage-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-credits-manage-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-credits-manage-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-credits-manage-user" data-method="GET"
      data-path="api/v1/bnpl/credits/manage/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-credits-manage-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-credits-manage-user"
                    onclick="tryItOut('GETapi-v1-bnpl-credits-manage-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-credits-manage-user"
                    onclick="cancelTryOut('GETapi-v1-bnpl-credits-manage-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-credits-manage-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/credits/manage/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-credits-manage-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-credits-manage-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="credits-POSTapi-v1-bnpl-credits-requests">Initiate Credit request.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bnpl-credits-requests">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/credits/requests"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "creditor_id": 6,
    "invoice_id": 9,
    "amount": 452,
    "number_of_installments": 12
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-bnpl-credits-requests">
</span>
<span id="execution-results-POSTapi-v1-bnpl-credits-requests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-bnpl-credits-requests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-bnpl-credits-requests"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-bnpl-credits-requests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-bnpl-credits-requests">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-bnpl-credits-requests" data-method="POST"
      data-path="api/v1/bnpl/credits/requests"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-bnpl-credits-requests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-bnpl-credits-requests"
                    onclick="tryItOut('POSTapi-v1-bnpl-credits-requests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-bnpl-credits-requests"
                    onclick="cancelTryOut('POSTapi-v1-bnpl-credits-requests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-bnpl-credits-requests"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/bnpl/credits/requests</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-bnpl-credits-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-bnpl-credits-requests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>creditor_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="creditor_id"                data-endpoint="POSTapi-v1-bnpl-credits-requests"
               value="6"
               data-component="body">
    <br>
<p>Example: <code>6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="invoice_id"                data-endpoint="POSTapi-v1-bnpl-credits-requests"
               value="9"
               data-component="body">
    <br>
<p>Example: <code>9</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="POSTapi-v1-bnpl-credits-requests"
               value="452"
               data-component="body">
    <br>
<p>Must be at least 1000. Example: <code>452</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>number_of_installments</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="number_of_installments"                data-endpoint="POSTapi-v1-bnpl-credits-requests"
               value="12"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>12</code></p>
        </div>
        </form>

                    <h2 id="credits-POSTapi-v1-bnpl-credits-requests-complete">Complete Credit request.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bnpl-credits-requests-complete">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/credits/requests/complete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "credit_request_id": 9,
    "terms_and_conditions": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-bnpl-credits-requests-complete">
</span>
<span id="execution-results-POSTapi-v1-bnpl-credits-requests-complete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-bnpl-credits-requests-complete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-bnpl-credits-requests-complete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-bnpl-credits-requests-complete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-bnpl-credits-requests-complete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-bnpl-credits-requests-complete" data-method="POST"
      data-path="api/v1/bnpl/credits/requests/complete"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-bnpl-credits-requests-complete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-bnpl-credits-requests-complete"
                    onclick="tryItOut('POSTapi-v1-bnpl-credits-requests-complete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-bnpl-credits-requests-complete"
                    onclick="cancelTryOut('POSTapi-v1-bnpl-credits-requests-complete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-bnpl-credits-requests-complete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/bnpl/credits/requests/complete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-bnpl-credits-requests-complete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-bnpl-credits-requests-complete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>credit_request_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="credit_request_id"                data-endpoint="POSTapi-v1-bnpl-credits-requests-complete"
               value="9"
               data-component="body">
    <br>
<p>Example: <code>9</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>terms_and_conditions</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-v1-bnpl-credits-requests-complete" style="display: none">
            <input type="radio" name="terms_and_conditions"
                   value="true"
                   data-endpoint="POSTapi-v1-bnpl-credits-requests-complete"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-bnpl-credits-requests-complete" style="display: none">
            <input type="radio" name="terms_and_conditions"
                   value="false"
                   data-endpoint="POSTapi-v1-bnpl-credits-requests-complete"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="credits-GETapi-v1-bnpl-credits-requests--credit_request_id--status">Get Credit request status.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-credits-requests--credit_request_id--status">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/credits/requests/corporis/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-credits-requests--credit_request_id--status">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-credits-requests--credit_request_id--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-credits-requests--credit_request_id--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-credits-requests--credit_request_id--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-credits-requests--credit_request_id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-credits-requests--credit_request_id--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-credits-requests--credit_request_id--status" data-method="GET"
      data-path="api/v1/bnpl/credits/requests/{credit_request_id}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-credits-requests--credit_request_id--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-credits-requests--credit_request_id--status"
                    onclick="tryItOut('GETapi-v1-bnpl-credits-requests--credit_request_id--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-credits-requests--credit_request_id--status"
                    onclick="cancelTryOut('GETapi-v1-bnpl-credits-requests--credit_request_id--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-credits-requests--credit_request_id--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/credits/requests/{credit_request_id}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-credits-requests--credit_request_id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-credits-requests--credit_request_id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>credit_request_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="credit_request_id"                data-endpoint="GETapi-v1-bnpl-credits-requests--credit_request_id--status"
               value="corporis"
               data-component="url">
    <br>
<p>The ID of the credit request. Example: <code>corporis</code></p>
            </div>
                    </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-documentation">Display Swagger API page.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;title&gt;API Gateway&lt;/title&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;https://visaronigeria.test/docs/asset/swagger-ui.css?v=3a04df02ea8c4d94f9704dc72c372842&quot;&gt;
    &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;https://visaronigeria.test/docs/asset/favicon-32x32.png?v=40d4f2c38d1cd854ad463f16373cbcb6&quot; sizes=&quot;32x32&quot;/&gt;
    &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;https://visaronigeria.test/docs/asset/favicon-16x16.png?v=f0ae831196d55d8f4115b6c5e8ec5384&quot; sizes=&quot;16x16&quot;/&gt;
    &lt;style&gt;
    html
    {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
    }
    *,
    *:before,
    *:after
    {
        box-sizing: inherit;
    }

    body {
      margin:0;
      background: #fafafa;
    }
    &lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;div id=&quot;swagger-ui&quot;&gt;&lt;/div&gt;

&lt;script src=&quot;https://visaronigeria.test/docs/asset/swagger-ui-bundle.js?v=efe5450341156cb97e2b848fc0b0b89b&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://visaronigeria.test/docs/asset/swagger-ui-standalone-preset.js?v=50c83b2cf08d97b626ae1aff72aa162b&quot;&gt;&lt;/script&gt;
&lt;script&gt;
    window.onload = function() {
        // Build a system
        const ui = SwaggerUIBundle({
            dom_id: &#039;#swagger-ui&#039;,
            url: &quot;https://visaronigeria.test/docs/api-docs.json&quot;,
            operationsSorter: null,
            configUrl: null,
            validatorUrl: null,
            oauth2RedirectUrl: &quot;https://visaronigeria.test/api/oauth2-callback&quot;,

            requestInterceptor: function(request) {
                request.headers[&#039;X-CSRF-TOKEN&#039;] = &#039;&#039;;
                return request;
            },

            presets: [
                SwaggerUIBundle.presets.apis,
                SwaggerUIStandalonePreset
            ],

            plugins: [
                SwaggerUIBundle.plugins.DownloadUrl
            ],

            layout: &quot;StandaloneLayout&quot;,
            docExpansion : &quot;none&quot;,
            deepLinking: true,
            filter: true,
            persistAuthorization: &quot;false&quot;,

        })

        window.ui = ui

            }
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-oauth2-callback">Display Oauth2 callback pages.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;head&gt;
    &lt;title&gt;Swagger UI: OAuth2 Redirect&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
    &#039;use strict&#039;;
    function run () {
        var oauth2 = window.opener.swaggerUIRedirectOauth2;
        var sentState = oauth2.state;
        var redirectUrl = oauth2.redirectUrl;
        var isValid, qp, arr;

        if (/code|token|error/.test(window.location.hash)) {
            qp = window.location.hash.substring(1).replace(&#039;?&#039;, &#039;&amp;&#039;);
        } else {
            qp = location.search.substring(1);
        }

        arr = qp.split(&quot;&amp;&quot;);
        arr.forEach(function (v,i,_arr) { _arr[i] = &#039;&quot;&#039; + v.replace(&#039;=&#039;, &#039;&quot;:&quot;&#039;) + &#039;&quot;&#039;;});
        qp = qp ? JSON.parse(&#039;{&#039; + arr.join() + &#039;}&#039;,
                function (key, value) {
                    return key === &quot;&quot; ? value : decodeURIComponent(value);
                }
        ) : {};

        isValid = qp.state === sentState;

        if ((
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;accessCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorizationCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorization_code&quot;
        ) &amp;&amp; !oauth2.auth.code) {
            if (!isValid) {
                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;warning&quot;,
                    message: &quot;Authorization may be unsafe, passed state was changed in server. The passed state wasn&#039;t returned from auth server.&quot;
                });
            }

            if (qp.code) {
                delete oauth2.state;
                oauth2.auth.code = qp.code;
                oauth2.callback({auth: oauth2.auth, redirectUrl: redirectUrl});
            } else {
                let oauthErrorMsg;
                if (qp.error) {
                    oauthErrorMsg = &quot;[&quot;+qp.error+&quot;]: &quot; +
                        (qp.error_description ? qp.error_description+ &quot;. &quot; : &quot;no accessCode received from the server. &quot;) +
                        (qp.error_uri ? &quot;More info: &quot;+qp.error_uri : &quot;&quot;);
                }

                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;error&quot;,
                    message: oauthErrorMsg || &quot;[Authorization failed]: no accessCode received from the server.&quot;
                });
            }
        } else {
            oauth2.callback({auth: oauth2.auth, token: qp, isValid: isValid, redirectUrl: redirectUrl});
        }
        window.close();
    }

    if (document.readyState !== &#039;loading&#039;) {
        run();
    } else {
        document.addEventListener(&#039;DOMContentLoaded&#039;, function () {
            run();
        });
    }
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-register">POST api/v1/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-register">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "rosenbaum.enola@example.net",
    "password": "doloribus"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-register">
</span>
<span id="execution-results-POSTapi-v1-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-register" data-method="POST"
      data-path="api/v1/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-register"
                    onclick="tryItOut('POSTapi-v1-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-register"
                    onclick="cancelTryOut('POSTapi-v1-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-register"
               value="rosenbaum.enola@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>rosenbaum.enola@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-register"
               value="doloribus"
               data-component="body">
    <br>
<p>Example: <code>doloribus</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-login">Login user.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-login">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "alarkin@example.org",
    "password": "impedit"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-login">
</span>
<span id="execution-results-POSTapi-v1-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-login" data-method="POST"
      data-path="api/v1/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-login"
                    onclick="tryItOut('POSTapi-v1-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-login"
                    onclick="cancelTryOut('POSTapi-v1-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-login"
               value="alarkin@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>alarkin@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-login"
               value="impedit"
               data-component="body">
    <br>
<p>Example: <code>impedit</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-refresh-token">POST api/v1/refresh-token</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-refresh-token">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/refresh-token"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-refresh-token">
</span>
<span id="execution-results-POSTapi-v1-refresh-token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-refresh-token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-refresh-token"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-refresh-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-refresh-token">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-refresh-token" data-method="POST"
      data-path="api/v1/refresh-token"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-refresh-token', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-refresh-token"
                    onclick="tryItOut('POSTapi-v1-refresh-token');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-refresh-token"
                    onclick="cancelTryOut('POSTapi-v1-refresh-token');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-refresh-token"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/refresh-token</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-refresh-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-refresh-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-region_list--country_key-">GET api/v1/region_list/{country_key}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-region_list--country_key-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/region_list/incidunt"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-region_list--country_key-">
            <blockquote>
            <p>Example response (406):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Invalid Country Key&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-region_list--country_key-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-region_list--country_key-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-region_list--country_key-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-region_list--country_key-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-region_list--country_key-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-region_list--country_key-" data-method="GET"
      data-path="api/v1/region_list/{country_key}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-region_list--country_key-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-region_list--country_key-"
                    onclick="tryItOut('GETapi-v1-region_list--country_key-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-region_list--country_key-"
                    onclick="cancelTryOut('GETapi-v1-region_list--country_key-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-region_list--country_key-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/region_list/{country_key}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-region_list--country_key-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-region_list--country_key-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>country_key</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_key"                data-endpoint="GETapi-v1-region_list--country_key-"
               value="incidunt"
               data-component="url">
    <br>
<p>Example: <code>incidunt</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-country_list">GET api/v1/country_list</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-country_list">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/country_list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-country_list">
            <blockquote>
            <p>Example response (202):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Successful&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 6,
            &quot;country_key&quot;: &quot;AD&quot;,
            &quot;public_id&quot;: &quot;ecf69ae2-6d8a-426b-ba44-2eb3a7734ca8&quot;,
            &quot;name&quot;: &quot;Andorra&quot;,
            &quot;capital&quot;: &quot;Andorra la Vella&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1e9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇩&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+376&quot;,
            &quot;code&quot;: &quot;AD&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 229,
            &quot;country_key&quot;: &quot;AE&quot;,
            &quot;public_id&quot;: &quot;d38c58c4-715d-4a9e-a16d-172b2d0b8fdd&quot;,
            &quot;name&quot;: &quot;United Arab Emirates&quot;,
            &quot;capital&quot;: &quot;Abu Dhabi&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇪&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+971&quot;,
            &quot;code&quot;: &quot;AE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 1,
            &quot;country_key&quot;: &quot;AF&quot;,
            &quot;public_id&quot;: &quot;37f07e23-7f71-4dd1-befe-aa12a98ea316&quot;,
            &quot;name&quot;: &quot;Afghanistan&quot;,
            &quot;capital&quot;: &quot;Kabul&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1eb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇫&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+93&quot;,
            &quot;code&quot;: &quot;AF&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 10,
            &quot;country_key&quot;: &quot;AG&quot;,
            &quot;public_id&quot;: &quot;2cffb43f-76e3-49d1-be95-bbea146b706c&quot;,
            &quot;name&quot;: &quot;Antigua and Barbuda&quot;,
            &quot;capital&quot;: &quot;St. John&#039;s&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇬&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1268&quot;,
            &quot;code&quot;: &quot;AG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 8,
            &quot;country_key&quot;: &quot;AI&quot;,
            &quot;public_id&quot;: &quot;63e3a3c9-3267-44bd-b528-fdd683e7e579&quot;,
            &quot;name&quot;: &quot;Anguilla&quot;,
            &quot;capital&quot;: &quot;The Valley&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇮&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1264&quot;,
            &quot;code&quot;: &quot;AI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;country_key&quot;: &quot;AL&quot;,
            &quot;public_id&quot;: &quot;7c4a9c41-5f8c-4a69-9b8c-1f02a8a30844&quot;,
            &quot;name&quot;: &quot;Albania&quot;,
            &quot;capital&quot;: &quot;Tirana&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇱&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+355&quot;,
            &quot;code&quot;: &quot;AL&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 12,
            &quot;country_key&quot;: &quot;AM&quot;,
            &quot;public_id&quot;: &quot;4e7df1e9-6649-4cf4-8636-54b4d67ef851&quot;,
            &quot;name&quot;: &quot;Armenia&quot;,
            &quot;capital&quot;: &quot;Yerevan&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇲&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+374&quot;,
            &quot;code&quot;: &quot;AM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 153,
            &quot;country_key&quot;: &quot;AN&quot;,
            &quot;public_id&quot;: &quot;70549e51-122b-4f74-9e06-c6a058bdbd75&quot;,
            &quot;name&quot;: &quot;Netherlands Antilles&quot;,
            &quot;capital&quot;: null,
            &quot;flag&quot;: &quot;🇳🇱&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇱&quot;,
            &quot;continent&quot;: null,
            &quot;phone_code&quot;: &quot;+599&quot;,
            &quot;code&quot;: &quot;AN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;country_key&quot;: &quot;AO&quot;,
            &quot;public_id&quot;: &quot;ef845b40-3a4d-4f89-8db3-ad5c7fcfc1cd&quot;,
            &quot;name&quot;: &quot;Angola&quot;,
            &quot;capital&quot;: &quot;Luanda&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇴&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+244&quot;,
            &quot;code&quot;: &quot;AO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 9,
            &quot;country_key&quot;: &quot;AQ&quot;,
            &quot;public_id&quot;: &quot;6d6d7a54-a1dd-479d-9ee8-ffd7faf7f52b&quot;,
            &quot;name&quot;: &quot;Antarctica&quot;,
            &quot;capital&quot;: null,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇶&quot;,
            &quot;continent&quot;: null,
            &quot;phone_code&quot;: &quot;+672&quot;,
            &quot;code&quot;: &quot;AQ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 11,
            &quot;country_key&quot;: &quot;AR&quot;,
            &quot;public_id&quot;: &quot;735c6352-8049-4c2a-9e3f-4b8a28532877&quot;,
            &quot;name&quot;: &quot;Argentina&quot;,
            &quot;capital&quot;: &quot;Buenos Aires&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇷&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+54&quot;,
            &quot;code&quot;: &quot;AR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;country_key&quot;: &quot;AS&quot;,
            &quot;public_id&quot;: &quot;c57e045b-8559-42a8-b9cc-4532436a682d&quot;,
            &quot;name&quot;: &quot;AmericanSamoa&quot;,
            &quot;capital&quot;: &quot;Pago Pago&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇸&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+1684&quot;,
            &quot;code&quot;: &quot;AS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 15,
            &quot;country_key&quot;: &quot;AT&quot;,
            &quot;public_id&quot;: &quot;ef28a9af-d9a5-4ea8-a76f-4a5f118b2182&quot;,
            &quot;name&quot;: &quot;Austria&quot;,
            &quot;capital&quot;: &quot;Vienna&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇹&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+43&quot;,
            &quot;code&quot;: &quot;AT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 14,
            &quot;country_key&quot;: &quot;AU&quot;,
            &quot;public_id&quot;: &quot;c51c640f-5101-48d2-8760-ca8fdcce46b0&quot;,
            &quot;name&quot;: &quot;Australia&quot;,
            &quot;capital&quot;: &quot;Canberra&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1fa.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇺&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+61&quot;,
            &quot;code&quot;: &quot;AU&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 13,
            &quot;country_key&quot;: &quot;AW&quot;,
            &quot;public_id&quot;: &quot;00d29c7e-1c7f-43b2-b270-827973133807&quot;,
            &quot;name&quot;: &quot;Aruba&quot;,
            &quot;capital&quot;: &quot;Oranjestad&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1fc.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇼&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+297&quot;,
            &quot;code&quot;: &quot;AW&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;country_key&quot;: &quot;AX&quot;,
            &quot;public_id&quot;: &quot;aa32b86a-8bd4-4fe1-a2fa-8cd2bfbb0c67&quot;,
            &quot;name&quot;: &quot;Aland Islands&quot;,
            &quot;capital&quot;: &quot;Mariehamn&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1fd.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇽&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+358&quot;,
            &quot;code&quot;: &quot;AX&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 16,
            &quot;country_key&quot;: &quot;AZ&quot;,
            &quot;public_id&quot;: &quot;e78b6093-ccf5-447e-9ea4-cc968bad9ea2&quot;,
            &quot;name&quot;: &quot;Azerbaijan&quot;,
            &quot;capital&quot;: &quot;Baku&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇦🇿&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+994&quot;,
            &quot;code&quot;: &quot;AZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 28,
            &quot;country_key&quot;: &quot;BA&quot;,
            &quot;public_id&quot;: &quot;a99285ed-8b55-425b-bb41-ca643e02ba12&quot;,
            &quot;name&quot;: &quot;Bosnia and Herzegovina&quot;,
            &quot;capital&quot;: &quot;Sarajevo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇦&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+387&quot;,
            &quot;code&quot;: &quot;BA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 20,
            &quot;country_key&quot;: &quot;BB&quot;,
            &quot;public_id&quot;: &quot;13b895b1-623c-45a7-8b18-a3903248af4f&quot;,
            &quot;name&quot;: &quot;Barbados&quot;,
            &quot;capital&quot;: &quot;Bridgetown&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1e7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇧&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1246&quot;,
            &quot;code&quot;: &quot;BB&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 19,
            &quot;country_key&quot;: &quot;BD&quot;,
            &quot;public_id&quot;: &quot;a4dd0c1f-5206-4f46-88f9-525d439f1389&quot;,
            &quot;name&quot;: &quot;Bangladesh&quot;,
            &quot;capital&quot;: &quot;Dhaka&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1e9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇩&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+880&quot;,
            &quot;code&quot;: &quot;BD&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 22,
            &quot;country_key&quot;: &quot;BE&quot;,
            &quot;public_id&quot;: &quot;c579fa90-8bf6-4541-814f-7bf2dd7893be&quot;,
            &quot;name&quot;: &quot;Belgium&quot;,
            &quot;capital&quot;: &quot;Brussels&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇪&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+32&quot;,
            &quot;code&quot;: &quot;BE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 34,
            &quot;country_key&quot;: &quot;BF&quot;,
            &quot;public_id&quot;: &quot;aa4778c0-5ca6-44e6-9e17-ab73a64e9d9a&quot;,
            &quot;name&quot;: &quot;Burkina Faso&quot;,
            &quot;capital&quot;: &quot;Ouagadougou&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1eb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇫&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+226&quot;,
            &quot;code&quot;: &quot;BF&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 33,
            &quot;country_key&quot;: &quot;BG&quot;,
            &quot;public_id&quot;: &quot;6992ff53-431a-4ba7-88f3-0323abd44e39&quot;,
            &quot;name&quot;: &quot;Bulgaria&quot;,
            &quot;capital&quot;: &quot;Sofia&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇬&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+359&quot;,
            &quot;code&quot;: &quot;BG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 18,
            &quot;country_key&quot;: &quot;BH&quot;,
            &quot;public_id&quot;: &quot;9d00903b-e376-4335-83e1-2d4bc9cf5bc5&quot;,
            &quot;name&quot;: &quot;Bahrain&quot;,
            &quot;capital&quot;: &quot;Manama&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ed.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇭&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+973&quot;,
            &quot;code&quot;: &quot;BH&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 35,
            &quot;country_key&quot;: &quot;BI&quot;,
            &quot;public_id&quot;: &quot;149dbe8a-120c-4b42-a279-7ab5a5f9a982&quot;,
            &quot;name&quot;: &quot;Burundi&quot;,
            &quot;capital&quot;: &quot;Bujumbura&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇮&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+257&quot;,
            &quot;code&quot;: &quot;BI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 24,
            &quot;country_key&quot;: &quot;BJ&quot;,
            &quot;public_id&quot;: &quot;13dc54a5-5869-4165-8c25-b8cc0f24b025&quot;,
            &quot;name&quot;: &quot;Benin&quot;,
            &quot;capital&quot;: &quot;Porto-Novo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ef.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇯&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+229&quot;,
            &quot;code&quot;: &quot;BJ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 181,
            &quot;country_key&quot;: &quot;BL&quot;,
            &quot;public_id&quot;: &quot;da6f8c7a-e962-4ea8-bd83-c8c2447dc4bc&quot;,
            &quot;name&quot;: &quot;Saint Barthelemy&quot;,
            &quot;capital&quot;: &quot;Gustavia&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇱&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+590&quot;,
            &quot;code&quot;: &quot;BL&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 25,
            &quot;country_key&quot;: &quot;BM&quot;,
            &quot;public_id&quot;: &quot;5402d6fa-5930-400a-8261-e1128ea80a7c&quot;,
            &quot;name&quot;: &quot;Bermuda&quot;,
            &quot;capital&quot;: &quot;Hamilton&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇲&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1441&quot;,
            &quot;code&quot;: &quot;BM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 32,
            &quot;country_key&quot;: &quot;BN&quot;,
            &quot;public_id&quot;: &quot;566c4eaf-2234-4745-9737-ca2d75272423&quot;,
            &quot;name&quot;: &quot;Brunei Darussalam&quot;,
            &quot;capital&quot;: &quot;Bandar Seri Begawan&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇳&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+673&quot;,
            &quot;code&quot;: &quot;BN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 27,
            &quot;country_key&quot;: &quot;BO&quot;,
            &quot;public_id&quot;: &quot;60610907-c771-4909-8dff-f8c67b7c5af4&quot;,
            &quot;name&quot;: &quot;Bolivia, Plurinational State of&quot;,
            &quot;capital&quot;: &quot;Sucre&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇴&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+591&quot;,
            &quot;code&quot;: &quot;BO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 30,
            &quot;country_key&quot;: &quot;BR&quot;,
            &quot;public_id&quot;: &quot;f126d0e5-d925-46df-8057-07502f7725b9&quot;,
            &quot;name&quot;: &quot;Brazil&quot;,
            &quot;capital&quot;: &quot;Bras&iacute;lia&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇷&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+55&quot;,
            &quot;code&quot;: &quot;BR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 17,
            &quot;country_key&quot;: &quot;BS&quot;,
            &quot;public_id&quot;: &quot;0b22d74e-4b00-47d9-9f39-246bbf412f33&quot;,
            &quot;name&quot;: &quot;Bahamas&quot;,
            &quot;capital&quot;: &quot;Nassau&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇸&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1242&quot;,
            &quot;code&quot;: &quot;BS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 26,
            &quot;country_key&quot;: &quot;BT&quot;,
            &quot;public_id&quot;: &quot;ddc92bd0-050d-46b3-b91a-91c7e4e87441&quot;,
            &quot;name&quot;: &quot;Bhutan&quot;,
            &quot;capital&quot;: &quot;Thimphu&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇹&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+975&quot;,
            &quot;code&quot;: &quot;BT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 29,
            &quot;country_key&quot;: &quot;BW&quot;,
            &quot;public_id&quot;: &quot;3f7a1a3d-e2e3-4282-a4fc-00d6b949d810&quot;,
            &quot;name&quot;: &quot;Botswana&quot;,
            &quot;capital&quot;: &quot;Gaborone&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1fc.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇼&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+267&quot;,
            &quot;code&quot;: &quot;BW&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 21,
            &quot;country_key&quot;: &quot;BY&quot;,
            &quot;public_id&quot;: &quot;edcb57b5-fa48-42ad-b08f-c139e568718d&quot;,
            &quot;name&quot;: &quot;Belarus&quot;,
            &quot;capital&quot;: &quot;Minsk&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1fe.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇾&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+375&quot;,
            &quot;code&quot;: &quot;BY&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 23,
            &quot;country_key&quot;: &quot;BZ&quot;,
            &quot;public_id&quot;: &quot;a8926f03-5f46-414d-9d6a-c10a4b7005cc&quot;,
            &quot;name&quot;: &quot;Belize&quot;,
            &quot;capital&quot;: &quot;Belmopan&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇧🇿&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+501&quot;,
            &quot;code&quot;: &quot;BZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 38,
            &quot;country_key&quot;: &quot;CA&quot;,
            &quot;public_id&quot;: &quot;4be3dd9a-09cd-4e78-91ba-d9561f52626b&quot;,
            &quot;name&quot;: &quot;Canada&quot;,
            &quot;capital&quot;: &quot;Ottawa&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇦&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1&quot;,
            &quot;code&quot;: &quot;CA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 46,
            &quot;country_key&quot;: &quot;CC&quot;,
            &quot;public_id&quot;: &quot;832a2d9a-41f7-4522-8c15-7936ac4ff0a4&quot;,
            &quot;name&quot;: &quot;Cocos (Keeling) Islands&quot;,
            &quot;capital&quot;: &quot;West Island&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1e8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇨&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+61&quot;,
            &quot;code&quot;: &quot;CC&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 50,
            &quot;country_key&quot;: &quot;CD&quot;,
            &quot;public_id&quot;: &quot;c64518f5-1b1d-47b4-85a6-283248c9c8ce&quot;,
            &quot;name&quot;: &quot;Congo, The Democratic Republic of the Congo&quot;,
            &quot;capital&quot;: &quot;Kinshasa&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇩&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+243&quot;,
            &quot;code&quot;: &quot;CD&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 41,
            &quot;country_key&quot;: &quot;CF&quot;,
            &quot;public_id&quot;: &quot;44f21454-c45f-446d-83c8-87d73f86aec2&quot;,
            &quot;name&quot;: &quot;Central African Republic&quot;,
            &quot;capital&quot;: &quot;Bangui&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1eb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇫&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+236&quot;,
            &quot;code&quot;: &quot;CF&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 49,
            &quot;country_key&quot;: &quot;CG&quot;,
            &quot;public_id&quot;: &quot;87330847-9ddd-4dfa-ab31-385d99e97ada&quot;,
            &quot;name&quot;: &quot;Congo&quot;,
            &quot;capital&quot;: &quot;Brazzaville&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1e9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇬&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+242&quot;,
            &quot;code&quot;: &quot;CG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 211,
            &quot;country_key&quot;: &quot;CH&quot;,
            &quot;public_id&quot;: &quot;030a03df-4c6f-4b9f-abd4-f9d6916299e4&quot;,
            &quot;name&quot;: &quot;Switzerland&quot;,
            &quot;capital&quot;: &quot;Bern&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ed.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇭&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+41&quot;,
            &quot;code&quot;: &quot;CH&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 53,
            &quot;country_key&quot;: &quot;CI&quot;,
            &quot;public_id&quot;: &quot;853a7eb0-a2cd-4592-98a8-2b491710cd45&quot;,
            &quot;name&quot;: &quot;Cote d&#039;Ivoire&quot;,
            &quot;capital&quot;: &quot;Yamoussoukro&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇮&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+225&quot;,
            &quot;code&quot;: &quot;CI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 51,
            &quot;country_key&quot;: &quot;CK&quot;,
            &quot;public_id&quot;: &quot;7a24e1c2-63e7-4a80-b6fb-17932958657a&quot;,
            &quot;name&quot;: &quot;Cook Islands&quot;,
            &quot;capital&quot;: &quot;Avarua&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f0.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇰&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+682&quot;,
            &quot;code&quot;: &quot;CK&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 43,
            &quot;country_key&quot;: &quot;CL&quot;,
            &quot;public_id&quot;: &quot;57963238-86c0-4c8f-b512-386f8a045d5f&quot;,
            &quot;name&quot;: &quot;Chile&quot;,
            &quot;capital&quot;: &quot;Santiago&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇱&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+56&quot;,
            &quot;code&quot;: &quot;CL&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 37,
            &quot;country_key&quot;: &quot;CM&quot;,
            &quot;public_id&quot;: &quot;35f5de02-2fdd-4e0a-9a79-696b9460e2f6&quot;,
            &quot;name&quot;: &quot;Cameroon&quot;,
            &quot;capital&quot;: &quot;Yaound&eacute;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇲&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+237&quot;,
            &quot;code&quot;: &quot;CM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 44,
            &quot;country_key&quot;: &quot;CN&quot;,
            &quot;public_id&quot;: &quot;3d4ef095-6b0b-4286-aca3-3d610e683748&quot;,
            &quot;name&quot;: &quot;China&quot;,
            &quot;capital&quot;: &quot;Beijing&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇳&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+86&quot;,
            &quot;code&quot;: &quot;CN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 47,
            &quot;country_key&quot;: &quot;CO&quot;,
            &quot;public_id&quot;: &quot;3011e65e-9eda-4f84-be5b-b2af15e2bf82&quot;,
            &quot;name&quot;: &quot;Colombia&quot;,
            &quot;capital&quot;: &quot;Bogot&aacute;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇴&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+57&quot;,
            &quot;code&quot;: &quot;CO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 52,
            &quot;country_key&quot;: &quot;CR&quot;,
            &quot;public_id&quot;: &quot;4590b8e5-cc29-4da6-bc47-e09c2827da17&quot;,
            &quot;name&quot;: &quot;Costa Rica&quot;,
            &quot;capital&quot;: &quot;San Jos&eacute;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇷&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+506&quot;,
            &quot;code&quot;: &quot;CR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 55,
            &quot;country_key&quot;: &quot;CU&quot;,
            &quot;public_id&quot;: &quot;6a7ef019-c407-4fe6-9a08-cec8f01a43ce&quot;,
            &quot;name&quot;: &quot;Cuba&quot;,
            &quot;capital&quot;: &quot;Havana&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fa.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇺&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+53&quot;,
            &quot;code&quot;: &quot;CU&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 39,
            &quot;country_key&quot;: &quot;CV&quot;,
            &quot;public_id&quot;: &quot;7b543cbd-362d-4eae-906d-81d7d8cbb06b&quot;,
            &quot;name&quot;: &quot;Cape Verde&quot;,
            &quot;capital&quot;: &quot;Praia&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇻&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+238&quot;,
            &quot;code&quot;: &quot;CV&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 45,
            &quot;country_key&quot;: &quot;CX&quot;,
            &quot;public_id&quot;: &quot;2a61bf0a-b6b0-4b61-b65c-dc8f2db7a525&quot;,
            &quot;name&quot;: &quot;Christmas Island&quot;,
            &quot;capital&quot;: &quot;Flying Fish Cove&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fd.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇽&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+61&quot;,
            &quot;code&quot;: &quot;CX&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 56,
            &quot;country_key&quot;: &quot;CY&quot;,
            &quot;public_id&quot;: &quot;5b2c500e-1953-4825-b435-5d4d39bc2d21&quot;,
            &quot;name&quot;: &quot;Cyprus&quot;,
            &quot;capital&quot;: &quot;Nicosia&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fe.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇾&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+357&quot;,
            &quot;code&quot;: &quot;CY&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 57,
            &quot;country_key&quot;: &quot;CZ&quot;,
            &quot;public_id&quot;: &quot;ae7f5466-c669-4422-8b82-3b59b367a6b4&quot;,
            &quot;name&quot;: &quot;Czech Republic&quot;,
            &quot;capital&quot;: &quot;Prague&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇨🇿&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+420&quot;,
            &quot;code&quot;: &quot;CZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 79,
            &quot;country_key&quot;: &quot;DE&quot;,
            &quot;public_id&quot;: &quot;ef43a37a-736a-48e3-8858-a80957167e4a&quot;,
            &quot;name&quot;: &quot;Germany&quot;,
            &quot;capital&quot;: &quot;Berlin&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇩🇪&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+49&quot;,
            &quot;code&quot;: &quot;DE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 59,
            &quot;country_key&quot;: &quot;DJ&quot;,
            &quot;public_id&quot;: &quot;fc7d7161-2898-4102-b1a3-35da10e6f9c7&quot;,
            &quot;name&quot;: &quot;Djibouti&quot;,
            &quot;capital&quot;: &quot;Djibouti&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ef.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇩🇯&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+253&quot;,
            &quot;code&quot;: &quot;DJ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 58,
            &quot;country_key&quot;: &quot;DK&quot;,
            &quot;public_id&quot;: &quot;1a06342a-1e37-4e5f-98ef-2dfaa34309de&quot;,
            &quot;name&quot;: &quot;Denmark&quot;,
            &quot;capital&quot;: &quot;Copenhagen&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e9-1f1f0.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇩🇰&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+45&quot;,
            &quot;code&quot;: &quot;DK&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 60,
            &quot;country_key&quot;: &quot;DM&quot;,
            &quot;public_id&quot;: &quot;d0fec97d-6078-498f-a5ff-2b005b813fa2&quot;,
            &quot;name&quot;: &quot;Dominica&quot;,
            &quot;capital&quot;: &quot;Roseau&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e9-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇩🇲&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1767&quot;,
            &quot;code&quot;: &quot;DM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 61,
            &quot;country_key&quot;: &quot;DO&quot;,
            &quot;public_id&quot;: &quot;055b669f-dfce-41a9-b09d-817fcf41754f&quot;,
            &quot;name&quot;: &quot;Dominican Republic&quot;,
            &quot;capital&quot;: &quot;Santo Domingo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e9-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇩🇴&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1849&quot;,
            &quot;code&quot;: &quot;DO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;country_key&quot;: &quot;DZ&quot;,
            &quot;public_id&quot;: &quot;1a96aaf3-3db4-40ad-b7ce-703cf2802473&quot;,
            &quot;name&quot;: &quot;Algeria&quot;,
            &quot;capital&quot;: &quot;Algiers&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇩🇿&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+213&quot;,
            &quot;code&quot;: &quot;DZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 62,
            &quot;country_key&quot;: &quot;EC&quot;,
            &quot;public_id&quot;: &quot;3a855dad-887c-4f85-a200-c69b996c2af5&quot;,
            &quot;name&quot;: &quot;Ecuador&quot;,
            &quot;capital&quot;: &quot;Quito&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ea-1f1e8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇪🇨&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+593&quot;,
            &quot;code&quot;: &quot;EC&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 67,
            &quot;country_key&quot;: &quot;EE&quot;,
            &quot;public_id&quot;: &quot;5fa0cdf1-9277-4934-9ad2-3fe251959294&quot;,
            &quot;name&quot;: &quot;Estonia&quot;,
            &quot;capital&quot;: &quot;Tallinn&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ea-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇪🇪&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+372&quot;,
            &quot;code&quot;: &quot;EE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 63,
            &quot;country_key&quot;: &quot;EG&quot;,
            &quot;public_id&quot;: &quot;b625df9d-97d7-4e36-a959-9549d2ec6d63&quot;,
            &quot;name&quot;: &quot;Egypt&quot;,
            &quot;capital&quot;: &quot;Cairo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ea-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇪🇬&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+20&quot;,
            &quot;code&quot;: &quot;EG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 66,
            &quot;country_key&quot;: &quot;ER&quot;,
            &quot;public_id&quot;: &quot;5aad0d6c-33df-4d40-8066-ae5de47ce9da&quot;,
            &quot;name&quot;: &quot;Eritrea&quot;,
            &quot;capital&quot;: &quot;Asmara&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ea-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇪🇷&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+291&quot;,
            &quot;code&quot;: &quot;ER&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 204,
            &quot;country_key&quot;: &quot;ES&quot;,
            &quot;public_id&quot;: &quot;8e9f9392-0030-4d9d-a361-f9b0cff63274&quot;,
            &quot;name&quot;: &quot;Spain&quot;,
            &quot;capital&quot;: &quot;Madrid&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ea-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇪🇸&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+34&quot;,
            &quot;code&quot;: &quot;ES&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 68,
            &quot;country_key&quot;: &quot;ET&quot;,
            &quot;public_id&quot;: &quot;417b488f-37ac-4bee-a982-3e813dc1c01a&quot;,
            &quot;name&quot;: &quot;Ethiopia&quot;,
            &quot;capital&quot;: &quot;Addis Ababa&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ea-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇪🇹&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+251&quot;,
            &quot;code&quot;: &quot;ET&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 72,
            &quot;country_key&quot;: &quot;FI&quot;,
            &quot;public_id&quot;: &quot;aab7c0b9-efd2-48a2-9a9d-5e6392502ce7&quot;,
            &quot;name&quot;: &quot;Finland&quot;,
            &quot;capital&quot;: &quot;Helsinki&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1eb-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇫🇮&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+358&quot;,
            &quot;code&quot;: &quot;FI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 71,
            &quot;country_key&quot;: &quot;FJ&quot;,
            &quot;public_id&quot;: &quot;ed8c09ba-8d4e-41ae-82a7-659e45b3ec71&quot;,
            &quot;name&quot;: &quot;Fiji&quot;,
            &quot;capital&quot;: &quot;Suva&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1eb-1f1ef.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇫🇯&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+679&quot;,
            &quot;code&quot;: &quot;FJ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 69,
            &quot;country_key&quot;: &quot;FK&quot;,
            &quot;public_id&quot;: &quot;7af2e194-c192-4875-afe5-031dd30bf752&quot;,
            &quot;name&quot;: &quot;Falkland Islands (Malvinas)&quot;,
            &quot;capital&quot;: &quot;Stanley&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f0.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇫🇰&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+500&quot;,
            &quot;code&quot;: &quot;FK&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 140,
            &quot;country_key&quot;: &quot;FM&quot;,
            &quot;public_id&quot;: &quot;2b333738-0148-4f60-8569-40876c79dc7c&quot;,
            &quot;name&quot;: &quot;Micronesia, Federated States of Micronesia&quot;,
            &quot;capital&quot;: &quot;Palikir&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇫🇲&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+691&quot;,
            &quot;code&quot;: &quot;FM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 70,
            &quot;country_key&quot;: &quot;FO&quot;,
            &quot;public_id&quot;: &quot;1fe7c061-45b2-41ee-bb09-6a46ff5b271c&quot;,
            &quot;name&quot;: &quot;Faroe Islands&quot;,
            &quot;capital&quot;: &quot;T&oacute;rshavn&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇫🇴&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+298&quot;,
            &quot;code&quot;: &quot;FO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 73,
            &quot;country_key&quot;: &quot;FR&quot;,
            &quot;public_id&quot;: &quot;739f1e31-bfdc-4002-9f84-6fe73844b2b4&quot;,
            &quot;name&quot;: &quot;France&quot;,
            &quot;capital&quot;: &quot;Paris&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇫🇷&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+33&quot;,
            &quot;code&quot;: &quot;FR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 76,
            &quot;country_key&quot;: &quot;GA&quot;,
            &quot;public_id&quot;: &quot;a961ef41-6d8f-4761-987d-68ef0deca4b0&quot;,
            &quot;name&quot;: &quot;Gabon&quot;,
            &quot;capital&quot;: &quot;Libreville&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇦&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+241&quot;,
            &quot;code&quot;: &quot;GA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 230,
            &quot;country_key&quot;: &quot;GB&quot;,
            &quot;public_id&quot;: &quot;f8bbe79e-b7e2-4e22-aa44-90bcd249390b&quot;,
            &quot;name&quot;: &quot;United Kingdom&quot;,
            &quot;capital&quot;: &quot;London&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1e7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇧&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+44&quot;,
            &quot;code&quot;: &quot;GB&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 84,
            &quot;country_key&quot;: &quot;GD&quot;,
            &quot;public_id&quot;: &quot;a76cb38a-caad-4c9a-97d4-638a826be2b1&quot;,
            &quot;name&quot;: &quot;Grenada&quot;,
            &quot;capital&quot;: &quot;St. George&#039;s&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1e9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇩&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1473&quot;,
            &quot;code&quot;: &quot;GD&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 78,
            &quot;country_key&quot;: &quot;GE&quot;,
            &quot;public_id&quot;: &quot;1e1be9fd-fdcc-446f-83d3-58b13f8ec0ef&quot;,
            &quot;name&quot;: &quot;Georgia&quot;,
            &quot;capital&quot;: &quot;Tbilisi&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇪&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+995&quot;,
            &quot;code&quot;: &quot;GE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 74,
            &quot;country_key&quot;: &quot;GF&quot;,
            &quot;public_id&quot;: &quot;09cc636f-3cda-42ab-a198-37fc76f5ac96&quot;,
            &quot;name&quot;: &quot;French Guiana&quot;,
            &quot;capital&quot;: &quot;Cayenne&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1eb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇫&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+594&quot;,
            &quot;code&quot;: &quot;GF&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 88,
            &quot;country_key&quot;: &quot;GG&quot;,
            &quot;public_id&quot;: &quot;aaf7c307-84eb-452a-8b3e-54be203d8bec&quot;,
            &quot;name&quot;: &quot;Guernsey&quot;,
            &quot;capital&quot;: &quot;St Peter Port&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇬&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+44&quot;,
            &quot;code&quot;: &quot;GG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 80,
            &quot;country_key&quot;: &quot;GH&quot;,
            &quot;public_id&quot;: &quot;87cc2f4c-86fa-4417-8a62-d58e5e399a42&quot;,
            &quot;name&quot;: &quot;Ghana&quot;,
            &quot;capital&quot;: &quot;Accra&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ed.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇭&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+233&quot;,
            &quot;code&quot;: &quot;GH&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 81,
            &quot;country_key&quot;: &quot;GI&quot;,
            &quot;public_id&quot;: &quot;cc082a8b-a16e-493d-a9e6-eeeb68c365a4&quot;,
            &quot;name&quot;: &quot;Gibraltar&quot;,
            &quot;capital&quot;: &quot;Gibraltar&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇮&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+350&quot;,
            &quot;code&quot;: &quot;GI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 83,
            &quot;country_key&quot;: &quot;GL&quot;,
            &quot;public_id&quot;: &quot;0f48825c-4d95-4c91-a637-531666e12bae&quot;,
            &quot;name&quot;: &quot;Greenland&quot;,
            &quot;capital&quot;: &quot;Nuuk&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇱&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+299&quot;,
            &quot;code&quot;: &quot;GL&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 77,
            &quot;country_key&quot;: &quot;GM&quot;,
            &quot;public_id&quot;: &quot;b29360fe-2921-416c-b567-1a8225c3dc2a&quot;,
            &quot;name&quot;: &quot;Gambia&quot;,
            &quot;capital&quot;: &quot;Bathurst&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇲&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+220&quot;,
            &quot;code&quot;: &quot;GM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 89,
            &quot;country_key&quot;: &quot;GN&quot;,
            &quot;public_id&quot;: &quot;7db11688-a545-4e74-92c9-473160fbe6a2&quot;,
            &quot;name&quot;: &quot;Guinea&quot;,
            &quot;capital&quot;: &quot;Conakry&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇳&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+224&quot;,
            &quot;code&quot;: &quot;GN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 85,
            &quot;country_key&quot;: &quot;GP&quot;,
            &quot;public_id&quot;: &quot;be21346e-5774-4967-8837-9aa4250cb95d&quot;,
            &quot;name&quot;: &quot;Guadeloupe&quot;,
            &quot;capital&quot;: &quot;Basse-Terre&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f5.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇵&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+590&quot;,
            &quot;code&quot;: &quot;GP&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 65,
            &quot;country_key&quot;: &quot;GQ&quot;,
            &quot;public_id&quot;: &quot;48952d6c-dfe8-4b3b-a140-3f8457de4b10&quot;,
            &quot;name&quot;: &quot;Equatorial Guinea&quot;,
            &quot;capital&quot;: &quot;Malabo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇶&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+240&quot;,
            &quot;code&quot;: &quot;GQ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 82,
            &quot;country_key&quot;: &quot;GR&quot;,
            &quot;public_id&quot;: &quot;4fb5b34b-86e1-4494-ad4e-3b9c9bedca71&quot;,
            &quot;name&quot;: &quot;Greece&quot;,
            &quot;capital&quot;: &quot;Athens&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇷&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+30&quot;,
            &quot;code&quot;: &quot;GR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 203,
            &quot;country_key&quot;: &quot;GS&quot;,
            &quot;public_id&quot;: &quot;3dd2d228-89c4-4432-8206-831bec54207d&quot;,
            &quot;name&quot;: &quot;South Georgia and the South Sandwich Islands&quot;,
            &quot;capital&quot;: &quot;Grytviken&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇸&quot;,
            &quot;continent&quot;: &quot;Antarctica&quot;,
            &quot;phone_code&quot;: &quot;+500&quot;,
            &quot;code&quot;: &quot;GS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 87,
            &quot;country_key&quot;: &quot;GT&quot;,
            &quot;public_id&quot;: &quot;b756278a-3196-46a5-9a32-579851d7974e&quot;,
            &quot;name&quot;: &quot;Guatemala&quot;,
            &quot;capital&quot;: &quot;Guatemala City&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇹&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+502&quot;,
            &quot;code&quot;: &quot;GT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 86,
            &quot;country_key&quot;: &quot;GU&quot;,
            &quot;public_id&quot;: &quot;1439263a-b489-47f5-ab41-8c11b28b9682&quot;,
            &quot;name&quot;: &quot;Guam&quot;,
            &quot;capital&quot;: &quot;Hag&aring;t&ntilde;a&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1fa.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇺&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+1671&quot;,
            &quot;code&quot;: &quot;GU&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 90,
            &quot;country_key&quot;: &quot;GW&quot;,
            &quot;public_id&quot;: &quot;f6b0fbb3-0e55-464b-8f26-805b97c7f0af&quot;,
            &quot;name&quot;: &quot;Guinea-Bissau&quot;,
            &quot;capital&quot;: &quot;Bissau&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1fc.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇼&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+245&quot;,
            &quot;code&quot;: &quot;GW&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 91,
            &quot;country_key&quot;: &quot;GY&quot;,
            &quot;public_id&quot;: &quot;2aa5c614-6508-4254-8481-38e70c99d4d1&quot;,
            &quot;name&quot;: &quot;Guyana&quot;,
            &quot;capital&quot;: &quot;Georgetown&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ec-1f1fe.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇬🇾&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+595&quot;,
            &quot;code&quot;: &quot;GY&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 95,
            &quot;country_key&quot;: &quot;HK&quot;,
            &quot;public_id&quot;: &quot;8a53ae0d-e539-4378-9b72-0d87539feb39&quot;,
            &quot;name&quot;: &quot;Hong Kong&quot;,
            &quot;capital&quot;: &quot;Hong Kong&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f0.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇭🇰&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+852&quot;,
            &quot;code&quot;: &quot;HK&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 94,
            &quot;country_key&quot;: &quot;HN&quot;,
            &quot;public_id&quot;: &quot;4c0642cb-7175-4991-b68c-413afe4ade2c&quot;,
            &quot;name&quot;: &quot;Honduras&quot;,
            &quot;capital&quot;: &quot;Tegucigalpa&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇭🇳&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+504&quot;,
            &quot;code&quot;: &quot;HN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 54,
            &quot;country_key&quot;: &quot;HR&quot;,
            &quot;public_id&quot;: &quot;6d927c1f-8335-4f17-811c-1ac1589d1e8b&quot;,
            &quot;name&quot;: &quot;Croatia&quot;,
            &quot;capital&quot;: &quot;Zagreb&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇭🇷&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+385&quot;,
            &quot;code&quot;: &quot;HR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 92,
            &quot;country_key&quot;: &quot;HT&quot;,
            &quot;public_id&quot;: &quot;a03b42e9-2a31-4fd7-8dac-15ffd11ff0f2&quot;,
            &quot;name&quot;: &quot;Haiti&quot;,
            &quot;capital&quot;: &quot;Port-au-Prince&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇭🇹&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+509&quot;,
            &quot;code&quot;: &quot;HT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 96,
            &quot;country_key&quot;: &quot;HU&quot;,
            &quot;public_id&quot;: &quot;60aad519-4a43-4981-8bbc-839817c4cf1d&quot;,
            &quot;name&quot;: &quot;Hungary&quot;,
            &quot;capital&quot;: &quot;Budapest&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ed-1f1fa.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇭🇺&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+36&quot;,
            &quot;code&quot;: &quot;HU&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 99,
            &quot;country_key&quot;: &quot;ID&quot;,
            &quot;public_id&quot;: &quot;147b2ed6-d17f-489a-9fad-79caef17d796&quot;,
            &quot;name&quot;: &quot;Indonesia&quot;,
            &quot;capital&quot;: &quot;Jakarta&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1e9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇩&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+62&quot;,
            &quot;code&quot;: &quot;ID&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 102,
            &quot;country_key&quot;: &quot;IE&quot;,
            &quot;public_id&quot;: &quot;669b66ba-ecb2-41c7-947b-1ad40f303589&quot;,
            &quot;name&quot;: &quot;Ireland&quot;,
            &quot;capital&quot;: &quot;Dublin&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇪&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+353&quot;,
            &quot;code&quot;: &quot;IE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 104,
            &quot;country_key&quot;: &quot;IL&quot;,
            &quot;public_id&quot;: &quot;56617730-0078-4664-bc49-08bb9c85c199&quot;,
            &quot;name&quot;: &quot;Israel&quot;,
            &quot;capital&quot;: &quot;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇱&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+972&quot;,
            &quot;code&quot;: &quot;IL&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 103,
            &quot;country_key&quot;: &quot;IM&quot;,
            &quot;public_id&quot;: &quot;5e535bd1-e554-476e-a5b9-afad2b438a52&quot;,
            &quot;name&quot;: &quot;Isle of Man&quot;,
            &quot;capital&quot;: &quot;Douglas&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇲&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+44&quot;,
            &quot;code&quot;: &quot;IM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 98,
            &quot;country_key&quot;: &quot;IN&quot;,
            &quot;public_id&quot;: &quot;3a50e50c-299f-4fd5-964d-28ac7b1b6f2d&quot;,
            &quot;name&quot;: &quot;India&quot;,
            &quot;capital&quot;: &quot;New Delhi&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇳&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+91&quot;,
            &quot;code&quot;: &quot;IN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 31,
            &quot;country_key&quot;: &quot;IO&quot;,
            &quot;public_id&quot;: &quot;df47029f-8503-4e4b-bb67-750caec740c3&quot;,
            &quot;name&quot;: &quot;British Indian Ocean Territory&quot;,
            &quot;capital&quot;: &quot;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇴&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+246&quot;,
            &quot;code&quot;: &quot;IO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:50&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 101,
            &quot;country_key&quot;: &quot;IQ&quot;,
            &quot;public_id&quot;: &quot;8b4b3ce8-d81f-4cc3-bf67-dc4a39d621ee&quot;,
            &quot;name&quot;: &quot;Iraq&quot;,
            &quot;capital&quot;: &quot;Baghdad&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇶&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+964&quot;,
            &quot;code&quot;: &quot;IQ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 100,
            &quot;country_key&quot;: &quot;IR&quot;,
            &quot;public_id&quot;: &quot;eddabbe7-e547-4215-bd79-0aaeaecfecff&quot;,
            &quot;name&quot;: &quot;Iran, Islamic Republic of Persian Gulf&quot;,
            &quot;capital&quot;: &quot;Tehran&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇷&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+98&quot;,
            &quot;code&quot;: &quot;IR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 97,
            &quot;country_key&quot;: &quot;IS&quot;,
            &quot;public_id&quot;: &quot;ceaf2f2b-1a36-4608-b7e5-13ede7ba0845&quot;,
            &quot;name&quot;: &quot;Iceland&quot;,
            &quot;capital&quot;: &quot;Reykjavik&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇸&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+354&quot;,
            &quot;code&quot;: &quot;IS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 105,
            &quot;country_key&quot;: &quot;IT&quot;,
            &quot;public_id&quot;: &quot;1f42a684-fd90-4427-b02b-f4c1431762a4&quot;,
            &quot;name&quot;: &quot;Italy&quot;,
            &quot;capital&quot;: &quot;Rome&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇮🇹&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+39&quot;,
            &quot;code&quot;: &quot;IT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 108,
            &quot;country_key&quot;: &quot;JE&quot;,
            &quot;public_id&quot;: &quot;c4b11ecc-e069-4376-a375-5f770e4c447b&quot;,
            &quot;name&quot;: &quot;Jersey&quot;,
            &quot;capital&quot;: &quot;Saint Helier&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ef-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇯🇪&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+44&quot;,
            &quot;code&quot;: &quot;JE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 106,
            &quot;country_key&quot;: &quot;JM&quot;,
            &quot;public_id&quot;: &quot;1c73de44-3937-431f-a838-83a96cb1f88e&quot;,
            &quot;name&quot;: &quot;Jamaica&quot;,
            &quot;capital&quot;: &quot;Kingston&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ef-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇯🇲&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1876&quot;,
            &quot;code&quot;: &quot;JM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 109,
            &quot;country_key&quot;: &quot;JO&quot;,
            &quot;public_id&quot;: &quot;272c5487-ebf4-4e2d-804d-212e89612db0&quot;,
            &quot;name&quot;: &quot;Jordan&quot;,
            &quot;capital&quot;: &quot;Amman&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ef-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇯🇴&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+962&quot;,
            &quot;code&quot;: &quot;JO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 107,
            &quot;country_key&quot;: &quot;JP&quot;,
            &quot;public_id&quot;: &quot;2bcb2356-e576-4a59-a28c-31cad0d18c8b&quot;,
            &quot;name&quot;: &quot;Japan&quot;,
            &quot;capital&quot;: &quot;Tokyo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ef-1f1f5.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇯🇵&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+81&quot;,
            &quot;code&quot;: &quot;JP&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 111,
            &quot;country_key&quot;: &quot;KE&quot;,
            &quot;public_id&quot;: &quot;800ffc45-7bc9-4001-8396-d74467c3ad86&quot;,
            &quot;name&quot;: &quot;Kenya&quot;,
            &quot;capital&quot;: &quot;Nairobi&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇪&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+254&quot;,
            &quot;code&quot;: &quot;KE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 116,
            &quot;country_key&quot;: &quot;KG&quot;,
            &quot;public_id&quot;: &quot;c574111b-8121-4030-ad80-7bc2071fb7ca&quot;,
            &quot;name&quot;: &quot;Kyrgyzstan&quot;,
            &quot;capital&quot;: &quot;Bishkek&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇬&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+996&quot;,
            &quot;code&quot;: &quot;KG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 36,
            &quot;country_key&quot;: &quot;KH&quot;,
            &quot;public_id&quot;: &quot;4a31a506-7291-4089-82bc-bbc82256edd7&quot;,
            &quot;name&quot;: &quot;Cambodia&quot;,
            &quot;capital&quot;: &quot;Phnom Penh&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ed.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇭&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+855&quot;,
            &quot;code&quot;: &quot;KH&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 112,
            &quot;country_key&quot;: &quot;KI&quot;,
            &quot;public_id&quot;: &quot;b8d6e56e-00de-4aa3-8e6c-d03e445c60b7&quot;,
            &quot;name&quot;: &quot;Kiribati&quot;,
            &quot;capital&quot;: &quot;Tarawa&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇮&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+686&quot;,
            &quot;code&quot;: &quot;KI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 48,
            &quot;country_key&quot;: &quot;KM&quot;,
            &quot;public_id&quot;: &quot;ce381948-b61f-4a3f-bcd7-bc0bf7618589&quot;,
            &quot;name&quot;: &quot;Comoros&quot;,
            &quot;capital&quot;: &quot;Moroni&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇲&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+269&quot;,
            &quot;code&quot;: &quot;KM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 183,
            &quot;country_key&quot;: &quot;KN&quot;,
            &quot;public_id&quot;: &quot;2c41ecfa-c651-4a92-bb2b-d5fb5208a576&quot;,
            &quot;name&quot;: &quot;Saint Kitts and Nevis&quot;,
            &quot;capital&quot;: &quot;Basseterre&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇳&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1869&quot;,
            &quot;code&quot;: &quot;KN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 113,
            &quot;country_key&quot;: &quot;KP&quot;,
            &quot;public_id&quot;: &quot;197f5f87-f78b-4898-8e06-7cf3df663d9d&quot;,
            &quot;name&quot;: &quot;Korea, Democratic People&#039;s Republic of Korea&quot;,
            &quot;capital&quot;: &quot;Pyongyang&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f5.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇵&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+850&quot;,
            &quot;code&quot;: &quot;KP&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 114,
            &quot;country_key&quot;: &quot;KR&quot;,
            &quot;public_id&quot;: &quot;855697df-cb8c-4f70-a50d-65461f6fad15&quot;,
            &quot;name&quot;: &quot;Korea, Republic of South Korea&quot;,
            &quot;capital&quot;: &quot;Seoul&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇷&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+82&quot;,
            &quot;code&quot;: &quot;KR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 115,
            &quot;country_key&quot;: &quot;KW&quot;,
            &quot;public_id&quot;: &quot;7884596d-a54a-48b3-8ba1-ee898a587e05&quot;,
            &quot;name&quot;: &quot;Kuwait&quot;,
            &quot;capital&quot;: &quot;Kuwait City&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1fc.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇼&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+965&quot;,
            &quot;code&quot;: &quot;KW&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 40,
            &quot;country_key&quot;: &quot;KY&quot;,
            &quot;public_id&quot;: &quot;46014de2-9e21-4398-beac-d56711b265b3&quot;,
            &quot;name&quot;: &quot;Cayman Islands&quot;,
            &quot;capital&quot;: &quot;George Town&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1fe.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇾&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+ 345&quot;,
            &quot;code&quot;: &quot;KY&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 110,
            &quot;country_key&quot;: &quot;KZ&quot;,
            &quot;public_id&quot;: &quot;50088788-b95d-4515-99a5-6770787da66f&quot;,
            &quot;name&quot;: &quot;Kazakhstan&quot;,
            &quot;capital&quot;: &quot;Astana&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇰🇿&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+77&quot;,
            &quot;code&quot;: &quot;KZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 117,
            &quot;country_key&quot;: &quot;LA&quot;,
            &quot;public_id&quot;: &quot;53211f34-d6ef-4598-9211-eeb1140ace24&quot;,
            &quot;name&quot;: &quot;Laos&quot;,
            &quot;capital&quot;: &quot;Vientiane&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇦&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+856&quot;,
            &quot;code&quot;: &quot;LA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 119,
            &quot;country_key&quot;: &quot;LB&quot;,
            &quot;public_id&quot;: &quot;81eca5ee-761d-41a3-b071-9de17a80f37f&quot;,
            &quot;name&quot;: &quot;Lebanon&quot;,
            &quot;capital&quot;: &quot;Beirut&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1e7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇧&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+961&quot;,
            &quot;code&quot;: &quot;LB&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 184,
            &quot;country_key&quot;: &quot;LC&quot;,
            &quot;public_id&quot;: &quot;7de55400-46b4-43ea-9366-4ed8bce9f84b&quot;,
            &quot;name&quot;: &quot;Saint Lucia&quot;,
            &quot;capital&quot;: &quot;Castries&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1e8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇨&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1758&quot;,
            &quot;code&quot;: &quot;LC&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 123,
            &quot;country_key&quot;: &quot;LI&quot;,
            &quot;public_id&quot;: &quot;8f10ef88-116c-4edb-ac20-61eec5650b68&quot;,
            &quot;name&quot;: &quot;Liechtenstein&quot;,
            &quot;capital&quot;: &quot;Vaduz&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇮&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+423&quot;,
            &quot;code&quot;: &quot;LI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 205,
            &quot;country_key&quot;: &quot;LK&quot;,
            &quot;public_id&quot;: &quot;bed205b8-9f0e-4d21-b36c-0518688e4911&quot;,
            &quot;name&quot;: &quot;Sri Lanka&quot;,
            &quot;capital&quot;: &quot;Colombo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f0.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇰&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+94&quot;,
            &quot;code&quot;: &quot;LK&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 121,
            &quot;country_key&quot;: &quot;LR&quot;,
            &quot;public_id&quot;: &quot;855973d8-25f7-4ea4-b3cf-dda0d6864629&quot;,
            &quot;name&quot;: &quot;Liberia&quot;,
            &quot;capital&quot;: &quot;Monrovia&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇷&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+231&quot;,
            &quot;code&quot;: &quot;LR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 120,
            &quot;country_key&quot;: &quot;LS&quot;,
            &quot;public_id&quot;: &quot;38263094-7ae2-4b79-82e6-9b45088b4338&quot;,
            &quot;name&quot;: &quot;Lesotho&quot;,
            &quot;capital&quot;: &quot;Maseru&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇸&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+266&quot;,
            &quot;code&quot;: &quot;LS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 124,
            &quot;country_key&quot;: &quot;LT&quot;,
            &quot;public_id&quot;: &quot;b99ebec4-d615-40a7-a261-bc5760b8e5cf&quot;,
            &quot;name&quot;: &quot;Lithuania&quot;,
            &quot;capital&quot;: &quot;Vilnius&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇹&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+370&quot;,
            &quot;code&quot;: &quot;LT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 125,
            &quot;country_key&quot;: &quot;LU&quot;,
            &quot;public_id&quot;: &quot;b1d44839-e16c-46ed-b93d-2b3ed093255d&quot;,
            &quot;name&quot;: &quot;Luxembourg&quot;,
            &quot;capital&quot;: &quot;Luxembourg&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1fa.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇺&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+352&quot;,
            &quot;code&quot;: &quot;LU&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 118,
            &quot;country_key&quot;: &quot;LV&quot;,
            &quot;public_id&quot;: &quot;42efef28-3028-447d-bae6-28da6b0f84c0&quot;,
            &quot;name&quot;: &quot;Latvia&quot;,
            &quot;capital&quot;: &quot;Riga&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1fb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇻&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+371&quot;,
            &quot;code&quot;: &quot;LV&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 122,
            &quot;country_key&quot;: &quot;LY&quot;,
            &quot;public_id&quot;: &quot;f3b7de9b-42cf-42b3-8214-caa6d59fc692&quot;,
            &quot;name&quot;: &quot;Libyan Arab Jamahiriya&quot;,
            &quot;capital&quot;: &quot;Tripoli&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f1-1f1fe.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇱🇾&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+218&quot;,
            &quot;code&quot;: &quot;LY&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 146,
            &quot;country_key&quot;: &quot;MA&quot;,
            &quot;public_id&quot;: &quot;987b0adb-244f-4e8f-83ba-6d46fc65f840&quot;,
            &quot;name&quot;: &quot;Morocco&quot;,
            &quot;capital&quot;: &quot;Rabat&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇦&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+212&quot;,
            &quot;code&quot;: &quot;MA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 142,
            &quot;country_key&quot;: &quot;MC&quot;,
            &quot;public_id&quot;: &quot;b2331ac2-77f9-44c3-88c4-eb8a8228d4e8&quot;,
            &quot;name&quot;: &quot;Monaco&quot;,
            &quot;capital&quot;: &quot;Monaco&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1e8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇨&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+377&quot;,
            &quot;code&quot;: &quot;MC&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 141,
            &quot;country_key&quot;: &quot;MD&quot;,
            &quot;public_id&quot;: &quot;5f458835-545c-4ca0-8270-3df18056a255&quot;,
            &quot;name&quot;: &quot;Moldova&quot;,
            &quot;capital&quot;: &quot;Chişinău&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1e9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇩&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+373&quot;,
            &quot;code&quot;: &quot;MD&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 144,
            &quot;country_key&quot;: &quot;ME&quot;,
            &quot;public_id&quot;: &quot;d546c8f3-1012-4eba-8c71-2c04a0c392f4&quot;,
            &quot;name&quot;: &quot;Montenegro&quot;,
            &quot;capital&quot;: &quot;Podgorica&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇪&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+382&quot;,
            &quot;code&quot;: &quot;ME&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 185,
            &quot;country_key&quot;: &quot;MF&quot;,
            &quot;public_id&quot;: &quot;1d9879c4-19a5-4ca2-8e97-10b11e75d011&quot;,
            &quot;name&quot;: &quot;Saint Martin&quot;,
            &quot;capital&quot;: &quot;Marigot&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1eb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇫&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+590&quot;,
            &quot;code&quot;: &quot;MF&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 128,
            &quot;country_key&quot;: &quot;MG&quot;,
            &quot;public_id&quot;: &quot;fc7719da-d17d-4eee-9474-e238eb0a8323&quot;,
            &quot;name&quot;: &quot;Madagascar&quot;,
            &quot;capital&quot;: &quot;Antananarivo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇬&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+261&quot;,
            &quot;code&quot;: &quot;MG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 134,
            &quot;country_key&quot;: &quot;MH&quot;,
            &quot;public_id&quot;: &quot;f2c3bbb6-5d99-44ad-99f2-3dbbf48dbe79&quot;,
            &quot;name&quot;: &quot;Marshall Islands&quot;,
            &quot;capital&quot;: &quot;Majuro&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ed.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇭&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+692&quot;,
            &quot;code&quot;: &quot;MH&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 127,
            &quot;country_key&quot;: &quot;MK&quot;,
            &quot;public_id&quot;: &quot;3cf3fc23-7b96-449d-8d83-8694c73c79ab&quot;,
            &quot;name&quot;: &quot;Macedonia&quot;,
            &quot;capital&quot;: &quot;Skopje&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f0.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇰&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+389&quot;,
            &quot;code&quot;: &quot;MK&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 132,
            &quot;country_key&quot;: &quot;ML&quot;,
            &quot;public_id&quot;: &quot;2be7e528-49f2-479d-8d28-03c45a79f7f3&quot;,
            &quot;name&quot;: &quot;Mali&quot;,
            &quot;capital&quot;: &quot;Bamako&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇱&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+223&quot;,
            &quot;code&quot;: &quot;ML&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 148,
            &quot;country_key&quot;: &quot;MM&quot;,
            &quot;public_id&quot;: &quot;1e25ba0b-3f0c-4056-8e3a-9f2dec533168&quot;,
            &quot;name&quot;: &quot;Myanmar&quot;,
            &quot;capital&quot;: &quot;Naypyitaw&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇲&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+95&quot;,
            &quot;code&quot;: &quot;MM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 143,
            &quot;country_key&quot;: &quot;MN&quot;,
            &quot;public_id&quot;: &quot;94c39a7f-984a-48c9-81f3-15aa92fb36a7&quot;,
            &quot;name&quot;: &quot;Mongolia&quot;,
            &quot;capital&quot;: &quot;Ulan Bator&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇳&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+976&quot;,
            &quot;code&quot;: &quot;MN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 126,
            &quot;country_key&quot;: &quot;MO&quot;,
            &quot;public_id&quot;: &quot;cab917fd-1ff5-4807-8bff-ac15bd75782a&quot;,
            &quot;name&quot;: &quot;Macao&quot;,
            &quot;capital&quot;: &quot;Macao&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇴&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+853&quot;,
            &quot;code&quot;: &quot;MO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 161,
            &quot;country_key&quot;: &quot;MP&quot;,
            &quot;public_id&quot;: &quot;465e79d2-8ba4-4eeb-8307-ec2afe857dc1&quot;,
            &quot;name&quot;: &quot;Northern Mariana Islands&quot;,
            &quot;capital&quot;: &quot;Saipan&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f5.svg&quot;,
            &quot;flag_icon&quot;: &quot;🏳&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+1670&quot;,
            &quot;code&quot;: &quot;MP&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 135,
            &quot;country_key&quot;: &quot;MQ&quot;,
            &quot;public_id&quot;: &quot;5694ce75-b3bd-46c2-8db9-944886bff6ea&quot;,
            &quot;name&quot;: &quot;Martinique&quot;,
            &quot;capital&quot;: &quot;Fort-de-France&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇶&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+596&quot;,
            &quot;code&quot;: &quot;MQ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 136,
            &quot;country_key&quot;: &quot;MR&quot;,
            &quot;public_id&quot;: &quot;a88d554b-ec44-4fcb-9a39-65c8f63570e5&quot;,
            &quot;name&quot;: &quot;Mauritania&quot;,
            &quot;capital&quot;: &quot;Nouakchott&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇷&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+222&quot;,
            &quot;code&quot;: &quot;MR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 145,
            &quot;country_key&quot;: &quot;MS&quot;,
            &quot;public_id&quot;: &quot;a14d1148-384a-4a72-bc1a-78964a999831&quot;,
            &quot;name&quot;: &quot;Montserrat&quot;,
            &quot;capital&quot;: &quot;Plymouth&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇸&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1664&quot;,
            &quot;code&quot;: &quot;MS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 133,
            &quot;country_key&quot;: &quot;MT&quot;,
            &quot;public_id&quot;: &quot;4c7951b8-2a77-408f-9d50-a90b8e8dc12c&quot;,
            &quot;name&quot;: &quot;Malta&quot;,
            &quot;capital&quot;: &quot;Valletta&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇹&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+356&quot;,
            &quot;code&quot;: &quot;MT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 131,
            &quot;country_key&quot;: &quot;MV&quot;,
            &quot;public_id&quot;: &quot;03acc30a-3631-4b85-b579-369c4923dd74&quot;,
            &quot;name&quot;: &quot;Maldives&quot;,
            &quot;capital&quot;: &quot;Mal&eacute;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇻&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+960&quot;,
            &quot;code&quot;: &quot;MV&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 129,
            &quot;country_key&quot;: &quot;MW&quot;,
            &quot;public_id&quot;: &quot;7b167fed-0d10-4dec-856d-0607fce00aa0&quot;,
            &quot;name&quot;: &quot;Malawi&quot;,
            &quot;capital&quot;: &quot;Lilongwe&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fc.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇼&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+265&quot;,
            &quot;code&quot;: &quot;MW&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 139,
            &quot;country_key&quot;: &quot;MX&quot;,
            &quot;public_id&quot;: &quot;0dd9eda1-25b9-4bf4-b31b-2eee2dad2bb5&quot;,
            &quot;name&quot;: &quot;Mexico&quot;,
            &quot;capital&quot;: &quot;Mexico City&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fd.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇽&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+52&quot;,
            &quot;code&quot;: &quot;MX&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 130,
            &quot;country_key&quot;: &quot;MY&quot;,
            &quot;public_id&quot;: &quot;be365c80-474e-4bca-8edd-4162d94949a6&quot;,
            &quot;name&quot;: &quot;Malaysia&quot;,
            &quot;capital&quot;: &quot;Kuala Lumpur&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fe.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇾&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+60&quot;,
            &quot;code&quot;: &quot;MY&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 147,
            &quot;country_key&quot;: &quot;MZ&quot;,
            &quot;public_id&quot;: &quot;39e5383e-6683-4965-8848-d849d734de61&quot;,
            &quot;name&quot;: &quot;Mozambique&quot;,
            &quot;capital&quot;: &quot;Maputo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇲🇿&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+258&quot;,
            &quot;code&quot;: &quot;MZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 149,
            &quot;country_key&quot;: &quot;NA&quot;,
            &quot;public_id&quot;: &quot;4355f1c5-a846-4009-8dcd-468b85cef4f6&quot;,
            &quot;name&quot;: &quot;Namibia&quot;,
            &quot;capital&quot;: &quot;Windhoek&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇦&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+264&quot;,
            &quot;code&quot;: &quot;NA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 154,
            &quot;country_key&quot;: &quot;NC&quot;,
            &quot;public_id&quot;: &quot;c4818cd1-f120-4035-81f6-abf824de75f1&quot;,
            &quot;name&quot;: &quot;New Caledonia&quot;,
            &quot;capital&quot;: &quot;Noumea&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1e8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇨&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+687&quot;,
            &quot;code&quot;: &quot;NC&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 157,
            &quot;country_key&quot;: &quot;NE&quot;,
            &quot;public_id&quot;: &quot;1dbb580f-74ea-409c-b39b-40c4ea30775b&quot;,
            &quot;name&quot;: &quot;Niger&quot;,
            &quot;capital&quot;: &quot;Niamey&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇪&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+227&quot;,
            &quot;code&quot;: &quot;NE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 160,
            &quot;country_key&quot;: &quot;NF&quot;,
            &quot;public_id&quot;: &quot;353f69b1-9762-442f-8e88-8adc956e7e47&quot;,
            &quot;name&quot;: &quot;Norfolk Island&quot;,
            &quot;capital&quot;: &quot;Kingston&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1eb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇫&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+672&quot;,
            &quot;code&quot;: &quot;NF&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 158,
            &quot;country_key&quot;: &quot;NG&quot;,
            &quot;public_id&quot;: &quot;bb8ac25c-6a7d-4a7c-acd0-c38c3b950945&quot;,
            &quot;name&quot;: &quot;Nigeria&quot;,
            &quot;capital&quot;: &quot;Abuja&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇬&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+234&quot;,
            &quot;code&quot;: &quot;NG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 156,
            &quot;country_key&quot;: &quot;NI&quot;,
            &quot;public_id&quot;: &quot;f8dce0c8-835f-4926-b405-67f47a094e6a&quot;,
            &quot;name&quot;: &quot;Nicaragua&quot;,
            &quot;capital&quot;: &quot;Managua&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇮&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+505&quot;,
            &quot;code&quot;: &quot;NI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 152,
            &quot;country_key&quot;: &quot;NL&quot;,
            &quot;public_id&quot;: &quot;f5b1b5e0-2654-441f-9a9f-478169684350&quot;,
            &quot;name&quot;: &quot;Netherlands&quot;,
            &quot;capital&quot;: &quot;Amsterdam&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇱&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+31&quot;,
            &quot;code&quot;: &quot;NL&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 162,
            &quot;country_key&quot;: &quot;NO&quot;,
            &quot;public_id&quot;: &quot;bbdc7ce1-a58b-4f5d-8f41-9d60f1b482f0&quot;,
            &quot;name&quot;: &quot;Norway&quot;,
            &quot;capital&quot;: &quot;Oslo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇴&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+47&quot;,
            &quot;code&quot;: &quot;NO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 151,
            &quot;country_key&quot;: &quot;NP&quot;,
            &quot;public_id&quot;: &quot;c6f1072c-68fc-48c7-8086-62249cb6e275&quot;,
            &quot;name&quot;: &quot;Nepal&quot;,
            &quot;capital&quot;: &quot;Kathmandu&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f5.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇵&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+977&quot;,
            &quot;code&quot;: &quot;NP&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 150,
            &quot;country_key&quot;: &quot;NR&quot;,
            &quot;public_id&quot;: &quot;2c9be232-e491-4f25-8b98-e7042bceb9d5&quot;,
            &quot;name&quot;: &quot;Nauru&quot;,
            &quot;capital&quot;: &quot;Yaren&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇷&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+674&quot;,
            &quot;code&quot;: &quot;NR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 159,
            &quot;country_key&quot;: &quot;NU&quot;,
            &quot;public_id&quot;: &quot;8531ec9f-ee21-4f06-8c1c-597cac2e3cd4&quot;,
            &quot;name&quot;: &quot;Niue&quot;,
            &quot;capital&quot;: &quot;Alofi&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1fa.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇺&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+683&quot;,
            &quot;code&quot;: &quot;NU&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 155,
            &quot;country_key&quot;: &quot;NZ&quot;,
            &quot;public_id&quot;: &quot;1bad0573-6e8c-4e57-a8d4-cba1f529137c&quot;,
            &quot;name&quot;: &quot;New Zealand&quot;,
            &quot;capital&quot;: &quot;Wellington&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇳🇿&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+64&quot;,
            &quot;code&quot;: &quot;NZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 163,
            &quot;country_key&quot;: &quot;OM&quot;,
            &quot;public_id&quot;: &quot;16544f95-16e1-4b75-a454-1a463f67ee92&quot;,
            &quot;name&quot;: &quot;Oman&quot;,
            &quot;capital&quot;: &quot;Muscat&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f4-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇴🇲&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+968&quot;,
            &quot;code&quot;: &quot;OM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 167,
            &quot;country_key&quot;: &quot;PA&quot;,
            &quot;public_id&quot;: &quot;146fa67c-8ec6-4bbc-b477-08715032242d&quot;,
            &quot;name&quot;: &quot;Panama&quot;,
            &quot;capital&quot;: &quot;Panama City&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇦&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+507&quot;,
            &quot;code&quot;: &quot;PA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 170,
            &quot;country_key&quot;: &quot;PE&quot;,
            &quot;public_id&quot;: &quot;44eef148-6df3-4e2f-9ce1-e86febbcb163&quot;,
            &quot;name&quot;: &quot;Peru&quot;,
            &quot;capital&quot;: &quot;Lima&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇪&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+51&quot;,
            &quot;code&quot;: &quot;PE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 75,
            &quot;country_key&quot;: &quot;PF&quot;,
            &quot;public_id&quot;: &quot;15a37e60-3bfb-4931-9ad2-15edb7c7b274&quot;,
            &quot;name&quot;: &quot;French Polynesia&quot;,
            &quot;capital&quot;: &quot;Papeete&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1eb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇫&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+689&quot;,
            &quot;code&quot;: &quot;PF&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 168,
            &quot;country_key&quot;: &quot;PG&quot;,
            &quot;public_id&quot;: &quot;49adde59-2252-4bd4-a3c5-686f66bb0c66&quot;,
            &quot;name&quot;: &quot;Papua New Guinea&quot;,
            &quot;capital&quot;: &quot;Port Moresby&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇬&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+675&quot;,
            &quot;code&quot;: &quot;PG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 171,
            &quot;country_key&quot;: &quot;PH&quot;,
            &quot;public_id&quot;: &quot;b1ad31dd-c18b-45e5-a458-860344c3b9b7&quot;,
            &quot;name&quot;: &quot;Philippines&quot;,
            &quot;capital&quot;: &quot;Manila&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1ed.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇭&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+63&quot;,
            &quot;code&quot;: &quot;PH&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 164,
            &quot;country_key&quot;: &quot;PK&quot;,
            &quot;public_id&quot;: &quot;72aca2e7-5f9a-4bfb-bc85-b904767393cd&quot;,
            &quot;name&quot;: &quot;Pakistan&quot;,
            &quot;capital&quot;: &quot;Islamabad&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f0.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇰&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+92&quot;,
            &quot;code&quot;: &quot;PK&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 173,
            &quot;country_key&quot;: &quot;PL&quot;,
            &quot;public_id&quot;: &quot;c3e10360-1877-42d6-9d07-280c35626373&quot;,
            &quot;name&quot;: &quot;Poland&quot;,
            &quot;capital&quot;: &quot;Warsaw&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇱&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+48&quot;,
            &quot;code&quot;: &quot;PL&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 186,
            &quot;country_key&quot;: &quot;PM&quot;,
            &quot;public_id&quot;: &quot;f2252881-8cb8-4e17-9aaf-cf0bf2b621fb&quot;,
            &quot;name&quot;: &quot;Saint Pierre and Miquelon&quot;,
            &quot;capital&quot;: &quot;Saint-Pierre&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇲&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+508&quot;,
            &quot;code&quot;: &quot;PM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 172,
            &quot;country_key&quot;: &quot;PN&quot;,
            &quot;public_id&quot;: &quot;9a5c9267-7342-49f1-80cc-98513e1a1708&quot;,
            &quot;name&quot;: &quot;Pitcairn&quot;,
            &quot;capital&quot;: &quot;Adamstown&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇳&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+872&quot;,
            &quot;code&quot;: &quot;PN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 175,
            &quot;country_key&quot;: &quot;PR&quot;,
            &quot;public_id&quot;: &quot;c4b7a6fb-504b-4219-94f6-cc2a37b149e7&quot;,
            &quot;name&quot;: &quot;Puerto Rico&quot;,
            &quot;capital&quot;: &quot;San Juan&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇷&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1939&quot;,
            &quot;code&quot;: &quot;PR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 166,
            &quot;country_key&quot;: &quot;PS&quot;,
            &quot;public_id&quot;: &quot;55a204a7-f530-4148-8d73-2bd4104af515&quot;,
            &quot;name&quot;: &quot;Palestinian Territory, Occupied&quot;,
            &quot;capital&quot;: &quot;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇸&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+970&quot;,
            &quot;code&quot;: &quot;PS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 174,
            &quot;country_key&quot;: &quot;PT&quot;,
            &quot;public_id&quot;: &quot;87a90daf-f387-4be9-ae6e-23cb68683454&quot;,
            &quot;name&quot;: &quot;Portugal&quot;,
            &quot;capital&quot;: &quot;Lisbon&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇹&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+351&quot;,
            &quot;code&quot;: &quot;PT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 165,
            &quot;country_key&quot;: &quot;PW&quot;,
            &quot;public_id&quot;: &quot;e578efda-9bc7-4074-85e5-ebf10bf339e1&quot;,
            &quot;name&quot;: &quot;Palau&quot;,
            &quot;capital&quot;: &quot;Melekeok&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1fc.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇼&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+680&quot;,
            &quot;code&quot;: &quot;PW&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 169,
            &quot;country_key&quot;: &quot;PY&quot;,
            &quot;public_id&quot;: &quot;c6c4e216-e638-4f61-bdcd-aee7304a930f&quot;,
            &quot;name&quot;: &quot;Paraguay&quot;,
            &quot;capital&quot;: &quot;Asunci&oacute;n&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f5-1f1fe.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇵🇾&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+595&quot;,
            &quot;code&quot;: &quot;PY&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 176,
            &quot;country_key&quot;: &quot;QA&quot;,
            &quot;public_id&quot;: &quot;4a6da77d-641b-49ea-9b58-ff37f9eb4633&quot;,
            &quot;name&quot;: &quot;Qatar&quot;,
            &quot;capital&quot;: &quot;Doha&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f6-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇶🇦&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+974&quot;,
            &quot;code&quot;: &quot;QA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 180,
            &quot;country_key&quot;: &quot;RE&quot;,
            &quot;public_id&quot;: &quot;9a62c783-5ce4-4d9e-bb32-a0047774bb85&quot;,
            &quot;name&quot;: &quot;Reunion&quot;,
            &quot;capital&quot;: &quot;Saint-Denis&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f7-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇷🇪&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+262&quot;,
            &quot;code&quot;: &quot;RE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 177,
            &quot;country_key&quot;: &quot;RO&quot;,
            &quot;public_id&quot;: &quot;858d7a8e-2d60-4062-b71e-ccbe4f54a373&quot;,
            &quot;name&quot;: &quot;Romania&quot;,
            &quot;capital&quot;: &quot;Bucharest&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f7-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇷🇴&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+40&quot;,
            &quot;code&quot;: &quot;RO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 193,
            &quot;country_key&quot;: &quot;RS&quot;,
            &quot;public_id&quot;: &quot;69f10f5a-ab62-44e8-9760-2ed779767f73&quot;,
            &quot;name&quot;: &quot;Serbia&quot;,
            &quot;capital&quot;: &quot;Belgrade&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f7-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇷🇸&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+381&quot;,
            &quot;code&quot;: &quot;RS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 178,
            &quot;country_key&quot;: &quot;RU&quot;,
            &quot;public_id&quot;: &quot;a413e567-0be7-4f33-82e2-ee413c9a2208&quot;,
            &quot;name&quot;: &quot;Russia&quot;,
            &quot;capital&quot;: &quot;Moscow&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f7-1f1fa.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇷🇺&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+7&quot;,
            &quot;code&quot;: &quot;RU&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 179,
            &quot;country_key&quot;: &quot;RW&quot;,
            &quot;public_id&quot;: &quot;78477def-16b8-4be4-a248-c1d958675e89&quot;,
            &quot;name&quot;: &quot;Rwanda&quot;,
            &quot;capital&quot;: &quot;Kigali&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f7-1f1fc.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇷🇼&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+250&quot;,
            &quot;code&quot;: &quot;RW&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 191,
            &quot;country_key&quot;: &quot;SA&quot;,
            &quot;public_id&quot;: &quot;c69c0858-d7ec-4293-9592-9da30be897d5&quot;,
            &quot;name&quot;: &quot;Saudi Arabia&quot;,
            &quot;capital&quot;: &quot;Riyadh&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇩&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+966&quot;,
            &quot;code&quot;: &quot;SA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 199,
            &quot;country_key&quot;: &quot;SB&quot;,
            &quot;public_id&quot;: &quot;ea6cda68-b4a1-4ce7-a2d9-9c685e3cdf04&quot;,
            &quot;name&quot;: &quot;Solomon Islands&quot;,
            &quot;capital&quot;: &quot;Honiara&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇧&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+677&quot;,
            &quot;code&quot;: &quot;SB&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 194,
            &quot;country_key&quot;: &quot;SC&quot;,
            &quot;public_id&quot;: &quot;f632de00-afec-41d2-84d3-2cfd523eb493&quot;,
            &quot;name&quot;: &quot;Seychelles&quot;,
            &quot;capital&quot;: &quot;Victoria&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇨&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+248&quot;,
            &quot;code&quot;: &quot;SC&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 206,
            &quot;country_key&quot;: &quot;SD&quot;,
            &quot;public_id&quot;: &quot;9350cc81-1ed1-441f-9a9c-640aef69971e&quot;,
            &quot;name&quot;: &quot;Sudan&quot;,
            &quot;capital&quot;: &quot;Khartoum&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇩&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+249&quot;,
            &quot;code&quot;: &quot;SD&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 210,
            &quot;country_key&quot;: &quot;SE&quot;,
            &quot;public_id&quot;: &quot;b0643fc7-c223-4c8a-bb14-5614a99ab451&quot;,
            &quot;name&quot;: &quot;Sweden&quot;,
            &quot;capital&quot;: &quot;Stockholm&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇪&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+46&quot;,
            &quot;code&quot;: &quot;SE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 196,
            &quot;country_key&quot;: &quot;SG&quot;,
            &quot;public_id&quot;: &quot;cf77e7b1-58f1-40cb-9460-7dce62c6ed1c&quot;,
            &quot;name&quot;: &quot;Singapore&quot;,
            &quot;capital&quot;: &quot;Singapore&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇬&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+65&quot;,
            &quot;code&quot;: &quot;SG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 182,
            &quot;country_key&quot;: &quot;SH&quot;,
            &quot;public_id&quot;: &quot;60ea4919-a595-4a05-b60d-454f3a6e786c&quot;,
            &quot;name&quot;: &quot;Saint Helena, Ascension and Tristan Da Cunha&quot;,
            &quot;capital&quot;: &quot;Jamestown&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇭&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+290&quot;,
            &quot;code&quot;: &quot;SH&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 198,
            &quot;country_key&quot;: &quot;SI&quot;,
            &quot;public_id&quot;: &quot;03db5361-dc0a-421c-82eb-692c6bb752b0&quot;,
            &quot;name&quot;: &quot;Slovenia&quot;,
            &quot;capital&quot;: &quot;Ljubljana&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇮&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+386&quot;,
            &quot;code&quot;: &quot;SI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 208,
            &quot;country_key&quot;: &quot;SJ&quot;,
            &quot;public_id&quot;: &quot;f37c6e8d-b095-4ca6-80b1-c2e80f3c066f&quot;,
            &quot;name&quot;: &quot;Svalbard and Jan Mayen&quot;,
            &quot;capital&quot;: &quot;Longyearbyen&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ef.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇯&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+47&quot;,
            &quot;code&quot;: &quot;SJ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 197,
            &quot;country_key&quot;: &quot;SK&quot;,
            &quot;public_id&quot;: &quot;42fc2c5c-3941-43cf-9ec8-30bbb78b7091&quot;,
            &quot;name&quot;: &quot;Slovakia&quot;,
            &quot;capital&quot;: &quot;Bratislava&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f0.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇰&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+421&quot;,
            &quot;code&quot;: &quot;SK&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 195,
            &quot;country_key&quot;: &quot;SL&quot;,
            &quot;public_id&quot;: &quot;05725d63-c668-4954-9fb5-b79fb7547b8a&quot;,
            &quot;name&quot;: &quot;Sierra Leone&quot;,
            &quot;capital&quot;: &quot;Freetown&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇱&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+232&quot;,
            &quot;code&quot;: &quot;SL&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 189,
            &quot;country_key&quot;: &quot;SM&quot;,
            &quot;public_id&quot;: &quot;2aaf82ee-0a48-4510-9f52-a7bd1914ac83&quot;,
            &quot;name&quot;: &quot;San Marino&quot;,
            &quot;capital&quot;: &quot;San Marino&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇲&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+378&quot;,
            &quot;code&quot;: &quot;SM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 192,
            &quot;country_key&quot;: &quot;SN&quot;,
            &quot;public_id&quot;: &quot;8681c926-6c75-426d-8bac-a4d02854b04b&quot;,
            &quot;name&quot;: &quot;Senegal&quot;,
            &quot;capital&quot;: &quot;Dakar&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇳&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+221&quot;,
            &quot;code&quot;: &quot;SN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 200,
            &quot;country_key&quot;: &quot;SO&quot;,
            &quot;public_id&quot;: &quot;018c8a95-7e1c-4571-9d83-310ad8b6a19d&quot;,
            &quot;name&quot;: &quot;Somalia&quot;,
            &quot;capital&quot;: &quot;Mogadishu&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇴&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+252&quot;,
            &quot;code&quot;: &quot;SO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 207,
            &quot;country_key&quot;: &quot;SR&quot;,
            &quot;public_id&quot;: &quot;b2428391-933a-41d1-8e38-806e39a04b8b&quot;,
            &quot;name&quot;: &quot;Suriname&quot;,
            &quot;capital&quot;: &quot;Paramaribo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇷&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+597&quot;,
            &quot;code&quot;: &quot;SR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 202,
            &quot;country_key&quot;: &quot;SS&quot;,
            &quot;public_id&quot;: &quot;e1f26784-76c4-4635-8eda-36917b2a2477&quot;,
            &quot;name&quot;: &quot;South Sudan&quot;,
            &quot;capital&quot;: &quot;Juba&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇸&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+211&quot;,
            &quot;code&quot;: &quot;SS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 190,
            &quot;country_key&quot;: &quot;ST&quot;,
            &quot;public_id&quot;: &quot;5193c2e7-9067-43f8-9ba8-a8c25fec9df1&quot;,
            &quot;name&quot;: &quot;Sao Tome and Principe&quot;,
            &quot;capital&quot;: &quot;S&atilde;o Tom&eacute;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇹&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+239&quot;,
            &quot;code&quot;: &quot;ST&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 64,
            &quot;country_key&quot;: &quot;SV&quot;,
            &quot;public_id&quot;: &quot;aa6569ab-2341-4ac4-8d51-5721389d5f5b&quot;,
            &quot;name&quot;: &quot;El Salvador&quot;,
            &quot;capital&quot;: &quot;San Salvador&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1fb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇻&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+503&quot;,
            &quot;code&quot;: &quot;SV&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 212,
            &quot;country_key&quot;: &quot;SY&quot;,
            &quot;public_id&quot;: &quot;e0ec6cb4-f256-4c15-9e8f-705e17322e4a&quot;,
            &quot;name&quot;: &quot;Syrian Arab Republic&quot;,
            &quot;capital&quot;: &quot;Damascus&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1fe.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇾&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+963&quot;,
            &quot;code&quot;: &quot;SY&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 209,
            &quot;country_key&quot;: &quot;SZ&quot;,
            &quot;public_id&quot;: &quot;32377814-636b-4d3e-93d6-eb641c619e1d&quot;,
            &quot;name&quot;: &quot;Swaziland&quot;,
            &quot;capital&quot;: &quot;Mbabane&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇸🇿&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+268&quot;,
            &quot;code&quot;: &quot;SZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 225,
            &quot;country_key&quot;: &quot;TC&quot;,
            &quot;public_id&quot;: &quot;1493dbb0-2d0d-4365-95cd-8311c7f3b82c&quot;,
            &quot;name&quot;: &quot;Turks and Caicos Islands&quot;,
            &quot;capital&quot;: &quot;Cockburn Town&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1e8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇨&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1649&quot;,
            &quot;code&quot;: &quot;TC&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 42,
            &quot;country_key&quot;: &quot;TD&quot;,
            &quot;public_id&quot;: &quot;729d3d51-ad91-4d6f-8bfb-a46c0b3b70ad&quot;,
            &quot;name&quot;: &quot;Chad&quot;,
            &quot;capital&quot;: &quot;N&#039;Djamena&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1e9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇩&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+235&quot;,
            &quot;code&quot;: &quot;TD&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 218,
            &quot;country_key&quot;: &quot;TG&quot;,
            &quot;public_id&quot;: &quot;cc2624c5-6a46-4dca-878f-7aed0bec2855&quot;,
            &quot;name&quot;: &quot;Togo&quot;,
            &quot;capital&quot;: &quot;Lom&eacute;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇬&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+228&quot;,
            &quot;code&quot;: &quot;TG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 216,
            &quot;country_key&quot;: &quot;TH&quot;,
            &quot;public_id&quot;: &quot;0ff5b8f5-0e90-40bd-bf27-74139fda7197&quot;,
            &quot;name&quot;: &quot;Thailand&quot;,
            &quot;capital&quot;: &quot;Bangkok&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ed.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇭&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+66&quot;,
            &quot;code&quot;: &quot;TH&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 214,
            &quot;country_key&quot;: &quot;TJ&quot;,
            &quot;public_id&quot;: &quot;b1ed5db4-84ad-4137-813c-f7b09149d93d&quot;,
            &quot;name&quot;: &quot;Tajikistan&quot;,
            &quot;capital&quot;: &quot;Dushanbe&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ef.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇯&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+992&quot;,
            &quot;code&quot;: &quot;TJ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 219,
            &quot;country_key&quot;: &quot;TK&quot;,
            &quot;public_id&quot;: &quot;6dd9917c-f591-40c8-b88e-60bab72b740f&quot;,
            &quot;name&quot;: &quot;Tokelau&quot;,
            &quot;capital&quot;: &quot;&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f0.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇰&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+690&quot;,
            &quot;code&quot;: &quot;TK&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 217,
            &quot;country_key&quot;: &quot;TL&quot;,
            &quot;public_id&quot;: &quot;1b29f70c-f79e-4a14-8407-863c8ed4127d&quot;,
            &quot;name&quot;: &quot;Timor-Leste&quot;,
            &quot;capital&quot;: &quot;Dili&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f1.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇱&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+670&quot;,
            &quot;code&quot;: &quot;TL&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 224,
            &quot;country_key&quot;: &quot;TM&quot;,
            &quot;public_id&quot;: &quot;833bafce-4cf8-48a2-8065-ecf8e856e4ca&quot;,
            &quot;name&quot;: &quot;Turkmenistan&quot;,
            &quot;capital&quot;: &quot;Ashgabat&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇲&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+993&quot;,
            &quot;code&quot;: &quot;TM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 222,
            &quot;country_key&quot;: &quot;TN&quot;,
            &quot;public_id&quot;: &quot;38eda167-d7c8-4a64-ae56-287b020f81b5&quot;,
            &quot;name&quot;: &quot;Tunisia&quot;,
            &quot;capital&quot;: &quot;Tunis&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇳&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+216&quot;,
            &quot;code&quot;: &quot;TN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 220,
            &quot;country_key&quot;: &quot;TO&quot;,
            &quot;public_id&quot;: &quot;01e84837-9cbc-431a-837f-fcf39f313ff6&quot;,
            &quot;name&quot;: &quot;Tonga&quot;,
            &quot;capital&quot;: &quot;Nuku&#039;alofa&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f4.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇴&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+676&quot;,
            &quot;code&quot;: &quot;TO&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 223,
            &quot;country_key&quot;: &quot;TR&quot;,
            &quot;public_id&quot;: &quot;9ef93fbe-e89b-45ca-93ab-3d4c038f0b18&quot;,
            &quot;name&quot;: &quot;Turkey&quot;,
            &quot;capital&quot;: &quot;Ankara&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f7.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇷&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+90&quot;,
            &quot;code&quot;: &quot;TR&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 221,
            &quot;country_key&quot;: &quot;TT&quot;,
            &quot;public_id&quot;: &quot;f7cac14c-e8ba-426b-8a09-365879e717bd&quot;,
            &quot;name&quot;: &quot;Trinidad and Tobago&quot;,
            &quot;capital&quot;: &quot;Port of Spain&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇹&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1868&quot;,
            &quot;code&quot;: &quot;TT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 226,
            &quot;country_key&quot;: &quot;TV&quot;,
            &quot;public_id&quot;: &quot;ac2c3c34-7448-4841-93f8-cad8727cd910&quot;,
            &quot;name&quot;: &quot;Tuvalu&quot;,
            &quot;capital&quot;: &quot;Funafuti&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1fb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇻&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+688&quot;,
            &quot;code&quot;: &quot;TV&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 213,
            &quot;country_key&quot;: &quot;TW&quot;,
            &quot;public_id&quot;: &quot;9ed1128b-de11-43a8-85f3-5588e3b3f438&quot;,
            &quot;name&quot;: &quot;Taiwan&quot;,
            &quot;capital&quot;: &quot;Taipei&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1fc.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇼&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+886&quot;,
            &quot;code&quot;: &quot;TW&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 215,
            &quot;country_key&quot;: &quot;TZ&quot;,
            &quot;public_id&quot;: &quot;080b2943-10cd-4e2e-bcfd-ac0e59b6d434&quot;,
            &quot;name&quot;: &quot;Tanzania, United Republic of Tanzania&quot;,
            &quot;capital&quot;: &quot;Dodoma&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇹🇿&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+255&quot;,
            &quot;code&quot;: &quot;TZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 228,
            &quot;country_key&quot;: &quot;UA&quot;,
            &quot;public_id&quot;: &quot;9e0bc9cb-354d-4753-934b-fa52848d4759&quot;,
            &quot;name&quot;: &quot;Ukraine&quot;,
            &quot;capital&quot;: &quot;Kiev&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fa-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇺🇦&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+380&quot;,
            &quot;code&quot;: &quot;UA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 227,
            &quot;country_key&quot;: &quot;UG&quot;,
            &quot;public_id&quot;: &quot;0dd2f50a-5e6f-4b47-bf68-adb9d7f0c4cb&quot;,
            &quot;name&quot;: &quot;Uganda&quot;,
            &quot;capital&quot;: &quot;Kampala&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fa-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇺🇬&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+256&quot;,
            &quot;code&quot;: &quot;UG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 231,
            &quot;country_key&quot;: &quot;US&quot;,
            &quot;public_id&quot;: &quot;57727c0b-de35-441e-a74b-7b0edc5a724b&quot;,
            &quot;name&quot;: &quot;United States&quot;,
            &quot;capital&quot;: &quot;Washington&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fa-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇺🇸&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1&quot;,
            &quot;code&quot;: &quot;US&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 232,
            &quot;country_key&quot;: &quot;UY&quot;,
            &quot;public_id&quot;: &quot;aa24dcb3-9f32-425f-a023-f606085c62ff&quot;,
            &quot;name&quot;: &quot;Uruguay&quot;,
            &quot;capital&quot;: &quot;Montevideo&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fa-1f1fe.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇺🇾&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+598&quot;,
            &quot;code&quot;: &quot;UY&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 233,
            &quot;country_key&quot;: &quot;UZ&quot;,
            &quot;public_id&quot;: &quot;9a3dbb1d-2a28-4465-967c-50ae86c52145&quot;,
            &quot;name&quot;: &quot;Uzbekistan&quot;,
            &quot;capital&quot;: &quot;Tashkent&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fa-1f1ff.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇺🇿&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+998&quot;,
            &quot;code&quot;: &quot;UZ&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 93,
            &quot;country_key&quot;: &quot;VA&quot;,
            &quot;public_id&quot;: &quot;ba13a7e3-d63c-44f4-bb83-82a0e7477619&quot;,
            &quot;name&quot;: &quot;Holy See (Vatican City State)&quot;,
            &quot;capital&quot;: &quot;Vatican City&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fb-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇻🇦&quot;,
            &quot;continent&quot;: &quot;Europe&quot;,
            &quot;phone_code&quot;: &quot;+379&quot;,
            &quot;code&quot;: &quot;VA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 187,
            &quot;country_key&quot;: &quot;VC&quot;,
            &quot;public_id&quot;: &quot;7052dbec-718c-4e92-9949-38198a60b87e&quot;,
            &quot;name&quot;: &quot;Saint Vincent and the Grenadines&quot;,
            &quot;capital&quot;: &quot;Kingstown&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fb-1f1e8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇻🇨&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1784&quot;,
            &quot;code&quot;: &quot;VC&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 235,
            &quot;country_key&quot;: &quot;VE&quot;,
            &quot;public_id&quot;: &quot;fbd3a7a8-c313-4bbc-8114-da57bcfb901c&quot;,
            &quot;name&quot;: &quot;Venezuela, Bolivarian Republic of Venezuela&quot;,
            &quot;capital&quot;: &quot;Caracas&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fb-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇻🇪&quot;,
            &quot;continent&quot;: &quot;South America&quot;,
            &quot;phone_code&quot;: &quot;+58&quot;,
            &quot;code&quot;: &quot;VE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 237,
            &quot;country_key&quot;: &quot;VG&quot;,
            &quot;public_id&quot;: &quot;19daa6ce-fe69-42fc-9fb4-11720eb1e6bf&quot;,
            &quot;name&quot;: &quot;Virgin Islands, British&quot;,
            &quot;capital&quot;: &quot;Road Town&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fb-1f1ec.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇻🇬&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1284&quot;,
            &quot;code&quot;: &quot;VG&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 238,
            &quot;country_key&quot;: &quot;VI&quot;,
            &quot;public_id&quot;: &quot;c8856f9e-eac5-4886-8007-0d6053cda1bc&quot;,
            &quot;name&quot;: &quot;Virgin Islands, U.S.&quot;,
            &quot;capital&quot;: &quot;Charlotte Amalie&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fb-1f1ee.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇻🇮&quot;,
            &quot;continent&quot;: &quot;North America&quot;,
            &quot;phone_code&quot;: &quot;+1340&quot;,
            &quot;code&quot;: &quot;VI&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 236,
            &quot;country_key&quot;: &quot;VN&quot;,
            &quot;public_id&quot;: &quot;839aa853-6013-4396-b48c-edff49e437a5&quot;,
            &quot;name&quot;: &quot;Vietnam&quot;,
            &quot;capital&quot;: &quot;Hanoi&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fb-1f1f3.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇻🇳&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+84&quot;,
            &quot;code&quot;: &quot;VN&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 234,
            &quot;country_key&quot;: &quot;VU&quot;,
            &quot;public_id&quot;: &quot;63f43006-eab8-42fd-a591-97516b6b8887&quot;,
            &quot;name&quot;: &quot;Vanuatu&quot;,
            &quot;capital&quot;: &quot;Port Vila&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fb-1f1fa.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇻🇺&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+678&quot;,
            &quot;code&quot;: &quot;VU&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 239,
            &quot;country_key&quot;: &quot;WF&quot;,
            &quot;public_id&quot;: &quot;e7b4b32d-7ede-431f-9a19-3c173337c6ed&quot;,
            &quot;name&quot;: &quot;Wallis and Futuna&quot;,
            &quot;capital&quot;: &quot;Mata-Utu&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fc-1f1eb.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇼🇫&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+681&quot;,
            &quot;code&quot;: &quot;WF&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 188,
            &quot;country_key&quot;: &quot;WS&quot;,
            &quot;public_id&quot;: &quot;206c8b2f-ab8f-4386-970e-b8399bf0cac2&quot;,
            &quot;name&quot;: &quot;Samoa&quot;,
            &quot;capital&quot;: &quot;Apia&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fc-1f1f8.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇼🇸&quot;,
            &quot;continent&quot;: &quot;Oceania&quot;,
            &quot;phone_code&quot;: &quot;+685&quot;,
            &quot;code&quot;: &quot;WS&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 240,
            &quot;country_key&quot;: &quot;YE&quot;,
            &quot;public_id&quot;: &quot;0b2dca42-2acc-4fe8-aa23-99351766a496&quot;,
            &quot;name&quot;: &quot;Yemen&quot;,
            &quot;capital&quot;: &quot;Sanaa&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fe-1f1ea.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇾🇪&quot;,
            &quot;continent&quot;: &quot;Asia&quot;,
            &quot;phone_code&quot;: &quot;+967&quot;,
            &quot;code&quot;: &quot;YE&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 138,
            &quot;country_key&quot;: &quot;YT&quot;,
            &quot;public_id&quot;: &quot;19f05481-2182-4853-8fb3-eb80ec69bf7f&quot;,
            &quot;name&quot;: &quot;Mayotte&quot;,
            &quot;capital&quot;: &quot;Mamoudzou&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1fe-1f1f9.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇾🇹&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+262&quot;,
            &quot;code&quot;: &quot;YT&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 201,
            &quot;country_key&quot;: &quot;ZA&quot;,
            &quot;public_id&quot;: &quot;0c9c6fe7-6790-43cd-af10-3ea8ff1ff3cb&quot;,
            &quot;name&quot;: &quot;South Africa&quot;,
            &quot;capital&quot;: &quot;Pretoria&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ff-1f1e6.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇿🇦&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+27&quot;,
            &quot;code&quot;: &quot;ZA&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 241,
            &quot;country_key&quot;: &quot;ZM&quot;,
            &quot;public_id&quot;: &quot;e3ecc883-cc0f-4ca9-9e45-53c4a7b2e8ce&quot;,
            &quot;name&quot;: &quot;Zambia&quot;,
            &quot;capital&quot;: &quot;Lusaka&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ff-1f1f2.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇿🇲&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+260&quot;,
            &quot;code&quot;: &quot;ZM&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 242,
            &quot;country_key&quot;: &quot;ZW&quot;,
            &quot;public_id&quot;: &quot;9bfdfd87-7b9c-43f1-8f27-1ce61e4f0568&quot;,
            &quot;name&quot;: &quot;Zimbabwe&quot;,
            &quot;capital&quot;: &quot;Harare&quot;,
            &quot;flag&quot;: &quot;https://twemoji.maxcdn.com/2/svg/1f1ff-1f1fc.svg&quot;,
            &quot;flag_icon&quot;: &quot;🇿🇼&quot;,
            &quot;continent&quot;: &quot;Africa&quot;,
            &quot;phone_code&quot;: &quot;+263&quot;,
            &quot;code&quot;: &quot;ZW&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:52&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 137,
            &quot;country_key&quot;: &quot;🇲🇺&quot;,
            &quot;public_id&quot;: &quot;40304ee4-67b0-4f6a-88a0-32771536ae0a&quot;,
            &quot;name&quot;: &quot;Mauritius&quot;,
            &quot;capital&quot;: null,
            &quot;flag&quot;: null,
            &quot;flag_icon&quot;: null,
            &quot;continent&quot;: null,
            &quot;phone_code&quot;: &quot;+230&quot;,
            &quot;code&quot;: &quot;🇲🇺&quot;,
            &quot;longitude&quot;: null,
            &quot;latitude&quot;: null,
            &quot;sub_region&quot;: null,
            &quot;timezones&quot;: null,
            &quot;meta&quot;: null,
            &quot;active&quot;: 0,
            &quot;created_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;updated_at&quot;: &quot;2023-12-29 23:12:51&quot;,
            &quot;deleted_at&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-country_list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-country_list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-country_list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-country_list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-country_list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-country_list" data-method="GET"
      data-path="api/v1/country_list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-country_list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-country_list"
                    onclick="tryItOut('GETapi-v1-country_list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-country_list"
                    onclick="cancelTryOut('GETapi-v1-country_list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-country_list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/country_list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-country_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-country_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-forgotpassword">POST api/v1/forgotpassword</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-forgotpassword">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/forgotpassword"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-forgotpassword">
</span>
<span id="execution-results-POSTapi-v1-forgotpassword" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-forgotpassword"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-forgotpassword"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-forgotpassword" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-forgotpassword">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-forgotpassword" data-method="POST"
      data-path="api/v1/forgotpassword"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-forgotpassword', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-forgotpassword"
                    onclick="tryItOut('POSTapi-v1-forgotpassword');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-forgotpassword"
                    onclick="cancelTryOut('POSTapi-v1-forgotpassword');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-forgotpassword"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/forgotpassword</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-forgotpassword"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-forgotpassword"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-list_otp_types">GET api/v1/list_otp_types</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-list_otp_types">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/list_otp_types"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-list_otp_types">
            <blockquote>
            <p>Example response (202):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Successful&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-list_otp_types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-list_otp_types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-list_otp_types"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-list_otp_types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-list_otp_types">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-list_otp_types" data-method="GET"
      data-path="api/v1/list_otp_types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-list_otp_types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-list_otp_types"
                    onclick="tryItOut('GETapi-v1-list_otp_types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-list_otp_types"
                    onclick="cancelTryOut('GETapi-v1-list_otp_types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-list_otp_types"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/list_otp_types</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-list_otp_types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-list_otp_types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-logout">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-logout">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-logout">
</span>
<span id="execution-results-POSTapi-v1-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-logout" data-method="POST"
      data-path="api/v1/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-logout"
                    onclick="tryItOut('POSTapi-v1-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-logout"
                    onclick="cancelTryOut('POSTapi-v1-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-validate_otp">POST api/v1/validate_otp</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-validate_otp">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/validate_otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-validate_otp">
</span>
<span id="execution-results-POSTapi-v1-validate_otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-validate_otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-validate_otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-validate_otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-validate_otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-validate_otp" data-method="POST"
      data-path="api/v1/validate_otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-validate_otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-validate_otp"
                    onclick="tryItOut('POSTapi-v1-validate_otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-validate_otp"
                    onclick="cancelTryOut('POSTapi-v1-validate_otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-validate_otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/validate_otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-validate_otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-validate_otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-resend_otp--otp_type-">GET api/v1/resend_otp/{otp_type}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-resend_otp--otp_type-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/resend_otp/sunt"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-resend_otp--otp_type-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-resend_otp--otp_type-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-resend_otp--otp_type-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-resend_otp--otp_type-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-resend_otp--otp_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-resend_otp--otp_type-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-resend_otp--otp_type-" data-method="GET"
      data-path="api/v1/resend_otp/{otp_type}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-resend_otp--otp_type-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-resend_otp--otp_type-"
                    onclick="tryItOut('GETapi-v1-resend_otp--otp_type-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-resend_otp--otp_type-"
                    onclick="cancelTryOut('GETapi-v1-resend_otp--otp_type-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-resend_otp--otp_type-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/resend_otp/{otp_type}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-resend_otp--otp_type-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-resend_otp--otp_type-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>otp_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="otp_type"                data-endpoint="GETapi-v1-resend_otp--otp_type-"
               value="sunt"
               data-component="url">
    <br>
<p>Example: <code>sunt</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-create_password">POST api/v1/create_password</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-create_password">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/create_password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-create_password">
</span>
<span id="execution-results-POSTapi-v1-create_password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-create_password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-create_password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-create_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-create_password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-create_password" data-method="POST"
      data-path="api/v1/create_password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-create_password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-create_password"
                    onclick="tryItOut('POSTapi-v1-create_password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-create_password"
                    onclick="cancelTryOut('POSTapi-v1-create_password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-create_password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/create_password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-create_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-create_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-initialize_transaction">POST api/v1/initialize_transaction</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-initialize_transaction">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/initialize_transaction"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-initialize_transaction">
</span>
<span id="execution-results-POSTapi-v1-initialize_transaction" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-initialize_transaction"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-initialize_transaction"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-initialize_transaction" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-initialize_transaction">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-initialize_transaction" data-method="POST"
      data-path="api/v1/initialize_transaction"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-initialize_transaction', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-initialize_transaction"
                    onclick="tryItOut('POSTapi-v1-initialize_transaction');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-initialize_transaction"
                    onclick="cancelTryOut('POSTapi-v1-initialize_transaction');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-initialize_transaction"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/initialize_transaction</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-initialize_transaction"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-initialize_transaction"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-verify_transaction--ref-">GET api/v1/verify_transaction/{ref}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-verify_transaction--ref-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/verify_transaction/est"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-verify_transaction--ref-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-verify_transaction--ref-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-verify_transaction--ref-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-verify_transaction--ref-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-verify_transaction--ref-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-verify_transaction--ref-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-verify_transaction--ref-" data-method="GET"
      data-path="api/v1/verify_transaction/{ref}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-verify_transaction--ref-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-verify_transaction--ref-"
                    onclick="tryItOut('GETapi-v1-verify_transaction--ref-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-verify_transaction--ref-"
                    onclick="cancelTryOut('GETapi-v1-verify_transaction--ref-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-verify_transaction--ref-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/verify_transaction/{ref}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-verify_transaction--ref-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-verify_transaction--ref-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ref</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ref"                data-endpoint="GETapi-v1-verify_transaction--ref-"
               value="est"
               data-component="url">
    <br>
<p>Example: <code>est</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-initialize_change_password">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-initialize_change_password">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/initialize_change_password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "old_password": "sed"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-initialize_change_password">
</span>
<span id="execution-results-POSTapi-v1-initialize_change_password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-initialize_change_password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-initialize_change_password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-initialize_change_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-initialize_change_password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-initialize_change_password" data-method="POST"
      data-path="api/v1/initialize_change_password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-initialize_change_password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-initialize_change_password"
                    onclick="tryItOut('POSTapi-v1-initialize_change_password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-initialize_change_password"
                    onclick="cancelTryOut('POSTapi-v1-initialize_change_password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-initialize_change_password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/initialize_change_password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-initialize_change_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-initialize_change_password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>old_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="old_password"                data-endpoint="POSTapi-v1-initialize_change_password"
               value="sed"
               data-component="body">
    <br>
<p>Example: <code>sed</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-bvn_verification">POST api/v1/bvn_verification</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bvn_verification">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bvn_verification"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-bvn_verification">
</span>
<span id="execution-results-POSTapi-v1-bvn_verification" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-bvn_verification"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-bvn_verification"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-bvn_verification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-bvn_verification">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-bvn_verification" data-method="POST"
      data-path="api/v1/bvn_verification"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-bvn_verification', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-bvn_verification"
                    onclick="tryItOut('POSTapi-v1-bvn_verification');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-bvn_verification"
                    onclick="cancelTryOut('POSTapi-v1-bvn_verification');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-bvn_verification"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/bvn_verification</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-bvn_verification"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-bvn_verification"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-dashboard">GET api/v1/dashboard</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-dashboard">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/dashboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-dashboard">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-dashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-dashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-dashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-dashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-dashboard" data-method="GET"
      data-path="api/v1/dashboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-dashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-dashboard"
                    onclick="tryItOut('GETapi-v1-dashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-dashboard"
                    onclick="cancelTryOut('GETapi-v1-dashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-dashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-profile_details">GET api/v1/profile_details</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-profile_details">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/profile_details"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-profile_details">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-profile_details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-profile_details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-profile_details"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-profile_details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-profile_details">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-profile_details" data-method="GET"
      data-path="api/v1/profile_details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-profile_details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-profile_details"
                    onclick="tryItOut('GETapi-v1-profile_details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-profile_details"
                    onclick="cancelTryOut('GETapi-v1-profile_details');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-profile_details"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/profile_details</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-profile_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-profile_details"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-balance_enquiry">GET api/v1/balance_enquiry</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-balance_enquiry">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/balance_enquiry"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-balance_enquiry">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-balance_enquiry" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-balance_enquiry"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-balance_enquiry"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-balance_enquiry" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-balance_enquiry">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-balance_enquiry" data-method="GET"
      data-path="api/v1/balance_enquiry"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-balance_enquiry', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-balance_enquiry"
                    onclick="tryItOut('GETapi-v1-balance_enquiry');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-balance_enquiry"
                    onclick="cancelTryOut('GETapi-v1-balance_enquiry');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-balance_enquiry"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/balance_enquiry</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-balance_enquiry"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-balance_enquiry"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-get_bank_list">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-get_bank_list">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/get_bank_list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-get_bank_list">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-get_bank_list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-get_bank_list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-get_bank_list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-get_bank_list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-get_bank_list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-get_bank_list" data-method="GET"
      data-path="api/v1/get_bank_list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-get_bank_list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-get_bank_list"
                    onclick="tryItOut('GETapi-v1-get_bank_list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-get_bank_list"
                    onclick="cancelTryOut('GETapi-v1-get_bank_list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-get_bank_list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/get_bank_list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-get_bank_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-get_bank_list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-get_bill_payment_category">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-get_bill_payment_category">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/get_bill_payment_category"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-get_bill_payment_category">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-get_bill_payment_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-get_bill_payment_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-get_bill_payment_category"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-get_bill_payment_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-get_bill_payment_category">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-get_bill_payment_category" data-method="GET"
      data-path="api/v1/get_bill_payment_category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-get_bill_payment_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-get_bill_payment_category"
                    onclick="tryItOut('GETapi-v1-get_bill_payment_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-get_bill_payment_category"
                    onclick="cancelTryOut('GETapi-v1-get_bill_payment_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-get_bill_payment_category"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/get_bill_payment_category</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-get_bill_payment_category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-get_bill_payment_category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-profile-phone-verification-initiate">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-profile-phone-verification-initiate">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/profile/phone/verification/initiate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone_code": "accusamus",
    "phone_number": "sunt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-profile-phone-verification-initiate">
</span>
<span id="execution-results-POSTapi-v1-profile-phone-verification-initiate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-profile-phone-verification-initiate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-profile-phone-verification-initiate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-profile-phone-verification-initiate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-profile-phone-verification-initiate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-profile-phone-verification-initiate" data-method="POST"
      data-path="api/v1/profile/phone/verification/initiate"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-profile-phone-verification-initiate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-profile-phone-verification-initiate"
                    onclick="tryItOut('POSTapi-v1-profile-phone-verification-initiate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-profile-phone-verification-initiate"
                    onclick="cancelTryOut('POSTapi-v1-profile-phone-verification-initiate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-profile-phone-verification-initiate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/profile/phone/verification/initiate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-profile-phone-verification-initiate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-profile-phone-verification-initiate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_code"                data-endpoint="POSTapi-v1-profile-phone-verification-initiate"
               value="accusamus"
               data-component="body">
    <br>
<p>Example: <code>accusamus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_number"                data-endpoint="POSTapi-v1-profile-phone-verification-initiate"
               value="sunt"
               data-component="body">
    <br>
<p>Example: <code>sunt</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-profile-phone-verification-complete">POST api/v1/profile/phone/verification/complete</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-profile-phone-verification-complete">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/profile/phone/verification/complete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code_id": "aut",
    "code": "3269"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-profile-phone-verification-complete">
</span>
<span id="execution-results-POSTapi-v1-profile-phone-verification-complete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-profile-phone-verification-complete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-profile-phone-verification-complete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-profile-phone-verification-complete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-profile-phone-verification-complete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-profile-phone-verification-complete" data-method="POST"
      data-path="api/v1/profile/phone/verification/complete"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-profile-phone-verification-complete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-profile-phone-verification-complete"
                    onclick="tryItOut('POSTapi-v1-profile-phone-verification-complete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-profile-phone-verification-complete"
                    onclick="cancelTryOut('POSTapi-v1-profile-phone-verification-complete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-profile-phone-verification-complete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/profile/phone/verification/complete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-profile-phone-verification-complete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-profile-phone-verification-complete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code_id"                data-endpoint="POSTapi-v1-profile-phone-verification-complete"
               value="aut"
               data-component="body">
    <br>
<p>Example: <code>aut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v1-profile-phone-verification-complete"
               value="3269"
               data-component="body">
    <br>
<p>Must be 4 digits. Example: <code>3269</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-initialize_change_transaction_pin">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-initialize_change_transaction_pin">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/initialize_change_transaction_pin"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "old_pin": "3161"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-initialize_change_transaction_pin">
</span>
<span id="execution-results-POSTapi-v1-initialize_change_transaction_pin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-initialize_change_transaction_pin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-initialize_change_transaction_pin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-initialize_change_transaction_pin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-initialize_change_transaction_pin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-initialize_change_transaction_pin" data-method="POST"
      data-path="api/v1/initialize_change_transaction_pin"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-initialize_change_transaction_pin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-initialize_change_transaction_pin"
                    onclick="tryItOut('POSTapi-v1-initialize_change_transaction_pin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-initialize_change_transaction_pin"
                    onclick="cancelTryOut('POSTapi-v1-initialize_change_transaction_pin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-initialize_change_transaction_pin"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/initialize_change_transaction_pin</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-initialize_change_transaction_pin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-initialize_change_transaction_pin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>old_pin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="old_pin"                data-endpoint="POSTapi-v1-initialize_change_transaction_pin"
               value="3161"
               data-component="body">
    <br>
<p>Must be 4 digits. Example: <code>3161</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-username_check--email-">GET api/v1/username_check/{email}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-username_check--email-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/username_check/beaulah.jaskolski@example.com"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-username_check--email-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-username_check--email-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-username_check--email-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-username_check--email-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-username_check--email-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-username_check--email-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-username_check--email-" data-method="GET"
      data-path="api/v1/username_check/{email}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-username_check--email-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-username_check--email-"
                    onclick="tryItOut('GETapi-v1-username_check--email-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-username_check--email-"
                    onclick="cancelTryOut('GETapi-v1-username_check--email-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-username_check--email-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/username_check/{email}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-username_check--email-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-username_check--email-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="GETapi-v1-username_check--email-"
               value="beaulah.jaskolski@example.com"
               data-component="url">
    <br>
<p>Example: <code>beaulah.jaskolski@example.com</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-create_transaction_pin">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-create_transaction_pin">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/create_transaction_pin"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pin": "3491",
    "pin_confirmation": "7102"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-create_transaction_pin">
</span>
<span id="execution-results-POSTapi-v1-create_transaction_pin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-create_transaction_pin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-create_transaction_pin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-create_transaction_pin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-create_transaction_pin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-create_transaction_pin" data-method="POST"
      data-path="api/v1/create_transaction_pin"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-create_transaction_pin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-create_transaction_pin"
                    onclick="tryItOut('POSTapi-v1-create_transaction_pin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-create_transaction_pin"
                    onclick="cancelTryOut('POSTapi-v1-create_transaction_pin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-create_transaction_pin"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/create_transaction_pin</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-create_transaction_pin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-create_transaction_pin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pin"                data-endpoint="POSTapi-v1-create_transaction_pin"
               value="3491"
               data-component="body">
    <br>
<p>Must be 4 digits. Example: <code>3491</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pin_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pin_confirmation"                data-endpoint="POSTapi-v1-create_transaction_pin"
               value="7102"
               data-component="body">
    <br>
<p>Must be 4 digits. Example: <code>7102</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-beneficial_enquiry">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-beneficial_enquiry">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/beneficial_enquiry"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "account_no": 19542010.550346404,
    "bank_code": "et"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-beneficial_enquiry">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-beneficial_enquiry" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-beneficial_enquiry"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-beneficial_enquiry"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-beneficial_enquiry" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-beneficial_enquiry">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-beneficial_enquiry" data-method="GET"
      data-path="api/v1/beneficial_enquiry"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-beneficial_enquiry', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-beneficial_enquiry"
                    onclick="tryItOut('GETapi-v1-beneficial_enquiry');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-beneficial_enquiry"
                    onclick="cancelTryOut('GETapi-v1-beneficial_enquiry');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-beneficial_enquiry"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/beneficial_enquiry</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-beneficial_enquiry"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-beneficial_enquiry"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>account_no</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="account_no"                data-endpoint="GETapi-v1-beneficial_enquiry"
               value="19542010.550346"
               data-component="body">
    <br>
<p>Example: <code>19542010.550346</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bank_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bank_code"                data-endpoint="GETapi-v1-beneficial_enquiry"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-transfer">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-transfer">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/transfer"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "to_bank_code": "eligendi",
    "to_account_no": "corporis",
    "amount": "637",
    "transaction_pin": "ut",
    "naration": "consequuntur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-transfer">
</span>
<span id="execution-results-POSTapi-v1-transfer" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-transfer"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-transfer"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-transfer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-transfer">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-transfer" data-method="POST"
      data-path="api/v1/transfer"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-transfer', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-transfer"
                    onclick="tryItOut('POSTapi-v1-transfer');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-transfer"
                    onclick="cancelTryOut('POSTapi-v1-transfer');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-transfer"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/transfer</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-transfer"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-transfer"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>to_bank_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="to_bank_code"                data-endpoint="POSTapi-v1-transfer"
               value="eligendi"
               data-component="body">
    <br>
<p>Example: <code>eligendi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>to_account_no</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="to_account_no"                data-endpoint="POSTapi-v1-transfer"
               value="corporis"
               data-component="body">
    <br>
<p>Example: <code>corporis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="amount"                data-endpoint="POSTapi-v1-transfer"
               value="637"
               data-component="body">
    <br>
<p>Must match the regex /^\d+(.\d{1,2})?$/. Example: <code>637</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transaction_pin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="transaction_pin"                data-endpoint="POSTapi-v1-transfer"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naration</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naration"                data-endpoint="POSTapi-v1-transfer"
               value="consequuntur"
               data-component="body">
    <br>
<p>Example: <code>consequuntur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-transfer_to_visaro">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-transfer_to_visaro">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/transfer_to_visaro"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "est",
    "amount": "8102",
    "transaction_pin": "eos",
    "naration": "dolore"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-transfer_to_visaro">
</span>
<span id="execution-results-POSTapi-v1-transfer_to_visaro" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-transfer_to_visaro"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-transfer_to_visaro"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-transfer_to_visaro" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-transfer_to_visaro">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-transfer_to_visaro" data-method="POST"
      data-path="api/v1/transfer_to_visaro"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-transfer_to_visaro', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-transfer_to_visaro"
                    onclick="tryItOut('POSTapi-v1-transfer_to_visaro');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-transfer_to_visaro"
                    onclick="cancelTryOut('POSTapi-v1-transfer_to_visaro');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-transfer_to_visaro"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/transfer_to_visaro</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-transfer_to_visaro"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-transfer_to_visaro"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="username"                data-endpoint="POSTapi-v1-transfer_to_visaro"
               value="est"
               data-component="body">
    <br>
<p>Example: <code>est</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="amount"                data-endpoint="POSTapi-v1-transfer_to_visaro"
               value="8102"
               data-component="body">
    <br>
<p>Must match the regex /^\d+(.\d{1,2})?$/. Example: <code>8102</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transaction_pin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="transaction_pin"                data-endpoint="POSTapi-v1-transfer_to_visaro"
               value="eos"
               data-component="body">
    <br>
<p>Example: <code>eos</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naration</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naration"                data-endpoint="POSTapi-v1-transfer_to_visaro"
               value="dolore"
               data-component="body">
    <br>
<p>Example: <code>dolore</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-company_profile_update">POST api/v1/company_profile_update</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-company_profile_update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/company_profile_update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "certificate_of_incoporation": "ckphgfdheidbthlirllfkoajf",
    "memart": "tejxdfnccjfulyxhvet",
    "acfta_certificate": "mhjhno",
    "business_name": "numquam",
    "business_address": "ea",
    "business_email": "dolores",
    "country_of_origin": "enim",
    "port_of_origin": "consectetur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-company_profile_update">
</span>
<span id="execution-results-POSTapi-v1-company_profile_update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-company_profile_update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-company_profile_update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-company_profile_update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-company_profile_update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-company_profile_update" data-method="POST"
      data-path="api/v1/company_profile_update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-company_profile_update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-company_profile_update"
                    onclick="tryItOut('POSTapi-v1-company_profile_update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-company_profile_update"
                    onclick="cancelTryOut('POSTapi-v1-company_profile_update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-company_profile_update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/company_profile_update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-company_profile_update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-company_profile_update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>certificate_of_incoporation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="certificate_of_incoporation"                data-endpoint="POSTapi-v1-company_profile_update"
               value="ckphgfdheidbthlirllfkoajf"
               data-component="body">
    <br>
<p>Must not be greater than 2048 characters. Example: <code>ckphgfdheidbthlirllfkoajf</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>memart</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="memart"                data-endpoint="POSTapi-v1-company_profile_update"
               value="tejxdfnccjfulyxhvet"
               data-component="body">
    <br>
<p>Must not be greater than 2048 characters. Example: <code>tejxdfnccjfulyxhvet</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>acfta_certificate</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="acfta_certificate"                data-endpoint="POSTapi-v1-company_profile_update"
               value="mhjhno"
               data-component="body">
    <br>
<p>Must not be greater than 2048 characters. Example: <code>mhjhno</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_name"                data-endpoint="POSTapi-v1-company_profile_update"
               value="numquam"
               data-component="body">
    <br>
<p>Example: <code>numquam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_address"                data-endpoint="POSTapi-v1-company_profile_update"
               value="ea"
               data-component="body">
    <br>
<p>Example: <code>ea</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_email"                data-endpoint="POSTapi-v1-company_profile_update"
               value="dolores"
               data-component="body">
    <br>
<p>Example: <code>dolores</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_of_origin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_of_origin"                data-endpoint="POSTapi-v1-company_profile_update"
               value="enim"
               data-component="body">
    <br>
<p>Example: <code>enim</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>port_of_origin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="port_of_origin"                data-endpoint="POSTapi-v1-company_profile_update"
               value="consectetur"
               data-component="body">
    <br>
<p>Example: <code>consectetur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-profile_update">Access method to authenticate.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-profile_update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/profile_update"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('account_type', '5');
body.append('profile_pics', document.querySelector('input[name="profile_pics"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-profile_update">
</span>
<span id="execution-results-POSTapi-v1-profile_update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-profile_update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-profile_update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-profile_update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-profile_update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-profile_update" data-method="POST"
      data-path="api/v1/profile_update"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-profile_update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-profile_update"
                    onclick="tryItOut('POSTapi-v1-profile_update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-profile_update"
                    onclick="cancelTryOut('POSTapi-v1-profile_update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-profile_update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/profile_update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-profile_update"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-profile_update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_1</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone_1"                data-endpoint="POSTapi-v1-profile_update"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_2</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone_2"                data-endpoint="POSTapi-v1-profile_update"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>account_type</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="account_type"                data-endpoint="POSTapi-v1-profile_update"
               value="5"
               data-component="body">
    <br>
<p>Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_pics</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="profile_pics"                data-endpoint="POSTapi-v1-profile_update"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>/private/var/folders/b_/pg__x_0s2m9dd414vd7df8x40000gn/T/phpxfl8lC</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-articles">GET api/v1/articles</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-articles">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-articles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-articles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-articles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-articles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-articles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-articles" data-method="GET"
      data-path="api/v1/articles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-articles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-articles"
                    onclick="tryItOut('GETapi-v1-articles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-articles"
                    onclick="cancelTryOut('GETapi-v1-articles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-articles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/articles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-articles">POST api/v1/articles</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-articles">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-articles">
</span>
<span id="execution-results-POSTapi-v1-articles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-articles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-articles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-articles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-articles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-articles" data-method="POST"
      data-path="api/v1/articles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-articles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-articles"
                    onclick="tryItOut('POSTapi-v1-articles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-articles"
                    onclick="cancelTryOut('POSTapi-v1-articles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-articles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/articles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-articles--id-">GET api/v1/articles/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles/unde"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-articles--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-articles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-articles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-articles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-articles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-articles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-articles--id-" data-method="GET"
      data-path="api/v1/articles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-articles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-articles--id-"
                    onclick="tryItOut('GETapi-v1-articles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-articles--id-"
                    onclick="cancelTryOut('GETapi-v1-articles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-articles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/articles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-articles--id-"
               value="unde"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>unde</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-articles--id-">PUT api/v1/articles/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-articles--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles/omnis"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-articles--id-">
</span>
<span id="execution-results-PUTapi-v1-articles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-articles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-articles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-articles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-articles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-articles--id-" data-method="PUT"
      data-path="api/v1/articles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-articles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-articles--id-"
                    onclick="tryItOut('PUTapi-v1-articles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-articles--id-"
                    onclick="cancelTryOut('PUTapi-v1-articles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-articles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/articles/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/articles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-articles--id-"
               value="omnis"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>omnis</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-articles--id-">DELETE api/v1/articles/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-articles--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-articles--id-">
</span>
<span id="execution-results-DELETEapi-v1-articles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-articles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-articles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-articles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-articles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-articles--id-" data-method="DELETE"
      data-path="api/v1/articles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-articles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-articles--id-"
                    onclick="tryItOut('DELETEapi-v1-articles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-articles--id-"
                    onclick="cancelTryOut('DELETEapi-v1-articles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-articles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/articles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-articles--id-"
               value="et"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>et</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-articles--id--comments">GET api/v1/articles/{id}/comments</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles--id--comments">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles/corrupti/comments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-articles--id--comments">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-articles--id--comments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-articles--id--comments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-articles--id--comments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-articles--id--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-articles--id--comments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-articles--id--comments" data-method="GET"
      data-path="api/v1/articles/{id}/comments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-articles--id--comments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-articles--id--comments"
                    onclick="tryItOut('GETapi-v1-articles--id--comments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-articles--id--comments"
                    onclick="cancelTryOut('GETapi-v1-articles--id--comments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-articles--id--comments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/articles/{id}/comments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-articles--id--comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-articles--id--comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-articles--id--comments"
               value="corrupti"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>corrupti</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-articles--id--comments">POST api/v1/articles/{id}/comments</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-articles--id--comments">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles/ut/comments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-articles--id--comments">
</span>
<span id="execution-results-POSTapi-v1-articles--id--comments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-articles--id--comments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-articles--id--comments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-articles--id--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-articles--id--comments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-articles--id--comments" data-method="POST"
      data-path="api/v1/articles/{id}/comments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-articles--id--comments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-articles--id--comments"
                    onclick="tryItOut('POSTapi-v1-articles--id--comments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-articles--id--comments"
                    onclick="cancelTryOut('POSTapi-v1-articles--id--comments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-articles--id--comments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/articles/{id}/comments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-articles--id--comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-articles--id--comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-v1-articles--id--comments"
               value="ut"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>ut</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-articles--id--likes">GET api/v1/articles/{id}/likes</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles--id--likes">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles/corrupti/likes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-articles--id--likes">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-articles--id--likes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-articles--id--likes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-articles--id--likes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-articles--id--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-articles--id--likes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-articles--id--likes" data-method="GET"
      data-path="api/v1/articles/{id}/likes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-articles--id--likes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-articles--id--likes"
                    onclick="tryItOut('GETapi-v1-articles--id--likes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-articles--id--likes"
                    onclick="cancelTryOut('GETapi-v1-articles--id--likes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-articles--id--likes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/articles/{id}/likes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-articles--id--likes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-articles--id--likes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-articles--id--likes"
               value="corrupti"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>corrupti</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-articles--id--views">GET api/v1/articles/{id}/views</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles--id--views">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles/aut/views"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-articles--id--views">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-articles--id--views" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-articles--id--views"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-articles--id--views"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-articles--id--views" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-articles--id--views">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-articles--id--views" data-method="GET"
      data-path="api/v1/articles/{id}/views"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-articles--id--views', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-articles--id--views"
                    onclick="tryItOut('GETapi-v1-articles--id--views');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-articles--id--views"
                    onclick="cancelTryOut('GETapi-v1-articles--id--views');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-articles--id--views"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/articles/{id}/views</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-articles--id--views"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-articles--id--views"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-articles--id--views"
               value="aut"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>aut</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-articles--id--likes">PUT api/v1/articles/{id}/likes</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-articles--id--likes">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles/possimus/likes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-articles--id--likes">
</span>
<span id="execution-results-PUTapi-v1-articles--id--likes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-articles--id--likes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-articles--id--likes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-articles--id--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-articles--id--likes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-articles--id--likes" data-method="PUT"
      data-path="api/v1/articles/{id}/likes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-articles--id--likes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-articles--id--likes"
                    onclick="tryItOut('PUTapi-v1-articles--id--likes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-articles--id--likes"
                    onclick="cancelTryOut('PUTapi-v1-articles--id--likes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-articles--id--likes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/articles/{id}/likes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-articles--id--likes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-articles--id--likes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-articles--id--likes"
               value="possimus"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>possimus</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-articles--id--views">PUT api/v1/articles/{id}/views</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-articles--id--views">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/articles/mollitia/views"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-articles--id--views">
</span>
<span id="execution-results-PUTapi-v1-articles--id--views" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-articles--id--views"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-articles--id--views"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-articles--id--views" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-articles--id--views">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-articles--id--views" data-method="PUT"
      data-path="api/v1/articles/{id}/views"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-articles--id--views', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-articles--id--views"
                    onclick="tryItOut('PUTapi-v1-articles--id--views');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-articles--id--views"
                    onclick="cancelTryOut('PUTapi-v1-articles--id--views');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-articles--id--views"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/articles/{id}/views</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-articles--id--views"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-articles--id--views"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-articles--id--views"
               value="mollitia"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>mollitia</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-aviation-widget-initialize">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-aviation-widget-initialize">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/aviation/widget/initialize"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-aviation-widget-initialize">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-aviation-widget-initialize" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-aviation-widget-initialize"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-aviation-widget-initialize"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-aviation-widget-initialize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-aviation-widget-initialize">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-aviation-widget-initialize" data-method="GET"
      data-path="api/v1/aviation/widget/initialize"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-aviation-widget-initialize', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-aviation-widget-initialize"
                    onclick="tryItOut('GETapi-v1-aviation-widget-initialize');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-aviation-widget-initialize"
                    onclick="cancelTryOut('GETapi-v1-aviation-widget-initialize');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-aviation-widget-initialize"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/aviation/widget/initialize</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-aviation-widget-initialize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-aviation-widget-initialize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-aviation-flights-bookings">GET api/v1/aviation/flights/bookings</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-aviation-flights-bookings">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/aviation/flights/bookings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-aviation-flights-bookings">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-aviation-flights-bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-aviation-flights-bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-aviation-flights-bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-aviation-flights-bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-aviation-flights-bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-aviation-flights-bookings" data-method="GET"
      data-path="api/v1/aviation/flights/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-aviation-flights-bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-aviation-flights-bookings"
                    onclick="tryItOut('GETapi-v1-aviation-flights-bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-aviation-flights-bookings"
                    onclick="cancelTryOut('GETapi-v1-aviation-flights-bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-aviation-flights-bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/aviation/flights/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-aviation-flights-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-aviation-flights-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-aviation-flights-bookings--id-">GET api/v1/aviation/flights/bookings/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-aviation-flights-bookings--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/aviation/flights/bookings/ea"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-aviation-flights-bookings--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-aviation-flights-bookings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-aviation-flights-bookings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-aviation-flights-bookings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-aviation-flights-bookings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-aviation-flights-bookings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-aviation-flights-bookings--id-" data-method="GET"
      data-path="api/v1/aviation/flights/bookings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-aviation-flights-bookings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-aviation-flights-bookings--id-"
                    onclick="tryItOut('GETapi-v1-aviation-flights-bookings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-aviation-flights-bookings--id-"
                    onclick="cancelTryOut('GETapi-v1-aviation-flights-bookings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-aviation-flights-bookings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/aviation/flights/bookings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-aviation-flights-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-aviation-flights-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-aviation-flights-bookings--id-"
               value="ea"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>ea</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-aviation-flights-bookings-submit">POST api/v1/aviation/flights/bookings/submit</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-aviation-flights-bookings-submit">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/aviation/flights/bookings/submit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "widget_data": [],
    "origin": "mobile"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-aviation-flights-bookings-submit">
</span>
<span id="execution-results-POSTapi-v1-aviation-flights-bookings-submit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-aviation-flights-bookings-submit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-aviation-flights-bookings-submit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-aviation-flights-bookings-submit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-aviation-flights-bookings-submit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-aviation-flights-bookings-submit" data-method="POST"
      data-path="api/v1/aviation/flights/bookings/submit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-aviation-flights-bookings-submit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-aviation-flights-bookings-submit"
                    onclick="tryItOut('POSTapi-v1-aviation-flights-bookings-submit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-aviation-flights-bookings-submit"
                    onclick="cancelTryOut('POSTapi-v1-aviation-flights-bookings-submit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-aviation-flights-bookings-submit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/aviation/flights/bookings/submit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-aviation-flights-bookings-submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-aviation-flights-bookings-submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>widget_data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="widget_data"                data-endpoint="POSTapi-v1-aviation-flights-bookings-submit"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="origin"                data-endpoint="POSTapi-v1-aviation-flights-bookings-submit"
               value="mobile"
               data-component="body">
    <br>
<p>Example: <code>mobile</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>mobile</code></li> <li><code>web</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-aviation-flights-bookings--id--confirm">POST api/v1/aviation/flights/bookings/{id}/confirm</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-aviation-flights-bookings--id--confirm">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/aviation/flights/bookings/consequuntur/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "booking_id": 12,
    "title": "sint",
    "firstname": "recusandae",
    "lastname": "doloribus",
    "phone_code": "voluptate",
    "phone_number": "doloribus",
    "nationality": "nemo",
    "date_of_birth": "quidem",
    "email": "dakota52@example.net"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-aviation-flights-bookings--id--confirm">
</span>
<span id="execution-results-POSTapi-v1-aviation-flights-bookings--id--confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-aviation-flights-bookings--id--confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-aviation-flights-bookings--id--confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-aviation-flights-bookings--id--confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-aviation-flights-bookings--id--confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-aviation-flights-bookings--id--confirm" data-method="POST"
      data-path="api/v1/aviation/flights/bookings/{id}/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-aviation-flights-bookings--id--confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-aviation-flights-bookings--id--confirm"
                    onclick="tryItOut('POSTapi-v1-aviation-flights-bookings--id--confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-aviation-flights-bookings--id--confirm"
                    onclick="cancelTryOut('POSTapi-v1-aviation-flights-bookings--id--confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-aviation-flights-bookings--id--confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/aviation/flights/bookings/{id}/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="consequuntur"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>consequuntur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="booking_id"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="12"
               data-component="body">
    <br>
<p>Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="sint"
               data-component="body">
    <br>
<p>Example: <code>sint</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>firstname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="firstname"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="recusandae"
               data-component="body">
    <br>
<p>Example: <code>recusandae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lastname"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="doloribus"
               data-component="body">
    <br>
<p>Example: <code>doloribus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_code"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="voluptate"
               data-component="body">
    <br>
<p>Example: <code>voluptate</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_number"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="doloribus"
               data-component="body">
    <br>
<p>Example: <code>doloribus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nationality</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nationality"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="nemo"
               data-component="body">
    <br>
<p>Example: <code>nemo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_of_birth</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_of_birth"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="quidem"
               data-component="body">
    <br>
<p>Example: <code>quidem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--confirm"
               value="dakota52@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>dakota52@example.net</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-aviation-flights-bookings--id--payments-options">GET api/v1/aviation/flights/bookings/{id}/payments/options</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-aviation-flights-bookings--id--payments-options">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/aviation/flights/bookings/nulla/payments/options"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-aviation-flights-bookings--id--payments-options">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-aviation-flights-bookings--id--payments-options" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-aviation-flights-bookings--id--payments-options"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-aviation-flights-bookings--id--payments-options"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-aviation-flights-bookings--id--payments-options" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-aviation-flights-bookings--id--payments-options">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-aviation-flights-bookings--id--payments-options" data-method="GET"
      data-path="api/v1/aviation/flights/bookings/{id}/payments/options"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-aviation-flights-bookings--id--payments-options', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-aviation-flights-bookings--id--payments-options"
                    onclick="tryItOut('GETapi-v1-aviation-flights-bookings--id--payments-options');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-aviation-flights-bookings--id--payments-options"
                    onclick="cancelTryOut('GETapi-v1-aviation-flights-bookings--id--payments-options');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-aviation-flights-bookings--id--payments-options"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/aviation/flights/bookings/{id}/payments/options</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-aviation-flights-bookings--id--payments-options"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-aviation-flights-bookings--id--payments-options"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-aviation-flights-bookings--id--payments-options"
               value="nulla"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>nulla</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-">GET api/v1/aviation/flights/bookings/{id}/payments/options/{option_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/aviation/flights/bookings/maxime/payments/options/nisi"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-" data-method="GET"
      data-path="api/v1/aviation/flights/bookings/{id}/payments/options/{option_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-"
                    onclick="tryItOut('GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-"
                    onclick="cancelTryOut('GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/aviation/flights/bookings/{id}/payments/options/{option_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-"
               value="maxime"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>maxime</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>option_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="option_id"                data-endpoint="GETapi-v1-aviation-flights-bookings--id--payments-options--option_id-"
               value="nisi"
               data-component="url">
    <br>
<p>The ID of the option. Example: <code>nisi</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-aviation-flights-bookings--id--payments-confirm">POST api/v1/aviation/flights/bookings/{id}/payments/confirm</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-aviation-flights-bookings--id--payments-confirm">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/aviation/flights/bookings/nobis/payments/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "booking_id": 7,
    "payment_option_id": 1,
    "amount": 7,
    "payment_installment_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-aviation-flights-bookings--id--payments-confirm">
</span>
<span id="execution-results-POSTapi-v1-aviation-flights-bookings--id--payments-confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-aviation-flights-bookings--id--payments-confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-aviation-flights-bookings--id--payments-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-aviation-flights-bookings--id--payments-confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-aviation-flights-bookings--id--payments-confirm" data-method="POST"
      data-path="api/v1/aviation/flights/bookings/{id}/payments/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-aviation-flights-bookings--id--payments-confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
                    onclick="tryItOut('POSTapi-v1-aviation-flights-bookings--id--payments-confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
                    onclick="cancelTryOut('POSTapi-v1-aviation-flights-bookings--id--payments-confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/aviation/flights/bookings/{id}/payments/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
               value="nobis"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>nobis</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="booking_id"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
               value="7"
               data-component="body">
    <br>
<p>Example: <code>7</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_option_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="payment_option_id"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
               value="1"
               data-component="body">
    <br>
<p>Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
               value="7"
               data-component="body">
    <br>
<p>Example: <code>7</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_installment_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="payment_installment_id"                data-endpoint="POSTapi-v1-aviation-flights-bookings--id--payments-confirm"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-bnpl-transactions-widget-initialize">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-transactions-widget-initialize">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/transactions/widget/initialize"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-transactions-widget-initialize">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-transactions-widget-initialize" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-transactions-widget-initialize"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-transactions-widget-initialize"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-transactions-widget-initialize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-transactions-widget-initialize">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-transactions-widget-initialize" data-method="GET"
      data-path="api/v1/bnpl/transactions/widget/initialize"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-transactions-widget-initialize', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-transactions-widget-initialize"
                    onclick="tryItOut('GETapi-v1-bnpl-transactions-widget-initialize');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-transactions-widget-initialize"
                    onclick="cancelTryOut('GETapi-v1-bnpl-transactions-widget-initialize');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-transactions-widget-initialize"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/transactions/widget/initialize</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-transactions-widget-initialize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-transactions-widget-initialize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-bnpl-transactions-flights-bookings">GET api/v1/bnpl/transactions/flights/bookings</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-transactions-flights-bookings">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/transactions/flights/bookings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-transactions-flights-bookings">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-transactions-flights-bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-transactions-flights-bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-transactions-flights-bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-transactions-flights-bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-transactions-flights-bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-transactions-flights-bookings" data-method="GET"
      data-path="api/v1/bnpl/transactions/flights/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-transactions-flights-bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-transactions-flights-bookings"
                    onclick="tryItOut('GETapi-v1-bnpl-transactions-flights-bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-transactions-flights-bookings"
                    onclick="cancelTryOut('GETapi-v1-bnpl-transactions-flights-bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-transactions-flights-bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/transactions/flights/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-bnpl-transactions-flights-bookings--id-">GET api/v1/bnpl/transactions/flights/bookings/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-transactions-flights-bookings--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/transactions/flights/bookings/esse"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-transactions-flights-bookings--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-transactions-flights-bookings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-transactions-flights-bookings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-transactions-flights-bookings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-transactions-flights-bookings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-transactions-flights-bookings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-transactions-flights-bookings--id-" data-method="GET"
      data-path="api/v1/bnpl/transactions/flights/bookings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-transactions-flights-bookings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-transactions-flights-bookings--id-"
                    onclick="tryItOut('GETapi-v1-bnpl-transactions-flights-bookings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-transactions-flights-bookings--id-"
                    onclick="cancelTryOut('GETapi-v1-bnpl-transactions-flights-bookings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-transactions-flights-bookings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/transactions/flights/bookings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id-"
               value="esse"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>esse</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-bnpl-transactions-flights-bookings-submit">POST api/v1/bnpl/transactions/flights/bookings/submit</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bnpl-transactions-flights-bookings-submit">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/transactions/flights/bookings/submit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "widget_data": [],
    "origin": "mobile"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-bnpl-transactions-flights-bookings-submit">
</span>
<span id="execution-results-POSTapi-v1-bnpl-transactions-flights-bookings-submit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-bnpl-transactions-flights-bookings-submit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-bnpl-transactions-flights-bookings-submit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-bnpl-transactions-flights-bookings-submit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-bnpl-transactions-flights-bookings-submit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-bnpl-transactions-flights-bookings-submit" data-method="POST"
      data-path="api/v1/bnpl/transactions/flights/bookings/submit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-bnpl-transactions-flights-bookings-submit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-bnpl-transactions-flights-bookings-submit"
                    onclick="tryItOut('POSTapi-v1-bnpl-transactions-flights-bookings-submit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-bnpl-transactions-flights-bookings-submit"
                    onclick="cancelTryOut('POSTapi-v1-bnpl-transactions-flights-bookings-submit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-bnpl-transactions-flights-bookings-submit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/bnpl/transactions/flights/bookings/submit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings-submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings-submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>widget_data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="widget_data"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings-submit"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="origin"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings-submit"
               value="mobile"
               data-component="body">
    <br>
<p>Example: <code>mobile</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>mobile</code></li> <li><code>web</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm">POST api/v1/bnpl/transactions/flights/bookings/{id}/confirm</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/transactions/flights/bookings/nihil/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "booking_id": 13,
    "title": "est",
    "firstname": "ducimus",
    "lastname": "velit",
    "phone_code": "nam",
    "phone_number": "libero",
    "nationality": "ipsum",
    "date_of_birth": "deleniti",
    "email": "bernier.terrell@example.org"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm">
</span>
<span id="execution-results-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm" data-method="POST"
      data-path="api/v1/bnpl/transactions/flights/bookings/{id}/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
                    onclick="tryItOut('POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
                    onclick="cancelTryOut('POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/bnpl/transactions/flights/bookings/{id}/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="nihil"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>nihil</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="booking_id"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="13"
               data-component="body">
    <br>
<p>Example: <code>13</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="est"
               data-component="body">
    <br>
<p>Example: <code>est</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>firstname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="firstname"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="ducimus"
               data-component="body">
    <br>
<p>Example: <code>ducimus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lastname"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="velit"
               data-component="body">
    <br>
<p>Example: <code>velit</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_code"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="nam"
               data-component="body">
    <br>
<p>Example: <code>nam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_number"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="libero"
               data-component="body">
    <br>
<p>Example: <code>libero</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nationality</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nationality"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="ipsum"
               data-component="body">
    <br>
<p>Example: <code>ipsum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_of_birth</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_of_birth"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="deleniti"
               data-component="body">
    <br>
<p>Example: <code>deleniti</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--confirm"
               value="bernier.terrell@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>bernier.terrell@example.org</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options">GET api/v1/bnpl/transactions/flights/bookings/{id}/payments/options</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/transactions/flights/bookings/quas/payments/options"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options" data-method="GET"
      data-path="api/v1/bnpl/transactions/flights/bookings/{id}/payments/options"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options"
                    onclick="tryItOut('GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options"
                    onclick="cancelTryOut('GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/transactions/flights/bookings/{id}/payments/options</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options"
               value="quas"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>quas</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-">GET api/v1/bnpl/transactions/flights/bookings/{id}/payments/options/{option_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/transactions/flights/bookings/dolores/payments/options/modi"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-" data-method="GET"
      data-path="api/v1/bnpl/transactions/flights/bookings/{id}/payments/options/{option_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-"
                    onclick="tryItOut('GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-"
                    onclick="cancelTryOut('GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/transactions/flights/bookings/{id}/payments/options/{option_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-"
               value="dolores"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>dolores</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>option_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="option_id"                data-endpoint="GETapi-v1-bnpl-transactions-flights-bookings--id--payments-options--option_id-"
               value="modi"
               data-component="url">
    <br>
<p>The ID of the option. Example: <code>modi</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm">POST api/v1/bnpl/transactions/flights/bookings/{id}/payments/confirm</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/transactions/flights/bookings/aliquam/payments/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "booking_id": 15,
    "payment_option_id": 6,
    "amount": 1,
    "payment_installment_id": 13
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm">
</span>
<span id="execution-results-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm" data-method="POST"
      data-path="api/v1/bnpl/transactions/flights/bookings/{id}/payments/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
                    onclick="tryItOut('POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
                    onclick="cancelTryOut('POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/bnpl/transactions/flights/bookings/{id}/payments/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
               value="aliquam"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>aliquam</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="booking_id"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
               value="15"
               data-component="body">
    <br>
<p>Example: <code>15</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_option_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="payment_option_id"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
               value="6"
               data-component="body">
    <br>
<p>Example: <code>6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
               value="1"
               data-component="body">
    <br>
<p>Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_installment_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="payment_installment_id"                data-endpoint="POSTapi-v1-bnpl-transactions-flights-bookings--id--payments-confirm"
               value="13"
               data-component="body">
    <br>
<p>Example: <code>13</code></p>
        </div>
        </form>

                <h1 id="invoices">Invoices</h1>

    

                                <h2 id="invoices-POSTapi-v1-bnpl-merchants-manage-invoices">Create new invoice.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bnpl-merchants-manage-invoices">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/manage/invoices"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "merchant_id": 6,
    "code": "wnga",
    "title": "pariatur",
    "currency": "USD",
    "amount": 26078361.9,
    "vat": 2080.63,
    "tax": 957769.41316218,
    "terms_and_conditions": "ea"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-bnpl-merchants-manage-invoices">
</span>
<span id="execution-results-POSTapi-v1-bnpl-merchants-manage-invoices" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-bnpl-merchants-manage-invoices"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-bnpl-merchants-manage-invoices"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-bnpl-merchants-manage-invoices" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-bnpl-merchants-manage-invoices">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-bnpl-merchants-manage-invoices" data-method="POST"
      data-path="api/v1/bnpl/merchants/manage/invoices"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-bnpl-merchants-manage-invoices', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-bnpl-merchants-manage-invoices"
                    onclick="tryItOut('POSTapi-v1-bnpl-merchants-manage-invoices');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-bnpl-merchants-manage-invoices"
                    onclick="cancelTryOut('POSTapi-v1-bnpl-merchants-manage-invoices');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-bnpl-merchants-manage-invoices"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/bnpl/merchants/manage/invoices</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>merchant_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="merchant_id"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="6"
               data-component="body">
    <br>
<p>Example: <code>6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="wnga"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Must not be greater than 6 characters. Example: <code>wnga</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="pariatur"
               data-component="body">
    <br>
<p>Example: <code>pariatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>currency</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="currency"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="USD"
               data-component="body">
    <br>
<p>Example: <code>USD</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>NGN</code></li> <li><code>USD</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="26078361.9"
               data-component="body">
    <br>
<p>Example: <code>26078361.9</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>vat</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="vat"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="2080.63"
               data-component="body">
    <br>
<p>Example: <code>2080.63</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tax</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="tax"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="957769.41316218"
               data-component="body">
    <br>
<p>Example: <code>957769.41316218</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>items</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="items"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>terms_and_conditions</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="terms_and_conditions"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value="ea"
               data-component="body">
    <br>
<p>Example: <code>ea</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="meta"                data-endpoint="POSTapi-v1-bnpl-merchants-manage-invoices"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="invoices-GETapi-v1-bnpl-merchants-manage-invoices">Fetch all invoices.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-merchants-manage-invoices">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/manage/invoices"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-merchants-manage-invoices">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-merchants-manage-invoices" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-merchants-manage-invoices"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-merchants-manage-invoices"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-merchants-manage-invoices" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-merchants-manage-invoices">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-merchants-manage-invoices" data-method="GET"
      data-path="api/v1/bnpl/merchants/manage/invoices"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-merchants-manage-invoices', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-merchants-manage-invoices"
                    onclick="tryItOut('GETapi-v1-bnpl-merchants-manage-invoices');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-merchants-manage-invoices"
                    onclick="cancelTryOut('GETapi-v1-bnpl-merchants-manage-invoices');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-merchants-manage-invoices"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/merchants/manage/invoices</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="invoices-GETapi-v1-bnpl-merchants-manage-invoices-user">Fetch user active invoices.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-merchants-manage-invoices-user">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/manage/invoices/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-merchants-manage-invoices-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-merchants-manage-invoices-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-merchants-manage-invoices-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-merchants-manage-invoices-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-merchants-manage-invoices-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-merchants-manage-invoices-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-merchants-manage-invoices-user" data-method="GET"
      data-path="api/v1/bnpl/merchants/manage/invoices/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-merchants-manage-invoices-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-merchants-manage-invoices-user"
                    onclick="tryItOut('GETapi-v1-bnpl-merchants-manage-invoices-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-merchants-manage-invoices-user"
                    onclick="cancelTryOut('GETapi-v1-bnpl-merchants-manage-invoices-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-merchants-manage-invoices-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/merchants/manage/invoices/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="invoices-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-">Get an invoice record.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/manage/invoices/perferendis"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-" data-method="GET"
      data-path="api/v1/bnpl/merchants/manage/invoices/{invoice_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-"
                    onclick="tryItOut('GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-"
                    onclick="cancelTryOut('GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/merchants/manage/invoices/{invoice_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="invoice_id"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices--invoice_id-"
               value="perferendis"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>perferendis</code></p>
            </div>
                    </form>

                    <h2 id="invoices-GETapi-v1-bnpl-merchants-manage-invoices-code--code-">Fetch invoice by code.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-merchants-manage-invoices-code--code-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/manage/invoices/code/qui"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-merchants-manage-invoices-code--code-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-merchants-manage-invoices-code--code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-merchants-manage-invoices-code--code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-merchants-manage-invoices-code--code-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-merchants-manage-invoices-code--code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-merchants-manage-invoices-code--code-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-merchants-manage-invoices-code--code-" data-method="GET"
      data-path="api/v1/bnpl/merchants/manage/invoices/code/{code}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-merchants-manage-invoices-code--code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-merchants-manage-invoices-code--code-"
                    onclick="tryItOut('GETapi-v1-bnpl-merchants-manage-invoices-code--code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-merchants-manage-invoices-code--code-"
                    onclick="cancelTryOut('GETapi-v1-bnpl-merchants-manage-invoices-code--code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-merchants-manage-invoices-code--code-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/merchants/manage/invoices/code/{code}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices-code--code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices-code--code-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices-code--code-"
               value="qui"
               data-component="url">
    <br>
<p>The code. Example: <code>qui</code></p>
            </div>
                    </form>

                    <h2 id="invoices-GETapi-v1-bnpl-merchants-manage-invoices-number--number-">Fetch invoice by number.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-merchants-manage-invoices-number--number-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/manage/invoices/number/omnis"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-merchants-manage-invoices-number--number-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-merchants-manage-invoices-number--number-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-merchants-manage-invoices-number--number-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-merchants-manage-invoices-number--number-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-merchants-manage-invoices-number--number-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-merchants-manage-invoices-number--number-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-merchants-manage-invoices-number--number-" data-method="GET"
      data-path="api/v1/bnpl/merchants/manage/invoices/number/{number}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-merchants-manage-invoices-number--number-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-merchants-manage-invoices-number--number-"
                    onclick="tryItOut('GETapi-v1-bnpl-merchants-manage-invoices-number--number-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-merchants-manage-invoices-number--number-"
                    onclick="cancelTryOut('GETapi-v1-bnpl-merchants-manage-invoices-number--number-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-merchants-manage-invoices-number--number-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/merchants/manage/invoices/number/{number}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices-number--number-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices-number--number-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="number"                data-endpoint="GETapi-v1-bnpl-merchants-manage-invoices-number--number-"
               value="omnis"
               data-component="url">
    <br>
<p>The number. Example: <code>omnis</code></p>
            </div>
                    </form>

                    <h2 id="invoices-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update">Update an invoice.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/manage/invoices/at/update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "merchant_id": 18,
    "title": "non",
    "currency": "NGN",
    "amount": 128,
    "vat": 71381.96781625,
    "tax": 40933.9555964,
    "items": [],
    "meta": []
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update">
</span>
<span id="execution-results-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update" data-method="PATCH"
      data-path="api/v1/bnpl/merchants/manage/invoices/{invoice_id}/update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
                    onclick="tryItOut('PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
                    onclick="cancelTryOut('PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/bnpl/merchants/manage/invoices/{invoice_id}/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="invoice_id"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value="at"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>at</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>merchant_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="merchant_id"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value="18"
               data-component="body">
    <br>
<p>Example: <code>18</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value="non"
               data-component="body">
    <br>
<p>Example: <code>non</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>currency</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="currency"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value="NGN"
               data-component="body">
    <br>
<p>Example: <code>NGN</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>NGN</code></li> <li><code>USD</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="amount"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value="128"
               data-component="body">
    <br>
<p>Example: <code>128</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>vat</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="vat"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value="71381.96781625"
               data-component="body">
    <br>
<p>Example: <code>71381.96781625</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tax</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="tax"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value="40933.9555964"
               data-component="body">
    <br>
<p>Example: <code>40933.9555964</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>items</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="items"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="meta"                data-endpoint="PATCHapi-v1-bnpl-merchants-manage-invoices--invoice_id--update"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="invoices-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete">Delete invoice.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/manage/invoices/et/delete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete">
</span>
<span id="execution-results-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete" data-method="DELETE"
      data-path="api/v1/bnpl/merchants/manage/invoices/{invoice_id}/delete"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete"
                    onclick="tryItOut('DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete"
                    onclick="cancelTryOut('DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/bnpl/merchants/manage/invoices/{invoice_id}/delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>invoice_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="invoice_id"                data-endpoint="DELETEapi-v1-bnpl-merchants-manage-invoices--invoice_id--delete"
               value="et"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>et</code></p>
            </div>
                    </form>

                <h1 id="merchant">Merchant</h1>

    

                                <h2 id="merchant-POSTapi-v1-bnpl-merchants">Register Merchant.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bnpl-merchants">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "business_name": "molestias",
    "business_type": "sole_proprietorship",
    "business_email": "royce18@example.com",
    "business_phone_code": "non",
    "business_phone": "eos",
    "business_registration_number": "et",
    "acronym": "enim",
    "official_name": "nisi",
    "website": "http:\/\/zboncak.net\/",
    "presence": "virtual",
    "logo": "ut",
    "country_id": 13
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-bnpl-merchants">
</span>
<span id="execution-results-POSTapi-v1-bnpl-merchants" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-bnpl-merchants"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-bnpl-merchants"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-bnpl-merchants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-bnpl-merchants">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-bnpl-merchants" data-method="POST"
      data-path="api/v1/bnpl/merchants"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-bnpl-merchants', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-bnpl-merchants"
                    onclick="tryItOut('POSTapi-v1-bnpl-merchants');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-bnpl-merchants"
                    onclick="cancelTryOut('POSTapi-v1-bnpl-merchants');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-bnpl-merchants"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/bnpl/merchants</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_name"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="molestias"
               data-component="body">
    <br>
<p>Example: <code>molestias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_type"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="sole_proprietorship"
               data-component="body">
    <br>
<p>Example: <code>sole_proprietorship</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>corporation</code></li> <li><code>sole_proprietorship</code></li> <li><code>partnership</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_email"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="royce18@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>royce18@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_phone_code"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="non"
               data-component="body">
    <br>
<p>Example: <code>non</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_phone"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="eos"
               data-component="body">
    <br>
<p>Example: <code>eos</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_registration_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_registration_number"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>acronym</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="acronym"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="enim"
               data-component="body">
    <br>
<p>Example: <code>enim</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>official_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="official_name"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="nisi"
               data-component="body">
    <br>
<p>Example: <code>nisi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="website"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="http://zboncak.net/"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://zboncak.net/</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>presence</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="presence"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="virtual"
               data-component="body">
    <br>
<p>Example: <code>virtual</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>physical</code></li> <li><code>virtual</code></li> <li><code>hybrid</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="country_id"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value="13"
               data-component="body">
    <br>
<p>Example: <code>13</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>customization</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="customization"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="meta"                data-endpoint="POSTapi-v1-bnpl-merchants"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="merchant-GETapi-v1-bnpl-merchants">Fetch all Merchants.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-merchants">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-merchants">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-merchants" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-merchants"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-merchants"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-merchants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-merchants">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-merchants" data-method="GET"
      data-path="api/v1/bnpl/merchants"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-merchants', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-merchants"
                    onclick="tryItOut('GETapi-v1-bnpl-merchants');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-merchants"
                    onclick="cancelTryOut('GETapi-v1-bnpl-merchants');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-merchants"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/merchants</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-merchants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-merchants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="merchant-GETapi-v1-bnpl-merchants--merchant_id-">Get a merchant.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-merchants--merchant_id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/sint"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-merchants--merchant_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-merchants--merchant_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-merchants--merchant_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-merchants--merchant_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-merchants--merchant_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-merchants--merchant_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-merchants--merchant_id-" data-method="GET"
      data-path="api/v1/bnpl/merchants/{merchant_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-merchants--merchant_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-merchants--merchant_id-"
                    onclick="tryItOut('GETapi-v1-bnpl-merchants--merchant_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-merchants--merchant_id-"
                    onclick="cancelTryOut('GETapi-v1-bnpl-merchants--merchant_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-merchants--merchant_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/merchants/{merchant_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-merchants--merchant_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-merchants--merchant_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>merchant_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="merchant_id"                data-endpoint="GETapi-v1-bnpl-merchants--merchant_id-"
               value="sint"
               data-component="url">
    <br>
<p>The ID of the merchant. Example: <code>sint</code></p>
            </div>
                    </form>

                    <h2 id="merchant-PATCHapi-v1-bnpl-merchants--merchant_id--update">Update merchant record.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-bnpl-merchants--merchant_id--update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/dolorem/update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "business_name": "quo",
    "business_type": "sole_proprietorship",
    "business_email": "vbatz@example.com",
    "business_phone_code": "adipisci",
    "business_phone": "enim",
    "business_registration_number": "nihil",
    "acronym": "aut",
    "official_name": "rem",
    "website": "https:\/\/bosco.com\/repudiandae-dolores-rerum-aut-rerum.html",
    "presence": "hybrid",
    "logo": "libero",
    "country_id": 3,
    "category": "dolorem"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-bnpl-merchants--merchant_id--update">
</span>
<span id="execution-results-PATCHapi-v1-bnpl-merchants--merchant_id--update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-bnpl-merchants--merchant_id--update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-bnpl-merchants--merchant_id--update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-bnpl-merchants--merchant_id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-bnpl-merchants--merchant_id--update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-bnpl-merchants--merchant_id--update" data-method="PATCH"
      data-path="api/v1/bnpl/merchants/{merchant_id}/update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-bnpl-merchants--merchant_id--update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-bnpl-merchants--merchant_id--update"
                    onclick="tryItOut('PATCHapi-v1-bnpl-merchants--merchant_id--update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-bnpl-merchants--merchant_id--update"
                    onclick="cancelTryOut('PATCHapi-v1-bnpl-merchants--merchant_id--update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-bnpl-merchants--merchant_id--update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/bnpl/merchants/{merchant_id}/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>merchant_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="merchant_id"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="dolorem"
               data-component="url">
    <br>
<p>The ID of the merchant. Example: <code>dolorem</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_name"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="quo"
               data-component="body">
    <br>
<p>Example: <code>quo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_type"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="sole_proprietorship"
               data-component="body">
    <br>
<p>Example: <code>sole_proprietorship</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>corporation</code></li> <li><code>sole_proprietorship</code></li> <li><code>partnership</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_email"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="vbatz@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>vbatz@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_phone_code"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="adipisci"
               data-component="body">
    <br>
<p>Example: <code>adipisci</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_phone"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="enim"
               data-component="body">
    <br>
<p>Example: <code>enim</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_registration_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_registration_number"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="nihil"
               data-component="body">
    <br>
<p>Example: <code>nihil</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>acronym</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="acronym"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="aut"
               data-component="body">
    <br>
<p>Example: <code>aut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>official_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="official_name"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="rem"
               data-component="body">
    <br>
<p>Example: <code>rem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="website"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="https://bosco.com/repudiandae-dolores-rerum-aut-rerum.html"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://bosco.com/repudiandae-dolores-rerum-aut-rerum.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>presence</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="presence"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="hybrid"
               data-component="body">
    <br>
<p>Example: <code>hybrid</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>physical</code></li> <li><code>virtual</code></li> <li><code>hybrid</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="libero"
               data-component="body">
    <br>
<p>Example: <code>libero</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="country_id"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="3"
               data-component="body">
    <br>
<p>Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>customization</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="customization"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="meta"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--update"
               value="dolorem"
               data-component="body">
    <br>
<p>Example: <code>dolorem</code></p>
        </div>
        </form>

                    <h2 id="merchant-DELETEapi-v1-bnpl-merchants--merchant_id--delete">Delete merchant record.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-bnpl-merchants--merchant_id--delete">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/sint/delete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-bnpl-merchants--merchant_id--delete">
</span>
<span id="execution-results-DELETEapi-v1-bnpl-merchants--merchant_id--delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-bnpl-merchants--merchant_id--delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-bnpl-merchants--merchant_id--delete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-bnpl-merchants--merchant_id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-bnpl-merchants--merchant_id--delete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-bnpl-merchants--merchant_id--delete" data-method="DELETE"
      data-path="api/v1/bnpl/merchants/{merchant_id}/delete"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-bnpl-merchants--merchant_id--delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-bnpl-merchants--merchant_id--delete"
                    onclick="tryItOut('DELETEapi-v1-bnpl-merchants--merchant_id--delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-bnpl-merchants--merchant_id--delete"
                    onclick="cancelTryOut('DELETEapi-v1-bnpl-merchants--merchant_id--delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-bnpl-merchants--merchant_id--delete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/bnpl/merchants/{merchant_id}/delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-bnpl-merchants--merchant_id--delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-bnpl-merchants--merchant_id--delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>merchant_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="merchant_id"                data-endpoint="DELETEapi-v1-bnpl-merchants--merchant_id--delete"
               value="sint"
               data-component="url">
    <br>
<p>The ID of the merchant. Example: <code>sint</code></p>
            </div>
                    </form>

                                <h2 id="merchant-compliance">Compliance</h2>
                                                    <h2 id="merchant-GETapi-v1-bnpl-merchants--merchant_id--compliance">Fetch Merchant Compliance</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-merchants--merchant_id--compliance">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/nulla/compliance"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-merchants--merchant_id--compliance">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-merchants--merchant_id--compliance" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-merchants--merchant_id--compliance"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-merchants--merchant_id--compliance"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-merchants--merchant_id--compliance" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-merchants--merchant_id--compliance">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-merchants--merchant_id--compliance" data-method="GET"
      data-path="api/v1/bnpl/merchants/{merchant_id}/compliance"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-merchants--merchant_id--compliance', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-merchants--merchant_id--compliance"
                    onclick="tryItOut('GETapi-v1-bnpl-merchants--merchant_id--compliance');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-merchants--merchant_id--compliance"
                    onclick="cancelTryOut('GETapi-v1-bnpl-merchants--merchant_id--compliance');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-merchants--merchant_id--compliance"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/merchants/{merchant_id}/compliance</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-merchants--merchant_id--compliance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-merchants--merchant_id--compliance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>merchant_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="merchant_id"                data-endpoint="GETapi-v1-bnpl-merchants--merchant_id--compliance"
               value="nulla"
               data-component="url">
    <br>
<p>The ID of the merchant. Example: <code>nulla</code></p>
            </div>
                    </form>

                    <h2 id="merchant-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update">Update Merchant Compliance</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/deleniti/compliance/update"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('business_name', 'non');
body.append('business_registration_number', 'labore');
body.append('identity_number_of_director', 'quibusdam');
body.append('bvn', 'neque');
body.append('account_name', 'provident');
body.append('account_number', 'quia');
body.append('bank_name', 'ad');
body.append('bank_code', 'doloremque');
body.append('website', 'sint');
body.append('country_id', '18');
body.append('state', 'et');
body.append('lga', 'maiores');
body.append('address1', 'consequatur');
body.append('address2', 'ut');
body.append('description', 'Quis harum numquam nemo ratione impedit asperiores.');
body.append('email', 'ymcglynn@example.com');
body.append('phone_code', 'facilis');
body.append('phone', 'rerum');
body.append('conflict_resolution_email', 'herman.van@example.org');
body.append('conflict_resolution_phone_code', 'consequatur');
body.append('conflict_resolution_phone', 'quae');
body.append('business_registration_document', document.querySelector('input[name="business_registration_document"]').files[0]);
body.append('business_license_document', document.querySelector('input[name="business_license_document"]').files[0]);
body.append('business_tax_document', document.querySelector('input[name="business_tax_document"]').files[0]);
body.append('business_certificate_of_incorporation_document', document.querySelector('input[name="business_certificate_of_incorporation_document"]').files[0]);
body.append('business_proof_of_address_document', document.querySelector('input[name="business_proof_of_address_document"]').files[0]);
body.append('identity_document_of_director', document.querySelector('input[name="identity_document_of_director"]').files[0]);
body.append('logo', document.querySelector('input[name="logo"]').files[0]);

fetch(url, {
    method: "PATCH",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update">
</span>
<span id="execution-results-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update" data-method="PATCH"
      data-path="api/v1/bnpl/merchants/{merchant_id}/compliance/update"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
                    onclick="tryItOut('PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
                    onclick="cancelTryOut('PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/bnpl/merchants/{merchant_id}/compliance/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>merchant_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="merchant_id"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="deleniti"
               data-component="url">
    <br>
<p>The ID of the merchant. Example: <code>deleniti</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_name"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="non"
               data-component="body">
    <br>
<p>Example: <code>non</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_registration_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="business_registration_number"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="labore"
               data-component="body">
    <br>
<p>Example: <code>labore</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_registration_document</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="business_registration_document"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Example: <code>/private/var/folders/b_/pg__x_0s2m9dd414vd7df8x40000gn/T/phpnePyeh</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_license_document</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="business_license_document"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Example: <code>/private/var/folders/b_/pg__x_0s2m9dd414vd7df8x40000gn/T/phpJZ3RBk</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_tax_document</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="business_tax_document"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Example: <code>/private/var/folders/b_/pg__x_0s2m9dd414vd7df8x40000gn/T/phpdLFk9O</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_certificate_of_incorporation_document</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="business_certificate_of_incorporation_document"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Example: <code>/private/var/folders/b_/pg__x_0s2m9dd414vd7df8x40000gn/T/phphhA7FP</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_proof_of_address_document</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="business_proof_of_address_document"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Example: <code>/private/var/folders/b_/pg__x_0s2m9dd414vd7df8x40000gn/T/phptpGQMo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>identity_number_of_director</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="identity_number_of_director"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="quibusdam"
               data-component="body">
    <br>
<p>Example: <code>quibusdam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>identity_document_of_director</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="identity_document_of_director"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Example: <code>/private/var/folders/b_/pg__x_0s2m9dd414vd7df8x40000gn/T/phpDB35Ov</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bvn</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="bvn"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="neque"
               data-component="body">
    <br>
<p>Example: <code>neque</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>account_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="account_name"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="provident"
               data-component="body">
    <br>
<p>Example: <code>provident</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>account_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="account_number"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="quia"
               data-component="body">
    <br>
<p>Example: <code>quia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bank_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="bank_name"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="ad"
               data-component="body">
    <br>
<p>Example: <code>ad</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bank_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="bank_code"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="doloremque"
               data-component="body">
    <br>
<p>Example: <code>doloremque</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="website"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="sint"
               data-component="body">
    <br>
<p>Example: <code>sint</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="logo"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Example: <code>/private/var/folders/b_/pg__x_0s2m9dd414vd7df8x40000gn/T/phpJiBfy6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="country_id"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="18"
               data-component="body">
    <br>
<p>Example: <code>18</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>state</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="state"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lga</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="lga"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="maiores"
               data-component="body">
    <br>
<p>Example: <code>maiores</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address1</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address1"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address2</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address2"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="Quis harum numquam nemo ratione impedit asperiores."
               data-component="body">
    <br>
<p>Example: <code>Quis harum numquam nemo ratione impedit asperiores.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="ymcglynn@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>ymcglynn@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_code"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="facilis"
               data-component="body">
    <br>
<p>Example: <code>facilis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="rerum"
               data-component="body">
    <br>
<p>Example: <code>rerum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_email"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="herman.van@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>herman.van@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_phone_code"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>conflict_resolution_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="conflict_resolution_phone"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value="quae"
               data-component="body">
    <br>
<p>Example: <code>quae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="meta"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--compliance-update"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                                <h2 id="merchant-settings">Settings</h2>
                                                    <h2 id="merchant-GETapi-v1-bnpl-merchants--merchant_id--settings">fetch Merchant Settings</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-bnpl-merchants--merchant_id--settings">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/totam/settings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-bnpl-merchants--merchant_id--settings">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;api_status&quot;: &quot;401&quot;,
    &quot;message&quot;: &quot;Unauthorized&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-bnpl-merchants--merchant_id--settings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-bnpl-merchants--merchant_id--settings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-bnpl-merchants--merchant_id--settings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-bnpl-merchants--merchant_id--settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-bnpl-merchants--merchant_id--settings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-bnpl-merchants--merchant_id--settings" data-method="GET"
      data-path="api/v1/bnpl/merchants/{merchant_id}/settings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-bnpl-merchants--merchant_id--settings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-bnpl-merchants--merchant_id--settings"
                    onclick="tryItOut('GETapi-v1-bnpl-merchants--merchant_id--settings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-bnpl-merchants--merchant_id--settings"
                    onclick="cancelTryOut('GETapi-v1-bnpl-merchants--merchant_id--settings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-bnpl-merchants--merchant_id--settings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/bnpl/merchants/{merchant_id}/settings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-bnpl-merchants--merchant_id--settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-bnpl-merchants--merchant_id--settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>merchant_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="merchant_id"                data-endpoint="GETapi-v1-bnpl-merchants--merchant_id--settings"
               value="totam"
               data-component="url">
    <br>
<p>The ID of the merchant. Example: <code>totam</code></p>
            </div>
                    </form>

                    <h2 id="merchant-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update">Update Merchant Settings</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://visaronigeria.test/api/v1/bnpl/merchants/sint/settings/update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "payout_interval": "monthly",
    "payout_frequency": 8
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update">
</span>
<span id="execution-results-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update" data-method="PATCH"
      data-path="api/v1/bnpl/merchants/{merchant_id}/settings/update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-bnpl-merchants--merchant_id--settings-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
                    onclick="tryItOut('PATCHapi-v1-bnpl-merchants--merchant_id--settings-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
                    onclick="cancelTryOut('PATCHapi-v1-bnpl-merchants--merchant_id--settings-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/bnpl/merchants/{merchant_id}/settings/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>merchant_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="merchant_id"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
               value="sint"
               data-component="url">
    <br>
<p>The ID of the merchant. Example: <code>sint</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payout_interval</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payout_interval"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
               value="monthly"
               data-component="body">
    <br>
<p>Example: <code>monthly</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>daily</code></li> <li><code>weekly</code></li> <li><code>monthly</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payout_frequency</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="payout_frequency"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
               value="8"
               data-component="body">
    <br>
<p>Example: <code>8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="meta"                data-endpoint="PATCHapi-v1-bnpl-merchants--merchant_id--settings-update"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
