<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('natID');
            $table->string('phone');
            $table->string('country');
            $table->string('email');
            $table->string('delegate_type')->nullable();
            $table->string('delegate_name')->nullable();
            $table->string('delegate_phone')->nullable();
            $table->string('delegate_country')->nullable();
            $table->string('delegate_id')->nullable();
            $table->string('delegate_hijri')->nullable();
            $table->string('delegate_residency')->nullable();
            $table->string('delegate_birthday')->nullable();
            $table->string('delegate_national_id')->nullable();
            $table->string('registered_vehicle')->nullable();
            $table->string('registeration_country_id')->nullable();
            $table->string('plate_1')->nullable();
            $table->string('plate_2')->nullable();
            $table->string('plate_3')->nullable();
            $table->string('plate_4')->nullable();
            $table->string('plate_number')->nullable();
            $table->string('plate_table')->nullable();
            $table->string('custom_cert_no')->nullable();
            $table->string('vehicle_type');
            $table->string('service_type');
            $table->string('area')->nullable();
            $table->string('appointment_date')->nullable();
            $table->string('timeslot')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
