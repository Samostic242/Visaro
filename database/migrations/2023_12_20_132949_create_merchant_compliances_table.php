<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('merchant_compliances', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_id')->index();
            $table->foreignUuid('merchant_id');
            $table->string('business_name')->nullable();
            $table->string('business_registration_number')->nullable();
            $table->string('business_registration_document')->nullable();

            $table->string('business_license_document')->nullable();
            $table->string('business_tax_document')->nullable();
            $table->string('business_certificate_of_incorporation_document')->nullable();
            $table->string('business_proof_of_address_document')->nullable();
            $table->string('identity_number_of_director')->nullable();
            $table->string('identity_document_of_director')->nullable();
            $table->string('bvn')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_code')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->string('code')->nullable();
            $table->foreignUuid('country_id');
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->longText('description')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('conflict_resolution_email')->nullable();
            $table->string('conflict_resolution_phone_code')->nullable();
            $table->string('conflict_resolution_phone')->nullable();
            $table->json('meta')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softdeletes();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchant_compliances');
    }
};
