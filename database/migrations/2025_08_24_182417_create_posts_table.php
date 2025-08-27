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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ইউজারের সাথে রিলেশন
            $table->string('title');              // রুম বিজ্ঞাপনের টাইটেল
            $table->string('name');               // মালিকের নাম
            $table->string('location');           // লোকেশন
            $table->string('roomType');           // রুম টাইপ (quiet, shared etc.)
            $table->integer('rentAmount'); // ভাড়া
            $table->string('availability')->default('Available'); // Available/Not
            $table->string('contactInfo')->nullable(); // ফোন নম্বর
            $table->string('email')->nullable();       // ইমেইল
            $table->text('details')->nullable();       // বর্ণনা
            $table->string('preferences')->nullable(); // ভাড়াটিয়ার প্রেফারেন্স
            $table->unsignedInteger('likeCount')->default(0); // লাইক সংখ্যা
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
