<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Nivel de violencia</title>
</head>
<body>
    <h3 class="text-center">Resultado del analisis</h3>
    <?php
        $nivel = $_POST['rbOpcion'];
        switch($nivel){
            case "BI":
                echo "¡Ten cuidado!"; 
                echo "¡La violencia aumentara!";
            break;
            case "CH":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "ME":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "IL":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "CE":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "CA":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "CU":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "DE":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "RO":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "HP":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "IA":
                echo "¡Ten cuidado!";
                echo "¡La violencia aumentara!";
            break;
            case "CP":
                echo "¡Reacciona!";
                echo "¡No te dejes destruir!";
            break;
            case "DA":
                echo "¡Reacciona!";
                echo "¡No te dejes destruir!";
            break;
            case "MA":
                echo "¡Reacciona!";
                echo "¡No te dejes destruir!";
            break;
            case "CR":
                echo "¡Reacciona!";
                echo "¡No te dejes destruir!";
            break;
            case "GO":
                echo "¡Reacciona!";
                echo "¡No te dejes destruir!";
            break;
            case "PA":
                echo "¡Reacciona!";
                echo "¡No te dejes destruir!";
            break;
            case "EJ":
                echo "¡Reacciona!";
                echo "¡No te dejes destruir!";
            break;
            case "CT":
                echo "¡Reacciona!";
                echo "¡No te dejes destruir!";
            break;
            case "PT":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "EA":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "XT":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "OA":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "DI":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "AM":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "FO":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "AS":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "VI":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "MT":
                echo "¡Necesitas ayuda profesional!";
            break;
            case "HF":
                echo "¡Necesitas ayuda profesional!";
            break;
        }
    ?>
</body>
</html>