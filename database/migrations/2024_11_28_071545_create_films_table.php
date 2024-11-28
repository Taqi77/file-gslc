<?php  

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

class CreateFilmsTable extends Migration  
{  
    public function up()  
    {  
        Schema::create('films', function (Blueprint $table) {  
            $table->id();  
            $table->foreignId('genre_id')->constrained()->onDelete('cascade');  
            $table->string('title', 30);  
            $table->text('description', 50);  
            $table->date('publish_date');  
            $table->string('photo');  
            $table->timestamps();  
        });  
    }  

    public function down()  
    {  
        Schema::dropIfExists('films');  
    }  
}