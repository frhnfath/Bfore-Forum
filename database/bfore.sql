CREATE DATABASE db_bfore;

CREATE TABLE table_mahasiswa {
  id BIGSERIAL primary key,
  email VARCHAR(100) not null,
  nama VARCHAR(255) not null,
  password VARCHAR(255) not null,
  nim VARCHAR(11)
};

CREATE TABLE table_forum {
  forum_id BIGSERIAL primary key not null,
  nim VARCHAR(11),
  judul VARCHAR(100) not null,
  isi TEXT,
  CONSTRAINT nim FOREIGN KEY 
}