<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInsertStudentProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the procedure without using DELIMITER
        DB::statement('
            CREATE PROCEDURE InsertStudent(
                IN p_section_id INT,
                IN p_guardian INT,
                IN p_first_name VARCHAR(25),
                IN p_last_name VARCHAR(25),
                IN p_middle_name VARCHAR(25),
                IN p_sex VARCHAR(6),
                IN p_extension VARCHAR(4),
                IN p_birthdate DATE,
                IN p_place_of_birth VARCHAR(25),
                IN p_mother_tongue VARCHAR(15),
                IN p_IP_community VARCHAR(15),
                IN p_4ps_beneficiary BOOLEAN,
                IN p_average INT,
                IN p_email VARCHAR(100),
                IN p_username VARCHAR(60),
                IN p_password VARCHAR(60),
                IN p_active BOOLEAN,
                IN p_type VARCHAR(10)
            )
            BEGIN
                INSERT INTO students (
                    section_id, guardian, first_name, last_name, middle_name, sex, 
                    extension, birthdate, place_of_birth, mother_tongue, IP_community, 
                    4ps_beneficiary, average, email, username, password, active, type, 
                    created_at, updated_at
                ) 
                VALUES (
                    p_section_id, p_guardian, p_first_name, p_last_name, p_middle_name, p_sex, 
                    p_extension, p_birthdate, p_place_of_birth, p_mother_tongue, p_IP_community, 
                    p_4ps_beneficiary, p_average, p_email, p_username, p_password, p_active, 
                    p_type, NOW(), NOW()
                );
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS InsertStudent');
    }
}
