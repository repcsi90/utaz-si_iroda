<?php

use App\Models\airlines;
use App\Models\User;
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
       


        Schema::create('airlines', function (Blueprint $table) {
            $table->id('airline_id');
            $table->string('name');
            $table->string('country');
            $table->timestamps();
        });

        /*airlines::create([
            'airline_id' => 1,
            'name' => 'Paripa',
            'country' => 'Magyarország',
        ]);*/

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
