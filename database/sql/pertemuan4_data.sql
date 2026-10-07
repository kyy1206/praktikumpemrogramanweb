USE praktikum_web_2401020035;


INSERT INTO program_studi (nama_prodi) VALUES
('Teknik Elektro'),
('Teknik Mesin');


INSERT INTO mahasiswa
    (nim, nama, email, usia, program_studi_id)
VALUES
    ('2401020035', 'Dzaky Ramadhan', 'dzaky@example.com', 20, 1),
    ('2401020036', 'Abdi Ramadhani', 'abdi@example.com', 21, 1),
    ('2401020037', 'Zora Ideale', 'zora@example.com', 19, 2),
    ('2401020038', 'Mereoleona', 'mereoleona@example.com', 22, 2);


UPDATE mahasiswa
SET email = 'dzaky.ramadhan@example.com'
WHERE nim = '2401020035';


DELETE FROM mahasiswa
WHERE nim = '2401020038';


SELECT
    m.nim,
    m.nama,
    m.email,
    m.usia,
    p.nama_prodi
FROM mahasiswa AS m
JOIN program_studi AS p
    ON p.id = m.program_studi_id
ORDER BY m.nim;
