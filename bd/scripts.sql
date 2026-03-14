-- RECUPERACIÓN DE TABLA DE DATOS USUARIOS

CREATE TABLE usuarios (
    idusuarios INT NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(45) NOT NULL,
    apellidos VARCHAR(45) NULL,
    cedula VARCHAR(45) NOT NULL,
    usuario VARCHAR(45) NOT NULL,
    password VARCHAR(45) NOT NULL,
    PRIMARY KEY (idusuarios),
    UNIQUE KEY cedula_UNIQUE (cedula)
)
DEFAULT CHARSET=utf8mb4 
COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO usuarios (idusuarios, nombres, apellidos, cedula, usuario, password) VALUES
(1,'Juan','Perez','10000001','jperez','pass123'),
(2,'Maria','Gomez','10000002','mgomez','pass123'),
(3,'Carlos','Lopez','10000003','clopez','pass123'),
(4,'Ana','Martinez','10000004','amartinez','pass123'),
(5,'Luis','Rodriguez','10000005','lrodriguez','pass123'),
(6,'Sofia','Hernandez','10000006','shernandez','pass123'),
(7,'Pedro','Diaz','10000007','pdiaz','pass123'),
(8,'Laura','Torres','10000008','ltorres','pass123'),
(9,'Jorge','Ramirez','10000009','jramirez','pass123'),
(10,'Elena','Flores','10000010','eflores','pass123'),
(11,'Miguel','Vargas','10000011','mvargas','pass123'),
(12,'Paula','Castro','10000012','pcastro','pass123'),
(13,'Diego','Rojas','10000013','drojas','pass123'),
(14,'Lucia','Ortega','10000014','lortega','pass123'),
(15,'Andres','Molina','10000015','amolina','pass123'),
(16,'Valeria','Silva','10000016','vsilva','pass123'),
(17,'Fernando','Navarro','10000017','fnavarro','pass123'),
(18,'Camila','Santos','10000018','csantos','pass123'),
(19,'Ricardo','Guerrero','10000019','rguerrero','pass123'),
(20,'Daniela','Mendez','10000020','dmendez','pass123'),
(21,'Oscar','Cruz','10000021','ocruz','pass123'),
(22,'Natalia','Peña','10000022','npena','pass123'),
(23,'Raul','Aguilar','10000023','raguilar','pass123'),
(24,'Patricia','Campos','10000024','pcampos','pass123'),
(25,'Hector','Vega','10000025','hvega','pass123'),
(26,'Claudia','Fuentes','10000026','cfuentes','pass123'),
(27,'Eduardo','Reyes','10000027','ereyes','pass123'),
(28,'Gabriela','Cortes','10000028','gcortes','pass123'),
(29,'Mario','Paredes','10000029','mparedes','pass123'),
(30,'Adriana','Salazar','10000030','asalazar','pass123'),
(31,'Sergio','Delgado','10000031','sdelgado','pass123'),
(32,'Monica','Ibarra','10000032','mibarra','pass123'),
(33,'Ruben','Escobar','10000033','rescobar','pass123'),
(34,'Carolina','Valdez','10000034','cvaldez','pass123'),
(35,'Victor','Nunez','10000035','vnunez','pass123'),
(36,'Tatiana','Bravo','10000036','tbravo','pass123'),
(37,'Alberto','Acosta','10000037','aacosta','pass123'),
(38,'Juliana','Pinto','10000038','jpinto','pass123'),
(39,'Guillermo','Soto','10000039','gsoto','pass123'),
(40,'Mariana','Lara','10000040','mlara','pass123'),
(41,'Pablo','Cabrera','10000041','pcabrera','pass123'),
(42,'Lorena','Figueroa','10000042','lfigueroa','pass123'),
(43,'Roberto','Miranda','10000043','rmiranda','pass123'),
(44,'Veronica','Rivas','10000044','vrivas','pass123'),
(45,'Francisco','Serrano','10000045','fserrano','pass123'),
(46,'Isabel','Carrillo','10000046','icarrillo','pass123'),
(47,'Arturo','Solano','10000047','asolano','pass123'),
(48,'Diana','Zamora','10000048','dzamora','pass123'),
(49,'Esteban','Mejia','10000049','emejia','pass123'),
(50,'Paola','Benitez','10000050','pbenitez','pass123');

-- RECUPERACIÓN DE TABLA DE PRODUCTOS

CREATE TABLE productos_electronicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(255) NOT NULL,
    stock INT,
    precio DECIMAL(10,2) CHECK (precio > 0),
    categoria VARCHAR(100)
);

INSERT INTO productos_electronicos (nombre_producto, stock, precio, categoria) VALUES
('Laptop Dell Inspiron 15', 10, 899.99, 'Laptops'),
('Mouse Inalámbrico Logitech', 50, 25.99, 'Accesorios'),
('Teclado Mecánico Redragon', 30, 59.99, 'Accesorios'),
('Monitor Samsung 24 pulgadas', 15, 179.99, 'Monitores'),
('Smartphone Samsung Galaxy A54', 20, 399.99, 'Celulares'),
('Tablet Lenovo Tab M10', 12, 229.99, 'Tablets'),
('Audífonos Bluetooth Sony', 25, 129.99, 'Audio'),
('Disco Duro Externo 1TB Seagate', 18, 64.99, 'Almacenamiento'),
('Memoria USB 64GB Kingston', 40, 12.99, 'Almacenamiento'),
('Cargador USB-C Anker', 35, 19.99, 'Accesorios'),
('Webcam Logitech C920', 14, 89.99, 'Periféricos'),
('Impresora HP DeskJet 2775', 8, 99.99, 'Impresoras'),
('Router WiFi TP-Link AC1200', 16, 49.99, 'Redes'),
('Smartwatch Xiaomi Mi Watch', 22, 149.99, 'Wearables'),
('Altavoz Bluetooth JBL Flip 6', 19, 119.99, 'Audio'),
('Tarjeta MicroSD 128GB SanDisk', 45, 21.99, 'Almacenamiento'),
('Laptop HP Pavilion 14', 9, 749.99, 'Laptops'),
('Monitor LG UltraWide 29 pulgadas', 7, 299.99, 'Monitores'),
('Teclado Inalámbrico Microsoft', 28, 34.99, 'Accesorios'),
('Cámara de Seguridad Xiaomi', 13, 59.99, 'Seguridad');