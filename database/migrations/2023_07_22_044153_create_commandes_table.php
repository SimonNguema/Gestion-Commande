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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('panier_id');
           
            $table -> enum('status', ['En_Cours', 'En_Attente', 'Livre']) -> default('En_Cours');
            $table->timestamp('date_commande')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('montant', 10, 2);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('produit_id')->references('id')->on('produits');
            $table->foreign('panier_id')->references('id')->on('panier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
