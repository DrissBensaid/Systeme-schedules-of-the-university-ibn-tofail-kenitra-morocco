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
        Schema::create('emplois', function (Blueprint $table) {
            $table->id();
            $table->text('list1')->nullable();
            $table->text('salle1')->nullable();
            $table->text('list2')->nullable();
            $table->text('salle2')->nullable();
            $table->text('list3')->nullable();
            $table->text('salle3')->nullable();
            $table->text('list4')->nullable();
            $table->text('salle4')->nullable();
            $table->text('list5')->nullable();
            $table->text('salle5')->nullable();
            $table->text('list6')->nullable();
            $table->text('salle6')->nullable();
            
            $table->text('list7')->nullable();
            $table->text('salle7')->nullable();
            $table->text('list8')->nullable();
            $table->text('salle8')->nullable();
            $table->text('list9')->nullable();
            $table->text('salle9')->nullable();
            $table->text('list10')->nullable();
            $table->text('salle10')->nullable();
            $table->text('list11')->nullable();
            $table->text('salle11')->nullable();
            $table->text('list12')->nullable();
            $table->text('salle12')->nullable();
            
            $table->text('list13')->nullable();
            $table->text('salle13')->nullable();
            $table->text('list14')->nullable();
            $table->text('salle14')->nullable();
            $table->text('list15')->nullable();
            $table->text('salle15')->nullable();
            $table->text('list16')->nullable();
            $table->text('salle16')->nullable();
            $table->text('list17')->nullable();
            $table->text('salle17')->nullable();
            $table->text('list18')->nullable();
            $table->text('salle18')->nullable();
            
            $table->text('list19')->nullable();
            $table->text('salle19')->nullable();
            $table->text('list20')->nullable();
            $table->text('salle20')->nullable();
            $table->text('list21')->nullable();
            $table->text('salle21')->nullable();
            $table->text('list22')->nullable();
            $table->text('salle22')->nullable();
            $table->text('list23')->nullable();
            $table->text('salle23')->nullable();
            $table->text('list24')->nullable();
            $table->text('salle24')->nullable();
            
            $table->text('list25')->nullable();
            $table->text('salle25')->nullable();
            $table->text('list26')->nullable();
            $table->text('salle26')->nullable();
            $table->text('list27')->nullable();
            $table->text('salle27')->nullable();
            $table->text('list28')->nullable();
            $table->text('salle28')->nullable();
            $table->text('list29')->nullable();
            $table->text('salle29')->nullable();
            $table->text('list30')->nullable();
            $table->text('salle30')->nullable();
            
            $table->text('list31')->nullable();
            $table->text('salle31')->nullable();
            $table->text('list32')->nullable();
            $table->text('salle32')->nullable();
            $table->text('list33')->nullable();
            $table->text('salle33')->nullable();
            $table->text('list34')->nullable();
            $table->text('salle34')->nullable();
            $table->text('list35')->nullable();
            $table->text('salle35')->nullable();
            $table->text('list36')->nullable();
            $table->text('salle36')->nullable();
            $table->text('filiere')->nullable();
            $table->text('annee1')->nullable();
            $table->text('annee2')->nullable();
            $table->string('nomGroupe')->nullable();
            $table->string('nomSemestre')->nullable();
            $table->unsignedBigInteger('semestre_id');
            $table->foreign('semestre_id')
                ->references('id')
                ->on('semestres')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplois');
    }
};
