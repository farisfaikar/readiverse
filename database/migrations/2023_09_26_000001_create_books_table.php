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
        Schema::create("books", function (Blueprint $table) {
            // prettier-ignore
            $table->uuid()->primary()->unique();
            // prettier-ignore
            $table->foreignUuid("category_uuid")->constrained("categories", "uuid")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("title");
            $table->string("author");
            $table->text("synopsis");
            $table->string("publisher");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("books");
    }
};
