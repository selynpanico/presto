<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('icon');
            $table->timestamps();
        });

        $categories = [
            ['per la casa', 'icona'],
            ['elettronica','icona'],
            ['moda', 'icona'],
            ['auto e moto', 'icona'],
            ['sport', 'icona'],
            ['musica', 'icona'],
            ['collezionismo', 'icona'],
            ['libri', 'icona'],
            ['animali', 'icona'],
            ['console e videogiochi', 'icona']
        ];
        foreach ($categories as $category) {
            Category::create(['name'=>$category[0],'icon'=>$category[1]]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
