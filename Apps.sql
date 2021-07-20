

CREATE TABLE customer(
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR (50) NOT NULL,
    handphone VARCHAR(15) NOT NULL,
    avatar VARCHAR(255) DEFAULT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE alamat(
    id SERIAL PRIMARY KEY,
    customer_id BIGINT REFERENCES customer (id) NOT NULL,
    provinsi VARCHAR(255),
    kabupaten VARCHAR(255),
    kecamatan VARCHAR(255),
    kelurahan VARCHAR(255),
    jalan VARCHAR(255),
    nomor_rumah VARCHAR(50),
    kode_pos VARCHAR(25)
);

CREATE TABLE mitra(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description VARCHAR (255),
    image VARCHAR(255) DEFAULT NULL
);

CREATE TABLE tukang(
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR (50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    handphone VARCHAR(15) NOT NULL,
    ktp VARCHAR(255) DEFAULT NULL,
    selfie_ktp VARCHAR(255) DEFAULT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE divisi(
    id SERIAL PRIMARY KEY,
    tukang_id BIGINT REFERENCES tukang (id) NOT NULL,
    nama_divisi VARCHAR(255),
    harga INTEGER
);

-- ALTER TABLE customer 
--     ALTER COLUMN avatar TYPE BYTEA;

ALTER TABLE mitra 
    ALTER COLUMN image TYPE TEXT;

-- ALTER TABLE tukang 
--     ALTER COLUMN ktp TYPE BYTEA, 
--     ALTER COLUMN selfie_ktp TYPE BYTEA;

ALTER TABLE mitra 
    ALTER COLUMN image TYPE BYTEA;

ALTER TABLE mitra ALTER COLUMN image TYPE BYTEA USING (trim(image)::BYTEA);

ALTER TABLE tukang 
    ADD COLUMN nik VARCHAR ;

CREATE TABLE pesanan(
    id SERIAL PRIMARY KEY,
    address VARCHAR(255) NOT NULL,
    foto VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    jadwal DATE NOT NULL,
    isactive BOOLEAN NOT NULL,
    selesai BOOLEAN NOT NULL,
    customer_id BIGINT REFERENCES customer (id) NOT NULL,
    tukang_id BIGINT REFERENCES tukang (id) NOT NULL
);

ALTER TABLE pesanan 
    ADD COLUMN jumlah_tukang INTEGER, 
    ADD COLUMN harga INTEGER;

ALTER TABLE customer
    ADD COLUMN akun_bank VARCHAR(255);

ALTER TABLE tukang
    ADD COLUMN akun_bank VARCHAR(255);

ALTER TABLE pesanan
    ADD COLUMN lunas BOOLEAN;

ALTER TABLE tukang
    ADD COLUMN idFirebase VARCHAR(255);

ALTER TABLE customer
    ADD COLUMN idFirebase VARCHAR(255);

ALTER TABLE tukang
    ADD COLUMN nama_divisi VARCHAR(50);

SELECT * FROM tukang JOIN divisi ON tukang.id = divisi.tukang_id WHERE tukang.id = $tukang_id

ALTER TABLE tukang
    ADD COLUMN nama_divisi VARCHAR[] REFERENCES divisi(id)