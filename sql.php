<?php

$createDB = "CREATE DATABASE IF NOT EXISTS Testing;";

$create_sql = "CREATE TABLE IF NOT EXISTS Student_Result".
                       "(Registration_No INTEGER NOT NULL PRIMARY KEY ,".
                       "Physics DECIMAL(3,1) NOT NULL,".
                       "Chemistry DECIMAL(3,1) NOT NULL,".
                       "Mathematics DECIMAL(3,1) NOT NULL,".
                       "Engineering_Graphics DECIMAL(3,1) NOT NULL,".
                       "English DECIMAL(3,1) NOT NULL,".
                       "Percentag DECIMAL(4,2) NOT NULL);";

?>
