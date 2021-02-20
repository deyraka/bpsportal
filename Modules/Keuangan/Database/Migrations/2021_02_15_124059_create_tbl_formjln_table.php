<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFormjlnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_formjln', function (Blueprint $table) {
            $table->id();
            $table->char('thang', 4);            
            $table->char('kdsatker', 6);            
            $table->char('kddept', 3);            
            $table->char('kdunit', 2);            
            $table->char('kdprogram', 2);            
            $table->char('kdgiat', 4);            
            $table->char('kdoutput', 3);                       
            $table->char('kdlokasi', 2);            
            $table->char('kdkabkota', 2);  
            $table->char('kdsoutput', 3);            
            $table->char('kdkmpnen', 3);            
            $table->char('kdskmpnen', 3);            
            $table->char('kdakun', 6);           
            $table->decimal('noitem', 3,0);           
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
        Schema::dropIfExists('tbl_formjln');
    }
}
