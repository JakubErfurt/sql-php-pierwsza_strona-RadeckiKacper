<!DOCTYPE html>
<html>
<head>
<title>Kacper Radecki</title>
<link rel="stylesheet" href="/style.css">
    
    <h1>Kacper Radecki nr 10</h1>
</head>
<body>
<div>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-RadeckiKacper">Github</a></br>
    <br/>
    <br/>
    <div>
       <a href="/pracownicy/orgPracownicy.php">organizacjaPracownicy.php</a><br/>
        <br/>
        <div>
       <a href="/Grid/index.html">Grid</a><br/>
        <br/>
        <br/>
       <a href="/pracownicy/funkcAgregujace.php">funkcjeAgregujace.php</a><br/>
        <br/>
        <br/>
        <a href="/pracownicy/data.php">Data i Czas</a></br>
    <br/>
    
<br/>
        <a href="/pracownicy/insert.php">Dane do Bazy</a></br>
    <br/>
<br/>
        <a href="/biblioteka/ksiazki.php">Książki</a></br>
    <br/>
    <br/>
        <a href="/flexbox/index.html">Flexbox</a></br>
    <br/>

    </div>
<?php
$servername = "mysql-radeckikacper.alwaysdata.net";
$username = "217137";
$password = "Niedlapsa1";
$dbname = "radeckikacper_mysql";

$conn = new mysqli($servername, $username, $password, $dbname);
echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy where dzial=2";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT * FROM pracownicy where (dzial=2) or (dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT * FROM pracownicy where zarobki<30";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
