-- Active: 1685037112118@@127.0.0.1@3306@ferregarochoa

CREATE DATABASE FerreGarochoa;

USE FerreGarochoa;

-- DROP DATABASE FerreGarochoa;

CREATE TABLE
    Estado(
        id_est INT AUTO_INCREMENT PRIMARY KEY,
        nom_est TEXT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Ciudades(
        id_ciu INT AUTO_INCREMENT PRIMARY KEY,
        nom_ciu TEXT NOT NULL,
        capital_ciudad TEXT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Sedes(
        id_sede INT AUTO_INCREMENT PRIMARY KEY,
        nom_sed TEXT NOT NULL,
        direc_sed TEXT NOT NULL,
        fkciudad INT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    EPS(
        id_eps INT AUTO_INCREMENT PRIMARY KEY,
        eps TEXT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Cajadecompensacion(
        id_caja INT AUTO_INCREMENT PRIMARY KEY,
        caja TEXT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Turnos(
        id_turnos INT AUTO_INCREMENT PRIMARY KEY,
        nom_turno TEXT NOT NULL,
        entrada TIME NOT NULL,
        salida TIME NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Cargos(
        id_cargo INT AUTO_INCREMENT PRIMARY KEY,
        cargo TEXT NOT NULL,
        sueldo DOUBLE NOT NULL,
        descrip_cargo TEXT,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Generos(
        id_gender INT AUTO_INCREMENT PRIMARY KEY,
        gender TEXT NOT NULL
    );

CREATE TABLE
    TipoDNI(
        id_tipo INT AUTO_INCREMENT PRIMARY KEY,
        iniciales VARCHAR(6) NOT NULL,
        nom_tipo TEXT NOT NULL
    );

CREATE TABLE
    Empleados(
        id_emp INT AUTO_INCREMENT PRIMARY KEY,
        fktipo INT NOT NULL,
        dni_emp BIGINT NOT NULL,
        ape_emp TEXT NOT NULL,
        nom_emp TEXT NOT NULL,
        edad_emp INT NOT NULL,
        tel_emp BIGINT NOT NULL,
        email_emp TEXT NOT NULL,
        direct_emp TEXT NOT NULL,
        fecha_de_nacimiento_emp DATE NOT NULL,
        fecha_ingreso_emp DATE NOT NULL,
        fecha_egreso_emp DATE,
        fkgender INT NOT NULL,
        fkeps INT NOT NULL,
        fkcaja INT NOT NULL,
        fkcargo INT NOT NULL,
        fksede INT NOT NULL,
        fkturno INT NOT NULL,
        descrip_emp TEXT,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Existenciasdeproductos(
        id_exist INT AUTO_INCREMENT PRIMARY KEY,
        fecha_exist_entrada DATETIME NOT NULL,
        cant_produc INT NOT NULL,
        fksede INT NOT NULL,
        fkproduct INT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Productos(
        id_produc INT AUTO_INCREMENT PRIMARY KEY,
        codigo_product VARCHAR(20) NOT NULL,
        nom_produc TEXT NOT NULL,
        precio_venta DOUBLE NOT NULL,
        precio_compra DOUBLE NOT NULL,
        notas_product TEXT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Facturasdeproveedores(
        id_facompras INT AUTO_INCREMENT PRIMARY KEY,
        codigo_facompras TEXT NOT NULL,
        fecha_facompras DATETIME NOT NULL,
        cant_produc INT NOT NULL,
        descuento_proveedores INT DEFAULT 0,
        fkproduc INT NOT NULL,
        fkprov INT NOT NULL,
        fksede INT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Facturasdeclientes(
        id_facentregas INT AUTO_INCREMENT PRIMARY KEY,
        codigo_faventas TEXT NOT NULL,
        fecha_facentregas DATETIME NOT NULL,
        fecha_vencimiento DATETIME NOT NULL,
        cant_produc INT NOT NULL,
        descuento_clientes INT DEFAULT 0,
        impuestoIVA FLOAT NOT NULL,
        fkproduc INT NOT NULL,
        fkclient INT NOT NULL,
        fksede INT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Proveedores(
        id_prov INT AUTO_INCREMENT PRIMARY KEY,
        nom_prov TEXT NOT NULL,
        tel_prov BIGINT NOT NULL,
        mail_prov TEXT NOT NULL,
        direc_prov TEXT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

CREATE TABLE
    Clientes(
        id_clien INT AUTO_INCREMENT PRIMARY KEY,
        fktipo INT NOT NULL,
        dni_clien BIGINT NOT NULL,
        nom_clien TEXT NOT NULL,
        ape_clien TEXT NOT NULL,
        tel_clien BIGINT NOT NULL,
        mail_clien TEXT NOT NULL,
        direc_clien TEXT NOT NULL,
        fkest INT NOT NULL
    ) ENGINE = InnoDB DEFAULT COLLATE = utf8_spanish_ci;

ALTER TABLE Ciudades
ADD
    CONSTRAINT EstadoDeLaCiudad FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE Sedes
ADD
    CONSTRAINT EstadoDeLaSede FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE EPS
ADD
    CONSTRAINT EstadoDeLaEPS FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE Cajadecompensacion
ADD
    CONSTRAINT EstadoDeLaCaja FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE Turnos
ADD
    CONSTRAINT EstadoDelTurno FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE Cargos
ADD
    CONSTRAINT EstadoDelCargo FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE Empleados
ADD
    CONSTRAINT EstadoDelEmpleado FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE
    Existenciasdeproductos
ADD
    CONSTRAINT EstadoDeLaExistencia FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE Facturasdeclientes
ADD
    CONSTRAINT EstadoDeLaFacturaClientes FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE
    Facturasdeproveedores
ADD
    CONSTRAINT EstadosDeLaFacturaProveedores FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE Proveedores
ADD
    CONSTRAINT EstadoDelProveedor FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE Clientes
ADD
    CONSTRAINT EstadoDelCliente FOREIGN KEY (fkest) REFERENCES Estado(id_est);

ALTER TABLE Clientes
ADD
    CONSTRAINT TipoDeDocumento FOREIGN KEY (fktipo) REFERENCES TipoDNI(id_tipo);

-- Relaciones entres las demás tablas

ALTER TABLE Sedes
ADD
    CONSTRAINT Opera FOREIGN KEY (fkciudad) REFERENCES Ciudades(id_ciu);

ALTER TABLE
    Existenciasdeproductos
ADD
    CONSTRAINT ExiSed FOREIGN KEY (fksede) REFERENCES Sedes(id_sede);

ALTER TABLE
    Existenciasdeproductos
ADD
    CONSTRAINT ExiProd FOREIGN KEY (fkproduct) REFERENCES Productos(id_produc);

ALTER TABLE
    Facturasdeproveedores
ADD
    CONSTRAINT ProdProv FOREIGN KEY (fkproduc) REFERENCES Productos(id_produc);

ALTER TABLE Facturasdeclientes
ADD
    CONSTRAINT CliFac FOREIGN KEY (fkclient) REFERENCES Clientes(id_clien);

ALTER TABLE Facturasdeclientes
ADD
    CONSTRAINT CliPro FOREIGN KEY (fkproduc) REFERENCES Productos(id_produc);

ALTER TABLE Facturasdeclientes
ADD
    CONSTRAINT SedFacClient FOREIGN KEY (fksede) REFERENCES Sedes(id_sede);

ALTER TABLE
    Facturasdeproveedores
ADD
    CONSTRAINT ProvProd FOREIGN KEY (fkprov) REFERENCES Proveedores(id_prov);

ALTER TABLE
    Facturasdeproveedores
ADD
    CONSTRAINT SedFac FOREIGN KEY (fksede) REFERENCES Sedes(id_sede);

ALTER TABLE Empleados
ADD
    CONSTRAINT TipoDeDocumentoEmpleados FOREIGN KEY (fktipo) REFERENCES TipoDNI(id_tipo);

ALTER TABLE Empleados
ADD
    CONSTRAINT TurEmp FOREIGN KEY (fkturno) REFERENCES Turnos(id_turnos);

ALTER TABLE Empleados
ADD
    CONSTRAINT GenEmp FOREIGN KEY (fkgender) REFERENCES Generos(id_gender);

ALTER TABLE Empleados
ADD
    CONSTRAINT CarEmp FOREIGN KEY (fkcargo) REFERENCES Cargos(id_cargo);

ALTER TABLE Empleados
ADD
    CONSTRAINT EPSEmp FOREIGN KEY (fkeps) REFERENCES EPS(id_eps);

ALTER TABLE Empleados
ADD
    CONSTRAINT CajaEmp FOREIGN KEY (fkcaja) REFERENCES Cajadecompensacion(id_caja);

ALTER TABLE Empleados
ADD
    CONSTRAINT SedEmp FOREIGN KEY (fksede) REFERENCES Sedes(id_sede);

INSERT INTO Estado(nom_est)
VALUES ("Habilitado"), ("Inhabilitado"), ("En existencia"), ("Agotado"), ("Activo"), ("Despedido"), ("Incapacidad"), ("Vacaciones"), ("Pagada"), ("Por pagar"), ("Inactivo");

INSERT INTO
    TipoDNI(iniciales, nom_tipo)
VALUES
    ("CC", "Cedula de Ciudadania"),
    ("TI", "Tarjeta de Identidad"),
    ("PPT", "Permiso de Proteccion Temporal"),
    ("PS", "Pasaporte Extranjero"),
    ("PSN", "Pasaporte Nacional");

INSERT INTO
    Ciudades(nom_ciu, capital_ciudad, fkest)
VALUES (
        "Bogota D.C.",
        "Cundinamarca",
        1
    ), ("Medellin", "Antioquia", 1), ("Cali", "Valle del Cauca", 1), ("Michelena", "Tachira", 2);

INSERT INTO
    Proveedores(
        nom_prov,
        tel_prov,
        mail_prov,
        direc_prov,
        fkest
    )
VALUES (
        "SteelDick S.A.S",
        3152689510,
        "steeldick34@gmail.com",
        "Kr 34C #54 - 84",
        5
    ), (
        "JellyRaw",
        3002568948,
        "jellraw@gmail.com",
        "Cl 35A #54 - 78",
        5
    ), (
        "FeYCalidad",
        3157895110,
        "feycalidad89@yahoo.com",
        "Kr 65 Tns 65 - 43C",
        5
    );

INSERT INTO
    Sedes(
        nom_sed,
        direc_sed,
        fkciudad,
        fkest
    )
VALUES (
        "Kennedy 13",
        "Kr 13 # 25 - 50",
        1,
        1
    ), (
        "Usaquen",
        "Cl 191A # 11A - 25",
        1,
        1
    ), (
        "Napole",
        "Cl 43B # 54 - 67C",
        2,
        1
    ), (
        "Central Madeirence",
        "Cl 65C Av El Libertador #45",
        4,
        2
    );

INSERT INTO
    Productos(
        codigo_product,
        nom_produc,
        precio_venta,
        precio_compra,
        notas_product,
        fkest
    )
VALUES (
        "1000-145",
        "Cinta aislante 5 mts marca Psycho",
        15000,
        13500,
        "En buen estado",
        3
    ), (
        "1000-146",
        "Cerrucho para madera 23 cm marca Ferwrell",
        70000,
        45000,
        "En buen estado",
        3
    ), (
        "1000-147",
        "Juego de destornilladores estria 8 in marca SteelDick",
        25600,
        15000,
        "En estado con un iq mayor al promedio",
        3
    ), (
        "1000-148",
        "Juego de destornilladores estria 8 in marca SteelDick",
        25600,
        15000,
        "1000-145",
        4
    );

INSERT INTO
    Existenciasdeproductos(
        fecha_exist_entrada,
        cant_produc,
        fksede,
        fkproduct,
        fkest
    )
VALUES (
        "2023-05-30 16-50",
        45000,
        2,
        3,
        5
    ), (
        "2023-05-30 16-50",
        15000,
        1,
        3,
        5
    ), (
        "2023-05-30 16-50",
        58600,
        2,
        1,
        5
    ), (
        "2023-06-03 12-21",
        89450,
        4,
        2,
        5
    );

INSERT INTO
    Clientes(
        fktipo,
        dni_clien,
        nom_clien,
        ape_clien,
        tel_clien,
        mail_clien,
        direc_clien,
        fkest
    )
VALUES (
        1,
        10345256712,
        "Juliana Manola",
        "Rodriguez Rondon",
        3081256984,
        "mail1@hotmail.com",
        "Cl 54A #45 - 98",
        1
    ), (
        1,
        10486284361,
        "Roberto Fabian",
        "Herrera Martinez",
        3081256984,
        "mail1@gmail.com",
        "Cl 54A #45 - 98",
        1
    ), (
        1,
        10321584998,
        "Benito Jose",
        "Cameila Jimenez",
        3027845596,
        "benitocamelaXD123@yahoo.com",
        "Tns 23a #3b - 89c",
        1
    );

INSERT INTO
    Facturasdeproveedores(
        codigo_facompras,
        fecha_facompras,
        cant_produc,
        descuento_proveedores,
        fkproduc,
        fkprov,
        fksede,
        fkest
    )
VALUES (
        "100-001",
        "2023-06-03 12-16",
        15000,
        0,
        2,
        1,
        4,
        9
    ), (
        "100-002",
        "2023-06-03 12-30",
        80000,
        35,
        3,
        3,
        4,
        9
    ), (
        "100-003",
        "2023-06-03 16-10",
        2500,
        10,
        3,
        2,
        3,
        9
    ), (
        "100-004",
        "2023-06-08 01-13",
        300,
        0,
        1,
        3,
        2,
        10
    );

INSERT INTO
    Facturasdeclientes(
        codigo_faventas,
        fecha_facentregas,
        fecha_vencimiento,
        cant_produc,
        impuestoIVA,
        fkproduc,
        fkclient,
        fksede,
        fkest
    )
VALUES (
        "100-000",
        "2023-06-08 13-16",
        "2023-08-08 23-59",
        5,
        16,
        1,
        2,
        4,
        9
    ), (
        "100-001",
        "2023-06-08 13-20",
        "2023-08-08 23-59",
        1,
        16,
        3,
        3,
        1,
        9
    ), (
        "100-002",
        "2023-06-09 16-33",
        "2023-08-08 23-59",
        2,
        16,
        2,
        1,
        2,
        9
    );

INSERT INTO EPS(eps, fkest)
VALUES ("Nueva EPS", 1), ("Capital Salud", 1), ("Colsubsidio", 2), ("Famisanar", 1), ("Sanitas", 1);

INSERT INTO
    Cajadecompensacion (caja, fkest)
VALUES ("Cafam", 1), ("Compensar", 1), ("Grupo AVAL", 1);

INSERT INTO
    Turnos(
        nom_turno,
        entrada,
        salida,
        fkest
    )
VALUES (
        "Mañana",
        "08:00:00",
        "18:00:00",
        1
    ), (
        "Tarde",
        "12:00:00",
        "21:00:00",
        1
    );

INSERT INTO Generos(gender)
VALUES ("Masculino"), ("Femenino"), ("Nazi"), ("Chavista"), (
        "Elefante guerrero psiquico ancestral"
    ), ("Mexicano"), ("otros");

INSERT INTO
    Cargos(
        cargo,
        sueldo,
        descrip_cargo,
        fkest
    )
VALUES (
        "Cajero/ra",
        1250000,
        "Atiende a la clientela en las cajas",
        1
    ), (
        "Jefe de almacen",
        2300000,
        "Administra los productos en almacen",
        1
    ), (
        "Portero/ra",
        1450000,
        "Ciuda la entrada y salida (pueden rotar entre tienda y almacen)",
        1
    ), (
        "Ayudante",
        1150000,
        "Se encuentra en los pasillos ayudando a la clientela en sus necesidades",
        1
    );

INSERT INTO
    Empleados(
        fktipo,
        dni_emp,
        ape_emp,
        nom_emp,
        edad_emp,
        tel_emp,
        email_emp,
        direct_emp,
        fecha_de_nacimiento_emp,
        fecha_ingreso_emp,
        fecha_egreso_emp,
        fkgender,
        fkeps,
        fkcaja,
        fkcargo,
        fksede,
        fkturno,
        descrip_emp,
        fkest
    )
VALUES (
        1,
        1012659815,
        "Ferrero Hilarion",
        "Garbiel Jose",
        23,
        3014521687,
        "hilarion.243@gmail.com",
        "Cl 63A # 90 - 45B AV. Lagos de la cadaverica mama de Rada",
        "1987-09-10",
        "2023-09-14",
        "2024-03-14",
        5,
        3,
        1,
        2,
        4,
        1,
        "Un hijo de puta total >:(",
        5
    ), (
        1,
        1450640694,
        "Alvarez",
        "Diana Maria",
        25,
        31548965062,
        "Dianitatumamacita45@gmail.com",
        "Kr 54B Av. Los Olivos #90 - 51",
        "1992-06-25",
        "2023-09-14",
        "2024-03-14",
        2,
        1,
        2,
        1,
        4,
        2,
        "Un sol de Dios :3",
        7
    ), (
        2,
        1031541248,
        "Rada Vasquez",
        "Mateo",
        16,
        3185308188,
        "Soygay@hotmail.com",
        "Cl 191A # 11A - 25",
        "1986-06-12",
        "2023-09-14",
        "2024-03-14",
        5,
        1,
        1,
        3,
        4,
        2,
        "El ser mas pasivamente permisivo que Dios pudo haber creado",
        8
    );