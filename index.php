
<?php
$baza=mysqli_connect('localhost', 'root','','fryzjer');


if(isset($_POST['pracownik'])){
$imiep=$_POST['imiep'];
$nazwiskop=$_POST['nazwiskop'];
$zapytanie="insert into pracownicy(imie_p, nazwisko_p) values('$imiep','$nazwiskop');";
mysqli_query($baza,$zapytanie);

}

if(isset($_POST['klient'])){
    $imiek=$_POST['imiek'];
    $nazwiskok=$_POST['nazwiskok'];
    $pesel=$_POST['pesel'];
    $zapytanie1="insert into klienci(imie, nazwisko, pesel) values('$imiek','$nazwiskok','$pesel');";
    mysqli_query($baza,$zapytanie1);
    }

    if(isset($_POST['wizyta'])){
        $nazwa=$_POST['wybierz'];
        $data=$_POST['data'];
        $cena=0;
        
        switch($nazwa)
        {
            case "farbowanie": $cena=170;
            break;

            case "rozjasnianie": $cena=200;
            break;

            case "strzyzenie": $cena=50;
            break;

            case "obciecie": $cena=80;
            break;
        } ;
        $zapytanie2="insert into wizyty(nazwa, cena, data) values('$nazwa','$cena','$data');";
        mysqli_query($baza,$zapytanie2);

        }
    

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
imię:<input type="text" name='imiep'><br> 
nazwisko: <input type="text" name='nazwiskop'>
<br><button name='pracownik'>Dodaj</button>
</label><br>

<label for="klienci">Dodaj klienta<br> 

imię:<input type="text" name='imiek'><br> 
nazwisko:<input type="text" name='nazwiskok'><br>
pesel: <input type="number" name='pesel'>
<br><button name='klient'>Dodaj</button>
</label><br>

<label for="wizyta">Dodaj wizytę<br>
nazwa: <select name="wybierz" id="wybierz">
    <option value="farbowanie">farbowanie</option>
    <option value="rozjasnianie">rozjasnianie</option>
    <option value="strzyzenie">strzyzenie</option>
    <option value="obciecie">obciecie</option>
</select><br>

<label for="data">Data: <br>
    <input type="date" name='data'>   <br> 
    
    <button name='wizyta'>Prześlij</button> 
    
</label>

</label>


</form>



</body>
</html>















