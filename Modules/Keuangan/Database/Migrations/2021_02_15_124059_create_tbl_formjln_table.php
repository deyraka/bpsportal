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
            $table->string('id')->comment = "generated uuid";
            // set DIPA code nullable for 'jln khusus'
            $table->char('thang', 4)->nullable();            
            $table->char('kdsatker', 6)->nullable();            
            $table->char('kddept', 3)->nullable();            
            $table->char('kdunit', 2)->nullable();            
            $table->char('kdprogram', 2)->nullable();            
            $table->char('kdgiat', 4)->nullable();            
            $table->char('kdoutput', 3)->nullable();                       
            $table->char('kdlokasi', 2)->nullable();            
            $table->char('kdkabkota', 2)->nullable();  
            $table->char('kdsoutput', 3)->nullable();            
            $table->char('kdkmpnen', 3)->nullable();            
            $table->char('kdskmpnen', 3)->nullable();            
            $table->char('kdakun', 6)->nullable();           
            $table->decimal('noitem', 3,0)->nullable();           
            $table->char('jns_perjadin',1)->comment = "1=biasa(> 8 jam), 2=khusus(DIPA luar), 3=lokal(< 8jam)";           
            $table->string('maksud');           
            $table->string('dari');           
            $table->json('ke');           
            $table->date('tgl_berangkat');
            $table->date('tgl_pulang');        
            $table->integer('jml_hari')->nullable()->storeAs('DATEDIFF (pulang, berangkat)');           
            $table->json('jns_angkutan')->comment = "bisa kombinasi angkutan dinas, umum, darat, udara";           
            $table->bigInteger('trgt_uang_transport')->comment = "Perkiraan Penyerapan dari sisi transportasi";           
            $table->bigInteger('real_uang_transport')->nullable()->default(0);           
            $table->bigInteger('trgt_uang_inap')->comment = "Perkiraan Penyerapan dari sisi penginapan";           
            $table->bigInteger('real_uang_inap')->nullable()->default(0);
            $table->bigInteger('trgt_uang_harian')->comment = "Perkiraan Penyerapan dari sisi uang harian";           
            $table->bigInteger('real_uang_harian')->nullable()->default(0);
            $table->bigInteger('real_uang_representatif')->nullable()->default(0);
            $table->bigInteger('pengeluaran_riil')->nullable()->default(0);
            $table->softDeletes();
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
