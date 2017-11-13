-- 	SQL Syntax

-- 	User Case 1:
-------------------------------------------------------
--	Der Kunde will eine Webseite die einzelen Zitate anzeigt

--	Anzahl Datansätze in Zitattabelle auslesen
SELECT COUNT([ZitatID]) FROM [ZitatTabelle]

--	Zitat, Autor aus ZitatTabelle auslesen (random ID in php generiert)
SELECT [Zitat], [Autor] FROM [ZitatTabelle]
WHERE [ZitatID] =  [RandomID];



--	User Case 4:
-------------------------------------------------------
--	Der Kunde kann sich anmelden um Zitate hinzuzufügen


--	Kundenanmeldung überprüfen
SELECT [Password] FROM [UserTabelle]
WHERE [UserName] = [InputUserName];


--	Überprüfen ob Autor unique ist
SELECT [ZitatID] FROM [ZitatTabelle]
WHERE [Autor] = [InputAutor];


--	Zitat und Autor hinzufüren
INSERT [ZitatTabelle] ([Zitat], [Autor], [Datum])
VALUES ([neuesZitat], [neuerAutor], now());



--	User Case 5:
--	Der Kunde will eine Hit Statistik für die Zitate
SELECT [Zitat], [Autor], [Hit] FROM [ZitatTabelle]
WHERE [ZitatID] =  [RandomID];


--	Hit-Zähler erhöhen
UPDATE [ZitatTabelle]
SET [Hit] = [newHit]
WHERE [ZitatID] = [RAndomID];






--	User Case 6:
-------------------------------------------------------
--	Der Kunde kann unterschiedliche Hintergründe hinzufügen

--	TODO



-- SQL UNIQUE CONSTRAINTS
-- UNIQUE stellt sicher, dass jeder Eintrag nur einmal in Dieser Spalte vorkommt (vergleichbar PRIMARY KEY)
-- allerding kann es pro Tabell nur einen PRIMARY KEY geben, aber mehrere UNIQUE constraints

-- Bsp.:
ALTER TABLE [ZitatTabelle]
ADD UNIQUE ([Autor]);




