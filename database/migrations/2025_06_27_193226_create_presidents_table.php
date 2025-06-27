
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('presidents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->unsignedSmallInteger('election_year');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('presidents');
    }
};
