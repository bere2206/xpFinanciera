<?php
$mysqli = new mysqli("servername", "username", "password", "dbname");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT edad, genero, prima_mensual, ingreso_mensual, recuperacion FROM calculo_100 WHERE 1;


$stmt = $mysqli->prepare(sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cedad, $prima_mensual, $ingreso_mensual, $recuperacion);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>edad</th>";
echo "<td>" . $cedad . "</td>";
echo "<th>Prima_Mensual</th>";
echo "<td>" . $prima_mensual . "</td>";
echo "<th>Ingreso_Mensual</th>";
echo "<td>" . $ingreso_mensual . "</td>";
echo "<th>recuperacion</th>";
echo "<td>" . $recuperacion . "</td>";
echo "</tr>";
echo "</table>";
?><?php
$mysqli = new mysqli("servername", "username", "password", "dbname");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
FROM customers WHERE customerid = ?";

$stmt = $mysqli->prepare(sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $cid . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $cname . "</td>";
echo "<th>ContactName</th>";
echo "<td>" . $name . "</td>";
echo "<th>Address</th>";
echo "<td>" . $adr . "</td>";
echo "<th>City</th>";
echo "<td>" . $city . "</td>";
echo "<th>PostalCode</th>";
echo "<td>" . $pcode . "</td>";
echo "<th>Country</th>";
echo "<td>" . $country . "</td>";
echo "</tr>";
echo "</table>";
?>