<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nimMhs');
            $table->string('namaMhs');
            $table->string('kotaLahirMhs');
            $table->date('tanggalLahirMhs');
            $table->string('genderMhs');
            $table->string('emailMhs');
            $table->string('teleponMhs');
            $table->string('fakultasMhs');
            $table->string('jurusanMhs');
            $table->string('semesterMhs');
            $table->text('alamatMhs');
            $table->string('kelasMhs');
            $table->text('fotoMhs');
            $table->timestamps();
        });
    }
     
    public function down(): void
    {
        Schema::dropIfExists('Mahasiswa');
    }
};