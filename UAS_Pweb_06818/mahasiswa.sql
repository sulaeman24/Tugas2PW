CREATE DATABASE mahasiswa;

USE mahasiswa;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(10) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin VARCHAR(10) NOT NULL,
    alamat TEXT NOT NULL,
    program_studi VARCHAR(50) NOT NULL
);
