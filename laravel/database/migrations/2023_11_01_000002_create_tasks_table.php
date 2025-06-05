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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('projects')->nullOnDelete();
            $table->foreignId('parent_id')->nullable()->constrained('tasks')->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('priority')->default(0);
            $table->enum('status', ['todo', 'in_progress', 'done', 'canceled'])->default('todo');
            $table->date('due_date')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
