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
        Schema::create("posts_tags", function (Blueprint $table) {
            $table
                ->foreignId("post_id")
                ->constrained("posts")
                ->onDelete("cascade");
            $table
                ->foreignId("tags_id")
                ->constrained("tags")
                ->onDelete("cascade");
            $table->primary(["post_id", "tags_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("posts_tags");
    }
};
