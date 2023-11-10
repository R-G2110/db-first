<?php


$automobiles = [
	"id -> INT- AUTO INCREMENT - NOT NULL - PRIMARY KEY",
	"price -> SMALLINT UNSIGNED - NOT NULL",
	"brand -> VARCHAR(20) - NOT NULL",
	"color -> VARCHAR(20) - NULL",
	"model -> VARCHAR(20) - NOT NULL",
	"height -> FLOAT(4,2) - NULL",
	"width -> FLOAT(4,2) - NULL",
	"transmission -> VARCHAR(20) - NOT NULL",
	"plate_license -> VARCHAR(7) - NOT NULL - UNIQUE",
	"first_enrollment -> YEAR - NULL",
	"mileage -> SMALLINT - NOT NULL",
	"fuel -> VARCHAR(20) - NOT NULL",
	"horse_power -> VARCHAR(20) - NOT NULL",
	"previous_owners-> CHAR(1) - NOT NULL",
	"traction -> VARCHAR(5) - NOT NULL",
	"emission_class -> VARCHAR(7) - NOT NULL",
	"vehicle_type -> VARCHAR(20) - NOT NULL",
	"doors -> TINYINT - NULL",
	"seats -> TINYINT - NULL",
	"crashed_and_repaired -> CHAR(1) - NULL",
	"last_maintainance -> DATE - NULL",
	"inspection_valid_until -> DATE - NULL",
	"notes -> TEXT - NULL",
];