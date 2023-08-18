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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ender');
            $table->string('bairro');
            $table->string('cep');
            $table->string('city');
            $table->enum('estado', [
                'AC',
                 'AL',
                  'AP',
                   'AM',
                    'BA',
                     'CE',
                      'ES',
                       'GO',
                        'MA',
                        'MT',
                         'MS',
                          'MG',
                           'PA',
                            'PB',
                             'PR',
                              'PE',
                              'PI',
                              'RJ',
                               'RN',
                                'RS',
                                 'RO',
                                 'RR',
                                 'SC',
                                 'SP',
                                  'SE',
                                   'TO',
                                   'DF']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
