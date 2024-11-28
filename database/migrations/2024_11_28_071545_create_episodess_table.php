<?php  

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

class CreateEpisodessTable extends Migration  
{  
    public function up()  
    {  
        Schema::create('episodes', function (Blueprint $table) {  
            $table->id();  
            $table->foreignId('film_id')->constrained()->onDelete('cascade');  
            $table->string('title');  
            $table->text('description')->nullable();  
            $table->timestamps();  
        });  
    }  

    public function down()  
    {  
        Schema::dropIfExists('episodes');  
    }  
}