<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ID_PONTO');
            $table->integer('DRENAGEM')->nullable();
            $table->string('SIMB_HORIZ');
            $table->integer('LIMITE_SUP');
            $table->integer('LIMITE_INF');
            $table->string('COR_UMIDA_MATIZ')->nullable();
            $table->string('COR_UMIDA_VALOR')->nullable();
            $table->string('COR_UMIDA_CROMA')->nullable();
            $table->string('COR_SECA_MATIZ')->nullable();
            $table->string('COR_SECA_VALOR')->nullable();
            $table->string('COR_SECA_CROMA')->nullable();
            $table->string('COR_MOSQ_MATIZ_1')->nullable();
            $table->string('COR_MOSQ_VALOR_1')->nullable();
            $table->string('COR_MOSQ_CROMA_1')->nullable();
            $table->string('COR_UMIDA_AMASSADA_MATIZ')->nullable();
            $table->string('COR_UMIDA_AMASSADA_VALOR')->nullable();
            $table->string('COR_UMIDA_AMASSADA_CROMA')->nullable();
            $table->string('COR_SECA_TRITURADA_MATIZ')->nullable();
            $table->string('COR_SECA_TRITURADA_VALOR')->nullable();
            $table->string('COR_SECA_TRITURADA_CROMA')->nullable();
            $table->integer('ESTRUTURA_GRAU')->nullable();
            $table->integer('ESTRUTURA_TAMANHO')->nullable();
            $table->integer('ESTRUTURA_TIPO')->nullable();
            $table->integer('CEROSIDADE_GRAU')->nullable();
            $table->integer('CEROSIDADE_QUANTIDADE')->nullable();
            $table->integer('TRANSICAO_GRAU')->nullable();
            $table->integer('TRANSICAO_FORMA')->nullable();
            $table->integer('CONSISTENCIA_SECO')->nullable();
            $table->integer('CALHAU')->nullable();
            $table->integer('CASCALHO')->nullable();
            $table->integer('AREIA_GROS')->nullable();
            $table->integer('AREIA_FINA')->nullable();
            $table->integer('SILTE')->nullable();
            $table->integer('ARGILA')->nullable();
            $table->string('PH_AGUA')->nullable();
            $table->string('PH_KCL')->nullable();
            $table->string('C_ORG')->nullable();
            $table->string('CA_TROC')->nullable();
            $table->string('MG_TROC')->nullable();
            $table->string('K_TROC')->nullable();
            $table->string('NA_TROC')->nullable();
            $table->string('AL_TROC')->nullable();
            $table->string('H_TROC')->nullable();
            $table->integer('P_ASSIM')->nullable();
            $table->boolean('RETRATIL')->nullable();
            $table->boolean('COESO')->nullable();
            $table->boolean('FLUVICO')->nullable();
            $table->boolean('SOMBRICO')->nullable();
            $table->boolean('REDOXICO')->nullable();
            $table->boolean('MATERIAIS_PRIMARIOS')->nullable();
            $table->boolean('ATIVIDADES_HUMANAS')->nullable();
            $table->boolean('PLACICO_TOPO')->nullable();
            $table->boolean('MANGANES')->nullable();
            $table->integer('COND_ELETR')->nullable();
            $table->integer('EQUI_CACO3')->nullable();
            $table->integer('TEOR_FE')->nullable();
            $table->integer('LAMELA_SUP')->nullable();
            $table->integer('LAMELA_INF')->nullable();
            $table->integer('LAMELA_TEXTURA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solos');
    }
}
