/* Create Database and table */
create database db_corona;

use db_corona;

CREATE TABLE 'tb_corona' (
    'no' int(10) NOT NULL,
    'provinsi' VARCHAR(20),
    'positif' VARCHAR(20),
    'sembuh' VARCHAR(20),
    'meninggal' VARCHAR(20),
    PRIMARY KEY ('no') 
)
