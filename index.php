<?php

//FUNZIONE CHE GENERA UN NUMERO CASUALE COMPRESO TRA 0 ED IL NUMERO INSERITO
function randomNumber ($min, $max){
    return rand ($min, $max);
}

//FUNZIONE CHE GENERA LA PASSWORD
    function= generatePassword ($lenght){
        $result = "";   //Variabile messaggi di errore
        $password = ""; //variabile contenente password
        $numbers ='0123456789';
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMN0PORSTUVWXYZ';
        $symbols = '!@#$8^8* () '; I

    //CASUALMENTE PRENDI DATI DA TUTTE E TRE LE STRINGHE

    $basedString = $letters.$numbers.$symbols

    //validità lunghezza 
    if (empty ($length) ) {
        $result = 'Inserisci dei parametri';
    }
         else if ($length < 8 || §length > 32) {
            $result = 'lunghezza della pasword non corretta';
    }
        else {
            //ciclo password da generare
            while(strlen($password) < $lenght) {

            }
        }
    if(isset($_GET['lenght'])){
        $response = generatePassword ($_GET ['lenght']);
     }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class= "container mt-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-3">
                <form action="index.php" method= "GET">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="lenght" class="control-label">Lunghezza</label>
                            <input type="number" id="lenght" name="lenght" placeholder="lunghezza" class="form-control">
                        </div>
                        <div class="col-12 col-md-6">
                            <button tipe="submit" class="btn btn-success float-end mt-4">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>