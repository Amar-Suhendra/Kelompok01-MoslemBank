CREATE DATABASE IF NOT EXISTS MoslemBank;

CREATE TABLE IF NOT EXISTS MoslemBank.Masjid (
    MasjidID VARCHAR(10) PRIMARY KEY,
    MasjidName VARCHAR(100) NOT NULL,
    MasjidAddress VARCHAR(255) NOT NULL,
    MasjidPassword VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS MoslemBank.Donation (
    DonationID VARCHAR(10) PRIMARY KEY,
    Amount INTEGER NOT NULL,
    Date DATE NOT NULL,
    MasjidID VARCHAR(10),

    FOREIGN KEY (MasjidID) REFERENCES MoslemBank.Masjid(MasjidID)
);

CREATE TABLE IF NOT EXISTS MoslemBank.Expenses (
    ExpenseID VARCHAR(10) PRIMARY KEY,
    Amount INTEGER NOT NULL,
    Date DATE NOT NULL,
    MasjidID VARCHAR(10),

    FOREIGN KEY (MasjidID) REFERENCES MoslemBank.Masjid(MasjidID)
);

-- Insert 10 random data for MoslemBank.Masjid
INSERT INTO MoslemBank.Masjid (MasjidID, MasjidName, MasjidAddress, MasjidPassword) 
VALUES
('MAS001', 'Masjid Ar-Rahman'    , 'Jl. Rahman'    , 'Rahman123'    ),
('MAS002', 'Masjid Ar-Rahim'     , 'Jl. Rahim'     , 'Rahim123'     ),
('MAS003', 'Masjid Al-Malik'     , 'Jl. Malik'     , 'Malik123'     ),
('MAS004', 'Masjid Al-Quddus'    , 'Jl. Quddus'    , 'Quddus123'    ),
('MAS005', 'Masjid Al-Mukmin'    , 'Jl. Mukmin'    , 'Mukmin123'    ),
('MAS006', 'Masjid Al-Muhaimin'  , 'Jl. Muhaimin'  , 'Muhaimin123'  ),
('MAS007', 'Masjid Al-Aziz'      , 'Jl. Aziz'      , 'Aziz123'      ),
('MAS008', 'Masjid Al-Jabbar'    , 'Jl. Jabbar'    , 'Jabbar123'    ),
('MAS009', 'Masjid Al-Mutakabbir', 'Jl. Mutakabbir', 'Mutakabbir123'),
('MAS010', 'Masjid Al-Bari'      , 'Jl. Bari'      , 'Bari123'      );

-- Insert 25 random data for MoslemBank.Donation
INSERT INTO MoslemBank.Donation (DonationID, Amount, Date, MasjidID)
VALUES
('DON001', '100000' , '2020-01-01', 'MAS001'),
('DON002', '200000' , '2020-01-02', 'MAS001'),
('DON003', '300000' , '2020-01-03', 'MAS001'),
('DON004', '400000' , '2020-01-04', 'MAS002'),
('DON005', '500000' , '2020-01-05', 'MAS002'),
('DON006', '600000' , '2020-01-06', 'MAS003'),
('DON007', '700000' , '2020-01-07', 'MAS003'),
('DON008', '800000' , '2020-01-08', 'MAS003'),
('DON009', '900000' , '2020-01-09', 'MAS004'),
('DON010', '1000000', '2020-01-10', 'MAS004'),
('DON011', '1100000', '2020-01-11', 'MAS004'),
('DON012', '1200000', '2020-01-12', 'MAS005'),
('DON013', '1300000', '2020-01-13', 'MAS005'),
('DON014', '1400000', '2020-01-14', 'MAS005'),
('DON015', '1500000', '2020-01-15', 'MAS005'),
('DON016', '1600000', '2020-01-16', 'MAS006'),
('DON017', '1700000', '2020-01-17', 'MAS007'),
('DON018', '1800000', '2020-01-18', 'MAS007'),
('DON019', '1900000', '2020-01-19', 'MAS007'),
('DON020', '2000000', '2020-01-20', 'MAS008'),
('DON021', '2100000', '2020-01-21', 'MAS008'),
('DON022', '2200000', '2020-01-22', 'MAS009'),
('DON023', '2300000', '2020-01-23', 'MAS009'),
('DON024', '2400000', '2020-01-24', 'MAS009'),
('DON025', '2500000', '2020-01-25', 'MAS010');

-- Insert 25 random data for MoslemBank.Expenses
INSERT INTO MoslemBank.Expenses (ExpenseID, Amount, Date, MasjidID)
VALUES
('EXP001', '10000' , '2020-01-01', 'MAS001'),
('EXP002', '20000' , '2020-01-02', 'MAS001'),
('EXP003', '30000' , '2020-01-03', 'MAS001'),
('EXP004', '40000' , '2020-01-04', 'MAS001'),
('EXP005', '50000' , '2020-01-05', 'MAS001'),
('EXP006', '60000' , '2020-01-06', 'MAS001'),
('EXP007', '70000' , '2020-01-07', 'MAS002'),
('EXP008', '80000' , '2020-01-08', 'MAS002'),
('EXP009', '90000' , '2020-01-09', 'MAS002'),
('EXP010', '100000', '2020-01-10', 'MAS002'),
('EXP011', '110000', '2020-01-11', 'MAS003'),
('EXP012', '120000', '2020-01-12', 'MAS003'),
('EXP013', '130000', '2020-01-13', 'MAS003'),
('EXP014', '140000', '2020-01-14', 'MAS003'),
('EXP015', '150000', '2020-01-15', 'MAS004'),
('EXP016', '160000', '2020-01-16', 'MAS004'),
('EXP017', '170000', '2020-01-17', 'MAS004'),
('EXP018', '180000', '2020-01-18', 'MAS004'),
('EXP019', '190000', '2020-01-19', 'MAS005'),
('EXP020', '200000', '2020-01-20', 'MAS006'),
('EXP021', '210000', '2020-01-21', 'MAS006'),
('EXP022', '220000', '2020-01-22', 'MAS006'),
('EXP023', '230000', '2020-01-23', 'MAS006'),
('EXP024', '240000', '2020-01-24', 'MAS006'),
('EXP025', '250000', '2020-01-25', 'MAS006');
