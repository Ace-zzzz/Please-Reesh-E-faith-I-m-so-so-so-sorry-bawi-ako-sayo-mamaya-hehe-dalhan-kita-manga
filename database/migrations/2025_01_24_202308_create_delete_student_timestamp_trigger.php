<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDeleteStudentTimestampTrigger extends Migration
{
    public function up()
    {
        DB::statement('
            CREATE TRIGGER delete_student_timestamp
            AFTER DELETE ON students
            FOR EACH ROW
            BEGIN
                UPDATE students
                SET updated_at = CURRENT_TIMESTAMP
                WHERE id = OLD.id;
            END;
        ');
    }

    public function down()
    {
        DB::unprepared('
            DROP TRIGGER IF EXISTS delete_student_timestamp;
        ');
    }
}
