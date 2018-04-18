CREATE TABLE State (
	id integer PRIMARY KEY AUTOINCREMENT,
	Name varchar,
	BIK integer
);

CREATE TABLE Bank (
	id integer PRIMARY KEY AUTOINCREMENT,
	Name varchar,
	BIK integer,
	INN integer,
	id_State integer,
	FOREIGN KEY (id_State) REFERENCES State(id)
);

INSERT INTO State (Name, BIK) VALUES ('Нижегородская', 042202);
INSERT INTO State (Name, BIK) VALUES ('Ивановская', 042406);

INSERT INTO Bank (Name, BIK, INN, id_State) VALUES ('ВОЛГО-ВЯТСКОЕ ГУ БАНКА РОССИИ', 042202001, 7702235133, 1);
INSERT INTO Bank (Name, BIK, INN, id_State) VALUES ('ВОЛГО-ВЯТСКИЙ БАНК ПАО СБЕРБАНК', 042202603, 7707083893, 1);
INSERT INTO Bank (Name, BIK, INN, id_State) VALUES ('ПАО "НБД-БАНК"', 042202705, 5200000222, 1);
INSERT INTO Bank (Name, BIK, INN, id_State) VALUES ('АО "ВОКБАНК"', 042202722, 5260003429, 1);
INSERT INTO Bank (Name, BIK, INN, id_State) VALUES ('Ф-Л БАНКА ГПБ (АО) "ПРИВОЛЖСКИЙ"', 042202764, 7744001497, 1);
INSERT INTO Bank (Name, BIK, INN, id_State) VALUES ('АО КОМБАНК "АРЗАМАС"', 042202731, 5243006236, 1);
INSERT INTO Bank (Name, BIK, INN, id_State) VALUES ('ПАО НКБ "РАДИОТЕХБАНК"', 042202773, 5261005926, 1);
INSERT INTO Bank (Name, BIK, INN, id_State) VALUES ('ИВАНОВСКОЕ ОТДЕЛЕНИЕ N 8639 ПАО СБЕРБАНК', 042406608, 7707083893, 2);
INSERT INTO Bank (Name, BIK, INN, id_State) VALUES ('АО КИБ "ЕВРОАЛЬЯНС"', 042406701, 3702030072, 2);