<?
try {
    $conn = new PDO("sqlsrv:server = tcp:rom.database.windows.net,1433; Database = qqq", "rom", "Rosbank1997");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE registration_too(
id INT NOT NULL IDENTITY(1,1),
PRIMARY KEY(id),
name VARCHAR(30),
email VARCHAR(30),
country VARCHAR(10),
$conn->query($sql);
$sql = "INSERT INTO city (id_country, country_name) VALUES
(1,"Moskow"),
(2,"St.Petersburg"),
(3,"Novosibirsk"),
(4,"Ecaterenburg"),
(5,"Novgorod"),
(6,"Kazan"),
(7,"Chelyabinsk"),
(8,"Omsk"),
(9,"Samara"),
(10,"Rostov na Donu");
birthday VARCHAR(10),
date DATE)";
$conn->query($sql);
echo "<h3>Таблица создана.</h3>";
}
catch (PDOException $e) {
print("Ошибка подключения к SQL Server.");
die(print_r($e));
}
?>
