-- Minden érték lekérése
SELECT *
FROM tablanev

-- Választott értékek lekérése
SELECT oszlop1, oszlop2, oszlop3
FROM tablanev

-- Lekérdezés feltétellel
SELECT * 
FROM tablanev
WHERE feltetel

-- Keresés LIKE segítségével
SELECT oszlop1, oszlop2, oszlop3
FROM tablanev
WHERE oszlop1 LIKE kifejezes

SELECT oszlop1, oszlop2, oszlop3
FROM tablanev
WHERE oszlop1 LIKE %kifejezes%

-- Rendezés ASC [A-Z], DESC [Z-A]
SELECT * 
FROM tablanev
ORDER BY oszlop1 ASC

SELECT * 
FROM tablanev
ORDER BY oszlop1 DESC

SELECT * 
FROM tablanev
WHERE feltetel
ORDER BY oszlop1 DESC

-- Adott darab sor lekérdezése
SELECT * 
FROM tablanev
LIMIT 2

-- Rekord beszúrása
INSERT INTO tablanev
(oszlop1, oszlop2, oszlop3)
VALUES
('ertek1', 'ertek2', ertek3)

-- Rekordok törlése
DELETE FROM tablanev
WHERE feltetel
