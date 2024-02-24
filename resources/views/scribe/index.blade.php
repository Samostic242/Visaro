<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API_GATEWAY Documentation</title>

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
        var tryItOutBaseUrl = "http://127.0.0.1:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.30.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.30.0.js") }}"></script>

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
                    <ul id="tocify-header-authentication" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authentication">
                    <a href="#authentication">Authentication</a>
                </li>
                                    <ul id="tocify-subheader-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-v2-auth-user-login">
                                <a href="#authentication-POSTapi-v2-auth-user-login">Logs the user in</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-POSTapi-v2-auth-user-forgot-password">
                                <a href="#authentication-POSTapi-v2-auth-user-forgot-password">Request for password reset OTP</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-POSTapi-v2-auth-user-reset-password">
                                <a href="#authentication-POSTapi-v2-auth-user-reset-password">Verifies the OTP and Update the user new password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-GETapi-v2-auth-user">
                                <a href="#authentication-GETapi-v2-auth-user">Fecthes the Authenticated User</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-banking" class="tocify-header">
                <li class="tocify-item level-1" data-unique="banking">
                    <a href="#banking">Banking</a>
                </li>
                                    <ul id="tocify-subheader-banking" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="banking-POSTapi-v2-account-banking-beneficiary">
                                <a href="#banking-POSTapi-v2-account-banking-beneficiary">Add a Beneficiary to a user Profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="banking-GETapi-v2-account-banking-beneficiary">
                                <a href="#banking-GETapi-v2-account-banking-beneficiary">Get all beneficiary associated with a user</a>
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
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-newsletter" class="tocify-header">
                <li class="tocify-item level-1" data-unique="newsletter">
                    <a href="#newsletter">Newsletter</a>
                </li>
                                    <ul id="tocify-subheader-newsletter" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="newsletter-POSTapi-v2-newsletter-subscribe">
                                <a href="#newsletter-POSTapi-v2-newsletter-subscribe">Saves a User Details for Newsletter subscription</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-onboarding" class="tocify-header">
                <li class="tocify-item level-1" data-unique="onboarding">
                    <a href="#onboarding">Onboarding</a>
                </li>
                                    <ul id="tocify-subheader-onboarding" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="onboarding-POSTapi-v1-signin">
                                <a href="#onboarding-POSTapi-v1-signin">Onboard new user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="onboarding-POSTapi-v2-onboarding-users-register">
                                <a href="#onboarding-POSTapi-v2-onboarding-users-register">Onboard new user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="onboarding-POSTapi-v2-onboarding-users-email">
                                <a href="#onboarding-POSTapi-v2-onboarding-users-email">Send One Time Password Email to the User</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="onboarding-POSTapi-v2-onboarding-users-update">
                                <a href="#onboarding-POSTapi-v2-onboarding-users-update">Completes the user registration process and update the user details</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-verifying-users" class="tocify-header">
                <li class="tocify-item level-1" data-unique="verifying-users">
                    <a href="#verifying-users">Verifying Users</a>
                </li>
                                    <ul id="tocify-subheader-verifying-users" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="verifying-users-POSTapi-v2-onboarding-users-email-resend-otp">
                                <a href="#verifying-users-POSTapi-v2-onboarding-users-email-resend-otp">Resends One time password to the user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="verifying-users-POSTapi-v2-onboarding-users-verify-email-otp">
                                <a href="#verifying-users-POSTapi-v2-onboarding-users-verify-email-otp">Verifies the user One time password</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 24, 2024</li>
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

        <h1 id="authentication">Authentication</h1>

    

                                <h2 id="authentication-POSTapi-v2-auth-user-login">Logs the user in</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-auth-user-login">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/auth/user/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "vzieme@example.net",
    "password": "kjigmc!i\"B3-t&lt;+"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v2-auth-user-login">
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;code&quot;: &quot;01&quot;,
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Incorrect username or password&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v2-auth-user-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-auth-user-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-auth-user-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-auth-user-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-auth-user-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-auth-user-login" data-method="POST"
      data-path="api/v2/auth/user/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-auth-user-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-auth-user-login"
                    onclick="tryItOut('POSTapi-v2-auth-user-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-auth-user-login"
                    onclick="cancelTryOut('POSTapi-v2-auth-user-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-auth-user-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/auth/user/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-auth-user-login"
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
                              name="Accept"                data-endpoint="POSTapi-v2-auth-user-login"
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
                              name="email"                data-endpoint="POSTapi-v2-auth-user-login"
               value="vzieme@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>vzieme@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v2-auth-user-login"
               value="kjigmc!i"B3-t<+"
               data-component="body">
    <br>
<p>Example: <code>kjigmc!i"B3-t&lt;+</code></p>
        </div>
        </form>

                    <h2 id="authentication-POSTapi-v2-auth-user-forgot-password">Request for password reset OTP</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-auth-user-forgot-password">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/auth/user/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "tyra10@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v2-auth-user-forgot-password">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The selected email is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The selected email is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v2-auth-user-forgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-auth-user-forgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-auth-user-forgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-auth-user-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-auth-user-forgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-auth-user-forgot-password" data-method="POST"
      data-path="api/v2/auth/user/forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-auth-user-forgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-auth-user-forgot-password"
                    onclick="tryItOut('POSTapi-v2-auth-user-forgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-auth-user-forgot-password"
                    onclick="cancelTryOut('POSTapi-v2-auth-user-forgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-auth-user-forgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/auth/user/forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-auth-user-forgot-password"
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
                              name="Accept"                data-endpoint="POSTapi-v2-auth-user-forgot-password"
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
                              name="email"                data-endpoint="POSTapi-v2-auth-user-forgot-password"
               value="tyra10@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>tyra10@example.com</code></p>
        </div>
        </form>

                    <h2 id="authentication-POSTapi-v2-auth-user-reset-password">Verifies the OTP and Update the user new password</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-auth-user-reset-password">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/auth/user/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "rosie91@example.com",
    "code": "9588",
    "password": "XuajMQ5a;-nPG$L;h"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v2-auth-user-reset-password">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The selected email is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The selected email is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v2-auth-user-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-auth-user-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-auth-user-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-auth-user-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-auth-user-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-auth-user-reset-password" data-method="POST"
      data-path="api/v2/auth/user/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-auth-user-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-auth-user-reset-password"
                    onclick="tryItOut('POSTapi-v2-auth-user-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-auth-user-reset-password"
                    onclick="cancelTryOut('POSTapi-v2-auth-user-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-auth-user-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/auth/user/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-auth-user-reset-password"
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
                              name="Accept"                data-endpoint="POSTapi-v2-auth-user-reset-password"
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
                              name="email"                data-endpoint="POSTapi-v2-auth-user-reset-password"
               value="rosie91@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>rosie91@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v2-auth-user-reset-password"
               value="9588"
               data-component="body">
    <br>
<p>Must match the regex /[0-9]{4}/. Example: <code>9588</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v2-auth-user-reset-password"
               value="XuajMQ5a;-nPG$L;h"
               data-component="body">
    <br>
<p>Example: <code>XuajMQ5a;-nPG$L;h</code></p>
        </div>
        </form>

                    <h2 id="authentication-GETapi-v2-auth-user">Fecthes the Authenticated User</h2>

<p>
</p>



<span id="example-requests-GETapi-v2-auth-user">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/auth/user"
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

<span id="example-responses-GETapi-v2-auth-user">
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
<span id="execution-results-GETapi-v2-auth-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v2-auth-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-auth-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v2-auth-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-auth-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v2-auth-user" data-method="GET"
      data-path="api/v2/auth/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-auth-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v2-auth-user"
                    onclick="tryItOut('GETapi-v2-auth-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v2-auth-user"
                    onclick="cancelTryOut('GETapi-v2-auth-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v2-auth-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v2/auth/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v2-auth-user"
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
                              name="Accept"                data-endpoint="GETapi-v2-auth-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="banking">Banking</h1>

    

                                <h2 id="banking-POSTapi-v2-account-banking-beneficiary">Add a Beneficiary to a user Profile</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-account-banking-beneficiary">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/account/banking/beneficiary"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "account_name": "doloremque",
    "account_number": "aut",
    "bank_name": "suscipit"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v2-account-banking-beneficiary">
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
<span id="execution-results-POSTapi-v2-account-banking-beneficiary" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-account-banking-beneficiary"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-account-banking-beneficiary"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-account-banking-beneficiary" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-account-banking-beneficiary">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-account-banking-beneficiary" data-method="POST"
      data-path="api/v2/account/banking/beneficiary"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-account-banking-beneficiary', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-account-banking-beneficiary"
                    onclick="tryItOut('POSTapi-v2-account-banking-beneficiary');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-account-banking-beneficiary"
                    onclick="cancelTryOut('POSTapi-v2-account-banking-beneficiary');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-account-banking-beneficiary"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/account/banking/beneficiary</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-account-banking-beneficiary"
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
                              name="Accept"                data-endpoint="POSTapi-v2-account-banking-beneficiary"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>account_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="account_name"                data-endpoint="POSTapi-v2-account-banking-beneficiary"
               value="doloremque"
               data-component="body">
    <br>
<p>Example: <code>doloremque</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>account_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="account_number"                data-endpoint="POSTapi-v2-account-banking-beneficiary"
               value="aut"
               data-component="body">
    <br>
<p>Example: <code>aut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bank_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bank_name"                data-endpoint="POSTapi-v2-account-banking-beneficiary"
               value="suscipit"
               data-component="body">
    <br>
<p>Example: <code>suscipit</code></p>
        </div>
        </form>

                    <h2 id="banking-GETapi-v2-account-banking-beneficiary">Get all beneficiary associated with a user</h2>

<p>
</p>



<span id="example-requests-GETapi-v2-account-banking-beneficiary">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/account/banking/beneficiary"
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

<span id="example-responses-GETapi-v2-account-banking-beneficiary">
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
<span id="execution-results-GETapi-v2-account-banking-beneficiary" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v2-account-banking-beneficiary"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-account-banking-beneficiary"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v2-account-banking-beneficiary" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-account-banking-beneficiary">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v2-account-banking-beneficiary" data-method="GET"
      data-path="api/v2/account/banking/beneficiary"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-account-banking-beneficiary', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v2-account-banking-beneficiary"
                    onclick="tryItOut('GETapi-v2-account-banking-beneficiary');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v2-account-banking-beneficiary"
                    onclick="cancelTryOut('GETapi-v2-account-banking-beneficiary');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v2-account-banking-beneficiary"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v2/account/banking/beneficiary</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v2-account-banking-beneficiary"
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
                              name="Accept"                data-endpoint="GETapi-v2-account-banking-beneficiary"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
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
    "http://127.0.0.1:8000/api/documentation"
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
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;http://127.0.0.1:8000/docs/asset/swagger-ui.css?v=a5df5a49e8b66f43e7b92b0227dd272a&quot;&gt;
    &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;http://127.0.0.1:8000/docs/asset/favicon-32x32.png?v=40d4f2c38d1cd854ad463f16373cbcb6&quot; sizes=&quot;32x32&quot;/&gt;
    &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;http://127.0.0.1:8000/docs/asset/favicon-16x16.png?v=f0ae831196d55d8f4115b6c5e8ec5384&quot; sizes=&quot;16x16&quot;/&gt;
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

&lt;script src=&quot;http://127.0.0.1:8000/docs/asset/swagger-ui-bundle.js?v=b0d4b8fd1eb97e7bf6eccf174dc68524&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;http://127.0.0.1:8000/docs/asset/swagger-ui-standalone-preset.js?v=7f189733cf9a16dab8bc0a1c1f0a8b15&quot;&gt;&lt;/script&gt;
&lt;script&gt;
    window.onload = function() {
        // Build a system
        const ui = SwaggerUIBundle({
            dom_id: &#039;#swagger-ui&#039;,
            url: &quot;http://127.0.0.1:8000/docs/api-docs.json&quot;,
            operationsSorter: null,
            configUrl: null,
            validatorUrl: null,
            oauth2RedirectUrl: &quot;http://127.0.0.1:8000/api/oauth2-callback&quot;,

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
    "http://127.0.0.1:8000/api/oauth2-callback"
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
    "http://127.0.0.1:8000/api/v1/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "frami.melyna@example.org",
    "password": "mollitia"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-register">
            <blockquote>
            <p>Example response (200):</p>
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
    &quot;message&quot;: &quot;Please see errors parameter for all errors.&quot;,
    &quot;errors&quot;: {
        &quot;password&quot;: [
            &quot;The password must be at least 8 characters and include at least one uppercase letter, one lowercase letter, one numeric character, and one special character.&quot;
        ]
    }
}</code>
 </pre>
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
               value="frami.melyna@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>frami.melyna@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-register"
               value="mollitia"
               data-component="body">
    <br>
<p>Example: <code>mollitia</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-login">Login user.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-login">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "theodore.tillman@example.net",
    "password": "dolorem"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-login">
            <blockquote>
            <p>Example response (401):</p>
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
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;User authentication failed.&quot;
}</code>
 </pre>
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
               value="theodore.tillman@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>theodore.tillman@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-login"
               value="dolorem"
               data-component="body">
    <br>
<p>Example: <code>dolorem</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-refresh-token">POST api/v1/refresh-token</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-refresh-token">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/refresh-token"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
    "http://127.0.0.1:8000/api/v1/region_list/temporibus"
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
x-ratelimit-remaining: 55
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
               value="temporibus"
               data-component="url">
    <br>
<p>Example: <code>temporibus</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-country_list">GET api/v1/country_list</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-country_list">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/country_list"
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
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Successful&quot;,
    &quot;data&quot;: []
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
    "http://127.0.0.1:8000/api/v1/forgotpassword"
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
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;This email address is not associated with any account on visaro&quot;
}</code>
 </pre>
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
    "http://127.0.0.1:8000/api/v1/list_otp_types"
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
x-ratelimit-remaining: 52
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
    "http://127.0.0.1:8000/api/v1/logout"
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
    "http://127.0.0.1:8000/api/v1/validate_otp"
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
    "http://127.0.0.1:8000/api/v1/resend_otp/occaecati"
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
               value="occaecati"
               data-component="url">
    <br>
<p>Example: <code>occaecati</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-create_password">POST api/v1/create_password</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-create_password">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/create_password"
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
    "http://127.0.0.1:8000/api/v1/initialize_transaction"
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
    "http://127.0.0.1:8000/api/v1/verify_transaction/et"
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
               value="et"
               data-component="url">
    <br>
<p>Example: <code>et</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-initialize_change_password">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-initialize_change_password">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/initialize_change_password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "old_password": "reprehenderit"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-initialize_change_password">
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
               value="reprehenderit"
               data-component="body">
    <br>
<p>Example: <code>reprehenderit</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-bvn_verification">POST api/v1/bvn_verification</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-bvn_verification">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/bvn_verification"
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
    "http://127.0.0.1:8000/api/v1/dashboard"
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
    "http://127.0.0.1:8000/api/v1/profile_details"
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
    "http://127.0.0.1:8000/api/v1/balance_enquiry"
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
    "http://127.0.0.1:8000/api/v1/get_bank_list"
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
    "http://127.0.0.1:8000/api/v1/get_bill_payment_category"
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
    "http://127.0.0.1:8000/api/v1/profile/phone/verification/initiate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone_code": "veritatis",
    "phone_number": "adipisci"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-profile-phone-verification-initiate">
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
               value="veritatis"
               data-component="body">
    <br>
<p>Example: <code>veritatis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_number"                data-endpoint="POSTapi-v1-profile-phone-verification-initiate"
               value="adipisci"
               data-component="body">
    <br>
<p>Example: <code>adipisci</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-profile-phone-verification-complete">POST api/v1/profile/phone/verification/complete</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-profile-phone-verification-complete">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/profile/phone/verification/complete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code_id": "cupiditate",
    "code": "2071"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-profile-phone-verification-complete">
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
               value="cupiditate"
               data-component="body">
    <br>
<p>Example: <code>cupiditate</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v1-profile-phone-verification-complete"
               value="2071"
               data-component="body">
    <br>
<p>Must be 4 digits. Example: <code>2071</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-initialize_change_transaction_pin">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-initialize_change_transaction_pin">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/initialize_change_transaction_pin"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "old_pin": "5195"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-initialize_change_transaction_pin">
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
               value="5195"
               data-component="body">
    <br>
<p>Must be 4 digits. Example: <code>5195</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-username_check--email-">GET api/v1/username_check/{email}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-username_check--email-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/username_check/zboncak.marlon@example.org"
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
               value="zboncak.marlon@example.org"
               data-component="url">
    <br>
<p>Example: <code>zboncak.marlon@example.org</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-create_transaction_pin">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-create_transaction_pin">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/create_transaction_pin"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pin": "7311",
    "pin_confirmation": "4894"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-create_transaction_pin">
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
               value="7311"
               data-component="body">
    <br>
<p>Must be 4 digits. Example: <code>7311</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pin_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pin_confirmation"                data-endpoint="POSTapi-v1-create_transaction_pin"
               value="4894"
               data-component="body">
    <br>
<p>Must be 4 digits. Example: <code>4894</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-beneficial_enquiry">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-beneficial_enquiry">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/beneficial_enquiry"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "account_no": 258.6,
    "bank_code": "autem"
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
               value="258.6"
               data-component="body">
    <br>
<p>Example: <code>258.6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bank_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="bank_code"                data-endpoint="GETapi-v1-beneficial_enquiry"
               value="autem"
               data-component="body">
    <br>
<p>Example: <code>autem</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-transfer">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-transfer">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/transfer"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "to_bank_code": "vitae",
    "to_account_no": "voluptates",
    "amount": "4779.13",
    "transaction_pin": "repellat",
    "naration": "quo"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-transfer">
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
               value="vitae"
               data-component="body">
    <br>
<p>Example: <code>vitae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>to_account_no</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="to_account_no"                data-endpoint="POSTapi-v1-transfer"
               value="voluptates"
               data-component="body">
    <br>
<p>Example: <code>voluptates</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="amount"                data-endpoint="POSTapi-v1-transfer"
               value="4779.13"
               data-component="body">
    <br>
<p>Must match the regex /^\d+(.\d{1,2})?$/. Example: <code>4779.13</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transaction_pin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="transaction_pin"                data-endpoint="POSTapi-v1-transfer"
               value="repellat"
               data-component="body">
    <br>
<p>Example: <code>repellat</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naration</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naration"                data-endpoint="POSTapi-v1-transfer"
               value="quo"
               data-component="body">
    <br>
<p>Example: <code>quo</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-transfer_to_visaro">*****************************************************************************************************************************</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-transfer_to_visaro">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/transfer_to_visaro"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "maxime",
    "amount": "71666",
    "transaction_pin": "vero",
    "naration": "aut"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-transfer_to_visaro">
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
               value="maxime"
               data-component="body">
    <br>
<p>Example: <code>maxime</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>amount</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="amount"                data-endpoint="POSTapi-v1-transfer_to_visaro"
               value="71666"
               data-component="body">
    <br>
<p>Must match the regex /^\d+(.\d{1,2})?$/. Example: <code>71666</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>transaction_pin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="transaction_pin"                data-endpoint="POSTapi-v1-transfer_to_visaro"
               value="vero"
               data-component="body">
    <br>
<p>Example: <code>vero</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naration</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naration"                data-endpoint="POSTapi-v1-transfer_to_visaro"
               value="aut"
               data-component="body">
    <br>
<p>Example: <code>aut</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-company_profile_update">POST api/v1/company_profile_update</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-company_profile_update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/company_profile_update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "certificate_of_incoporation": "xijrlqlvyclvmpocdjcn",
    "memart": "cshthrwybt",
    "acfta_certificate": "nldm",
    "business_name": "soluta",
    "business_address": "et",
    "business_email": "aliquam",
    "country_of_origin": "enim",
    "port_of_origin": "et"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-company_profile_update">
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
               value="xijrlqlvyclvmpocdjcn"
               data-component="body">
    <br>
<p>Must not be greater than 2048 characters. Example: <code>xijrlqlvyclvmpocdjcn</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>memart</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="memart"                data-endpoint="POSTapi-v1-company_profile_update"
               value="cshthrwybt"
               data-component="body">
    <br>
<p>Must not be greater than 2048 characters. Example: <code>cshthrwybt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>acfta_certificate</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="acfta_certificate"                data-endpoint="POSTapi-v1-company_profile_update"
               value="nldm"
               data-component="body">
    <br>
<p>Must not be greater than 2048 characters. Example: <code>nldm</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_name"                data-endpoint="POSTapi-v1-company_profile_update"
               value="soluta"
               data-component="body">
    <br>
<p>Example: <code>soluta</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_address"                data-endpoint="POSTapi-v1-company_profile_update"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_email"                data-endpoint="POSTapi-v1-company_profile_update"
               value="aliquam"
               data-component="body">
    <br>
<p>Example: <code>aliquam</code></p>
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
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-profile_update">Access method to authenticate.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-profile_update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/profile_update"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('account_type', '18');
body.append('profile_pics', document.querySelector('input[name="profile_pics"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-profile_update">
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
               value="18"
               data-component="body">
    <br>
<p>Example: <code>18</code></p>
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
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\Ayobami\AppData\Local\Temp\phpAD3D.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-articles">GET api/v1/articles</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/articles"
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
    "http://127.0.0.1:8000/api/v1/articles"
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
    "http://127.0.0.1:8000/api/v1/articles/hic"
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
               value="hic"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>hic</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-articles--id-">PUT api/v1/articles/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-articles--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/articles/praesentium"
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
               value="praesentium"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>praesentium</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-articles--id-">DELETE api/v1/articles/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-articles--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/articles/est"
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
               value="est"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>est</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-articles--id--comments">GET api/v1/articles/{id}/comments</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles--id--comments">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/articles/quos/comments"
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
               value="quos"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>quos</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-articles--id--comments">POST api/v1/articles/{id}/comments</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-articles--id--comments">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/articles/atque/comments"
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
               value="atque"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>atque</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-articles--id--likes">GET api/v1/articles/{id}/likes</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles--id--likes">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/articles/temporibus/likes"
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
               value="temporibus"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>temporibus</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-articles--id--views">GET api/v1/articles/{id}/views</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles--id--views">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/articles/eos/views"
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
               value="eos"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>eos</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-articles--id--likes">PUT api/v1/articles/{id}/likes</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-articles--id--likes">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/articles/voluptas/likes"
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
               value="voluptas"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>voluptas</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-articles--id--views">PUT api/v1/articles/{id}/views</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-articles--id--views">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/articles/deserunt/views"
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
               value="deserunt"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>deserunt</code></p>
            </div>
                    </form>

                <h1 id="newsletter">Newsletter</h1>

    

                                <h2 id="newsletter-POSTapi-v2-newsletter-subscribe">Saves a User Details for Newsletter subscription</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-newsletter-subscribe">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/newsletter/subscribe"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "yaufderhar@example.org"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v2-newsletter-subscribe">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 44
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;code&quot;: &quot;00&quot;,
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;You have successfully subscribed to our newsletter&quot;,
    &quot;data&quot;: {
        &quot;email&quot;: &quot;yaufderhar@example.org&quot;,
        &quot;updated_at&quot;: &quot;2024-02-24T12:58:44.000000Z&quot;,
        &quot;created_at&quot;: &quot;2024-02-24T12:58:44.000000Z&quot;,
        &quot;id&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v2-newsletter-subscribe" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-newsletter-subscribe"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-newsletter-subscribe"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-newsletter-subscribe" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-newsletter-subscribe">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-newsletter-subscribe" data-method="POST"
      data-path="api/v2/newsletter/subscribe"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-newsletter-subscribe', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-newsletter-subscribe"
                    onclick="tryItOut('POSTapi-v2-newsletter-subscribe');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-newsletter-subscribe"
                    onclick="cancelTryOut('POSTapi-v2-newsletter-subscribe');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-newsletter-subscribe"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/newsletter/subscribe</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-newsletter-subscribe"
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
                              name="Accept"                data-endpoint="POSTapi-v2-newsletter-subscribe"
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
                              name="email"                data-endpoint="POSTapi-v2-newsletter-subscribe"
               value="yaufderhar@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>yaufderhar@example.org</code></p>
        </div>
        </form>

                <h1 id="onboarding">Onboarding</h1>

    

                                <h2 id="onboarding-POSTapi-v1-signin">Onboard new user</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-signin">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/signin"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('firstname', 'jelzfnxvvgraik');
body.append('middlename', 'ogirghtzs');
body.append('lastname', 'chnqtbfwjjiwhfgkw');
body.append('phone_code', 'zdh');
body.append('phone', '4204119362');
body.append('password', 'f[auk?B6uQT/YN;UP');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-signin">
            <blockquote>
            <p>Example response (422):</p>
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
    &quot;message&quot;: &quot;The phone code format is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone_code&quot;: [
            &quot;The phone code format is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-signin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-signin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-signin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-signin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-signin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-signin" data-method="POST"
      data-path="api/v1/signin"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-signin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-signin"
                    onclick="tryItOut('POSTapi-v1-signin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-signin"
                    onclick="cancelTryOut('POSTapi-v1-signin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-signin"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/signin</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-signin"
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
                              name="Accept"                data-endpoint="POSTapi-v1-signin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>firstname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="firstname"                data-endpoint="POSTapi-v1-signin"
               value="jelzfnxvvgraik"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>jelzfnxvvgraik</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>middlename</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="middlename"                data-endpoint="POSTapi-v1-signin"
               value="ogirghtzs"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>ogirghtzs</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="lastname"                data-endpoint="POSTapi-v1-signin"
               value="chnqtbfwjjiwhfgkw"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>chnqtbfwjjiwhfgkw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone_code"                data-endpoint="POSTapi-v1-signin"
               value="zdh"
               data-component="body">
    <br>
<p>Must match the regex /^+[0-9]+$/. Must not be greater than 4 characters. Example: <code>zdh</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-v1-signin"
               value="4204119362"
               data-component="body">
    <br>
<p>Must match the regex /[0-9]{10}$/. Example: <code>4204119362</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="photo"                data-endpoint="POSTapi-v1-signin"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\Ayobami\AppData\Local\Temp\php9E77.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-signin"
               value="f[auk?B6uQT/YN;UP"
               data-component="body">
    <br>
<p>Example: <code>f[auk?B6uQT/YN;UP</code></p>
        </div>
        </form>

                    <h2 id="onboarding-POSTapi-v2-onboarding-users-register">Onboard new user</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-onboarding-users-register">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/onboarding/users/register"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('firstname', 'c');
body.append('middlename', 'kammmircdxwkwv');
body.append('lastname', 'hjruksdc');
body.append('phone_code', 'e');
body.append('phone', '0377315956');
body.append('password', '-b7=YO#[CxG\&amp;D&lt;');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v2-onboarding-users-register">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 48
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The phone code format is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;phone_code&quot;: [
            &quot;The phone code format is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v2-onboarding-users-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-onboarding-users-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-onboarding-users-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-onboarding-users-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-onboarding-users-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-onboarding-users-register" data-method="POST"
      data-path="api/v2/onboarding/users/register"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-onboarding-users-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-onboarding-users-register"
                    onclick="tryItOut('POSTapi-v2-onboarding-users-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-onboarding-users-register"
                    onclick="cancelTryOut('POSTapi-v2-onboarding-users-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-onboarding-users-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/onboarding/users/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-onboarding-users-register"
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
                              name="Accept"                data-endpoint="POSTapi-v2-onboarding-users-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>firstname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="firstname"                data-endpoint="POSTapi-v2-onboarding-users-register"
               value="c"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>c</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>middlename</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="middlename"                data-endpoint="POSTapi-v2-onboarding-users-register"
               value="kammmircdxwkwv"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>kammmircdxwkwv</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="lastname"                data-endpoint="POSTapi-v2-onboarding-users-register"
               value="hjruksdc"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>hjruksdc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone_code"                data-endpoint="POSTapi-v2-onboarding-users-register"
               value="e"
               data-component="body">
    <br>
<p>Must match the regex /^+[0-9]+$/. Must not be greater than 4 characters. Example: <code>e</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-v2-onboarding-users-register"
               value="0377315956"
               data-component="body">
    <br>
<p>Must match the regex /[0-9]{10}$/. Example: <code>0377315956</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="photo"                data-endpoint="POSTapi-v2-onboarding-users-register"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\Ayobami\AppData\Local\Temp\phpB126.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v2-onboarding-users-register"
               value="-b7=YO#[CxG\&D<"
               data-component="body">
    <br>
<p>Example: <code>-b7=YO#[CxG\&amp;D&lt;</code></p>
        </div>
        </form>

                    <h2 id="onboarding-POSTapi-v2-onboarding-users-email">Send One Time Password Email to the User</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-onboarding-users-email">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/onboarding/users/email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gerda.barrows@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v2-onboarding-users-email">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 47
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;code&quot;: &quot;00&quot;,
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;An email containing your OTP has been sent to your email address&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v2-onboarding-users-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-onboarding-users-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-onboarding-users-email"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-onboarding-users-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-onboarding-users-email">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-onboarding-users-email" data-method="POST"
      data-path="api/v2/onboarding/users/email"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-onboarding-users-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-onboarding-users-email"
                    onclick="tryItOut('POSTapi-v2-onboarding-users-email');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-onboarding-users-email"
                    onclick="cancelTryOut('POSTapi-v2-onboarding-users-email');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-onboarding-users-email"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/onboarding/users/email</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-onboarding-users-email"
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
                              name="Accept"                data-endpoint="POSTapi-v2-onboarding-users-email"
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
                              name="email"                data-endpoint="POSTapi-v2-onboarding-users-email"
               value="gerda.barrows@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gerda.barrows@example.com</code></p>
        </div>
        </form>

                    <h2 id="onboarding-POSTapi-v2-onboarding-users-update">Completes the user registration process and update the user details</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-onboarding-users-update">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/onboarding/users/update"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('firstname', 's');
body.append('middlename', 'fcptywbaidb');
body.append('lastname', 'paijvnivz');
body.append('phone_code', 'l');
body.append('phone', '9890704995');
body.append('password', 'XgUKzWf|;pI/tMEC{6&lt;:');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v2-onboarding-users-update">
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
<span id="execution-results-POSTapi-v2-onboarding-users-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-onboarding-users-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-onboarding-users-update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-onboarding-users-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-onboarding-users-update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-onboarding-users-update" data-method="POST"
      data-path="api/v2/onboarding/users/update"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-onboarding-users-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-onboarding-users-update"
                    onclick="tryItOut('POSTapi-v2-onboarding-users-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-onboarding-users-update"
                    onclick="cancelTryOut('POSTapi-v2-onboarding-users-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-onboarding-users-update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/onboarding/users/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-onboarding-users-update"
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
                              name="Accept"                data-endpoint="POSTapi-v2-onboarding-users-update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>firstname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="firstname"                data-endpoint="POSTapi-v2-onboarding-users-update"
               value="s"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>s</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>middlename</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="middlename"                data-endpoint="POSTapi-v2-onboarding-users-update"
               value="fcptywbaidb"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>fcptywbaidb</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="lastname"                data-endpoint="POSTapi-v2-onboarding-users-update"
               value="paijvnivz"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>paijvnivz</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone_code"                data-endpoint="POSTapi-v2-onboarding-users-update"
               value="l"
               data-component="body">
    <br>
<p>Must match the regex /^+[0-9]+$/. Must not be greater than 4 characters. Example: <code>l</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-v2-onboarding-users-update"
               value="9890704995"
               data-component="body">
    <br>
<p>Must match the regex /[0-9]{10}$/. Example: <code>9890704995</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="photo"                data-endpoint="POSTapi-v2-onboarding-users-update"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\Ayobami\AppData\Local\Temp\php24B2.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v2-onboarding-users-update"
               value="XgUKzWf|;pI/tMEC{6<:"
               data-component="body">
    <br>
<p>Example: <code>XgUKzWf|;pI/tMEC{6&lt;:</code></p>
        </div>
        </form>

                <h1 id="verifying-users">Verifying Users</h1>

    

                                <h2 id="verifying-users-POSTapi-v2-onboarding-users-email-resend-otp">Resends One time password to the user</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-onboarding-users-email-resend-otp">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/onboarding/users/email-resend-otp"
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

<span id="example-responses-POSTapi-v2-onboarding-users-email-resend-otp">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 46
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Undefined array key \&quot;email\&quot;&quot;,
    &quot;exception&quot;: &quot;ErrorException&quot;,
    &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\app\\Repositories\\V2\\Onboarding\\Verification\\VerificationRepository.php&quot;,
    &quot;line&quot;: 17,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php&quot;,
            &quot;line&quot;: 255,
            &quot;function&quot;: &quot;handleError&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\HandleExceptions&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\app\\Repositories\\V2\\Onboarding\\Verification\\VerificationRepository.php&quot;,
            &quot;line&quot;: 17,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\HandleExceptions&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\app\\Http\\Controllers\\api\\V2\\Onboarding\\Verification\\VerificationController.php&quot;,
            &quot;line&quot;: 29,
            &quot;function&quot;: &quot;getOtp&quot;,
            &quot;class&quot;: &quot;App\\Repositories\\V2\\Onboarding\\Verification\\VerificationRepository&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;resendtOtp&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\api\\V2\\Onboarding\\Verification\\VerificationController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php&quot;,
            &quot;line&quot;: 43,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 259,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 205,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 806,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 159,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 125,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 87,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 805,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 784,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 748,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 737,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 200,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 99,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 175,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 300,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 91,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 236,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 163,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 125,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 72,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 53,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 211,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 326,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 1096,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 324,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 175,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 201,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\Users\\Ayobami\\Documents\\Git\\visaro\\visaronigeria\\artisan&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v2-onboarding-users-email-resend-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-onboarding-users-email-resend-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-onboarding-users-email-resend-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-onboarding-users-email-resend-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-onboarding-users-email-resend-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-onboarding-users-email-resend-otp" data-method="POST"
      data-path="api/v2/onboarding/users/email-resend-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-onboarding-users-email-resend-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-onboarding-users-email-resend-otp"
                    onclick="tryItOut('POSTapi-v2-onboarding-users-email-resend-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-onboarding-users-email-resend-otp"
                    onclick="cancelTryOut('POSTapi-v2-onboarding-users-email-resend-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-onboarding-users-email-resend-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/onboarding/users/email-resend-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-onboarding-users-email-resend-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v2-onboarding-users-email-resend-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="verifying-users-POSTapi-v2-onboarding-users-verify-email-otp">Verifies the user One time password</h2>

<p>
</p>



<span id="example-requests-POSTapi-v2-onboarding-users-verify-email-otp">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v2/onboarding/users/verify-email-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gabriel68@example.net",
    "code": "0113"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v2-onboarding-users-verify-email-otp">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 45
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The selected email is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The selected email is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v2-onboarding-users-verify-email-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v2-onboarding-users-verify-email-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-onboarding-users-verify-email-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v2-onboarding-users-verify-email-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-onboarding-users-verify-email-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v2-onboarding-users-verify-email-otp" data-method="POST"
      data-path="api/v2/onboarding/users/verify-email-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-onboarding-users-verify-email-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v2-onboarding-users-verify-email-otp"
                    onclick="tryItOut('POSTapi-v2-onboarding-users-verify-email-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v2-onboarding-users-verify-email-otp"
                    onclick="cancelTryOut('POSTapi-v2-onboarding-users-verify-email-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v2-onboarding-users-verify-email-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v2/onboarding/users/verify-email-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v2-onboarding-users-verify-email-otp"
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
                              name="Accept"                data-endpoint="POSTapi-v2-onboarding-users-verify-email-otp"
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
                              name="email"                data-endpoint="POSTapi-v2-onboarding-users-verify-email-otp"
               value="gabriel68@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gabriel68@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v2-onboarding-users-verify-email-otp"
               value="0113"
               data-component="body">
    <br>
<p>Must match the regex /[0-9]{4}/. Example: <code>0113</code></p>
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
