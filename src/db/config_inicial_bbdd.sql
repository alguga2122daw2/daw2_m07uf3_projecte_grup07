-- Este script debe ser modificado para adaptarse a nuestras necesidades
use mysql;
create user 'admin'@'localhost' identified by "Fjeclot22@";
create database empleats;
use empleats;
grant all privileges on empleats.* to 'admin'@'localhost';