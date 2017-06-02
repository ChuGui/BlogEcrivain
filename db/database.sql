create database if not exists blogecrivain character set utf8 collate utf8_unicode_ci;
use blogecrivain;

grant all privileges on blogecrivain.* to 'blogecrivain_user'@'localhost' identified by 'secret';