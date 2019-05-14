<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id'); // Id do Produto
            $table->string('nome', 100)->unique(); // Nome do Produto
            $table->integer('valor')->nullable(); // Valor do Produto
            $table->string('imagem', 100)->nullable(); // Imagem do Produto
            $table->text('descricao')->nullable(); // Descrição do Produto
            $table->boolean('ativo'); // Status do Produto
            $table->time('data-inserido'); // Data de Insersão do Produto
            $table->time('data-atualizado')->nullable(); // Data de Atualização do Produto
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
        Schema::dropIfExists('produtos');
    }
}
