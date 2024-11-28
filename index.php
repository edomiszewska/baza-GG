
<?php
$baza=mysqli_connect('localhost', 'root','','fryzjer');







?>





<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baza fryzjer</title>
</head>
<body>
    

<form action="index.php"  method="POST">

<label for="pracownicy">Dodaj pracownika:<br> 
imię:<input type="text"><br> 
nazwisko: <input type="text">

</label><br>

<label for="klienci">Dodaj klienta<br> 

imię:<input type="text"><br> 
nazwisko:<input type="text"><br>
pesel: <input type="number">
</label><br>

<label for="wizyta">Dodaj wizytę<br>
nazwa: <select name="wybierz" id="wybierz">
    <option value="farbowanie">farbowanie</option>
    <option value="rozjasnianie">rozjasnianie</option>
    <option value="strzyzenie">strzyzenie</option>
    <option value="obciecie">obcięcie</option>
</select><br>

<label for="data">Data: <br>
    <input type="date"><br>
    Godzina wizyty:<br><input type="time" name="" id="">
    
</label>

</label>


</form>



</body>
</html>










