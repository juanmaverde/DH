<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedures', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            // TODOS DEBEN PODER SER 'NAVEGABLES'
               // --- ACTION (debe ser un boton que permita CRUD)
               // --- state (alta, internado, seguimiento, AP, etc...)
               // --- caseId (numero unico de ID del caso - compuesto por variables -> institucion & cirujano & fecha)
               // --- caseStatus (estado del caso: completo / incompleto)
               // --- procDate (fecha del procedimiento)
               // --- procName (folksonomy!!!)
               // --- patName (apellido, nombre)
               // --- patId (ID paciente)
               // avatar (de acuerdo a especialidad: EGD, HPB, Tx, vascular, bariatrica, etc...)
            $table->string('action');
            $table->date('procedure_date');
            $table->string('procedure_name');
            $table->boolean('case_status'); // complete || incomplete
            $table->unsignedInteger('patient_id');
            $table->string('patient_last_name');
            $table->string('patient_name');
            $table->string('patient_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedures');
    }
}
