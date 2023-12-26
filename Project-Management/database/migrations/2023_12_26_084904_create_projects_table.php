<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('admin_username');
            $table->integer('members');
            $table->date('start_date');
            $table->date('due_date');
            $table->text('description');
            $table->json('attachments')->nullable();
            $table->enum('status', ['Active', 'Completed', 'Delayed', 'Rejected'])->default('Active');
            $table->enum('category', ['Software Development', 'System Administration', 'Cybersecurity', 'IT Infrastructure', 'IT Support', 'Data Warehousing', 'Software Testing', 'IT Consulting', 'Artificial Intelligence', 'Blockchain'])->default('Software Development');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
