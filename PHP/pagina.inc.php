<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen multimedial</title>

    <?php
    if (isset($_POST['colores'])) {
        //header("Location: pagina.inc.php");
        //echo $_POST['colores'];
        $fondo = $_POST['colores'];
    } else {
        $fondo = '#585858';
    }
    ?>

    <style type="text/css">
        body {
            background-color: <?= $fondo ?>;
        }

        #nombre {
            background-color: #D8D8D8;
            text-align: center;
            margin: 3rem;
            padding: 1rem;
            border: 2px solid #ccc;
        }

        #nombre h1 {
            font-weight: bold;
            text-align: center;
            color: blue;

        }

        #nombre h2 {
            font-weight: bold;
            text-align: center;
            color: #DF0101;

        }

        #cambio {
            background-color: #D8D8D8;
            text-align: center;
            margin: 3rem;
            padding: 1rem;
            border: 2px solid #ccc;
            font-size: medium;
            font-weight: bold;
        }

        #cambio table {
            width: 100%;
            padding-top: 5px;
        }

        #sql {
            background-color: #D8D8D8;
            text-align: center;
            margin-top: 5px;
            padding: 3px;
            border: 2px solid #ccc;

        }

        #sql table {
            background-color: #D8D8D8;
            text-align: center;
            margin-top: 5px;
            padding: 3px;
            border: 2px solid #ccc;
            width: 50%;
            margin: 0 auto;
            border-color: #0B0B61;
        }

        #sql table #departamento {
            font-weight: bold;
            text-align: center;
            color: #DF0101;
        }

        #php {
            background-color: #D8D8D8;
            text-align: center;
            margin-top: 5px;
            padding: 3px;
            border: 2px solid #ccc;

        }

        #php table {
            background-color: #D8D8D8;
            text-align: center;
            margin-top: 5px;
            padding: 3px;
            border: 2px solid #ccc;
            width: 50%;
            margin: 0 auto;
            border-color: #0B0B61;
        }

        #php table #departamento {
            font-weight: bold;
            text-align: center;
            color: #DF0101;
        }
    </style>

</head>

<body>
    <div id="nombre">
        <h1>Pagina de Inicio</h1>

        <?php
        include "coneccion.inc.php";
        session_start();
        $sql_query = "select * from academico where ci='" . $_SESSION['uname'] . "'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);
        //echo "<br>";
        echo "Bienvenido a :";
        echo "<br>";
        echo "<h2>";
        echo $row[1];
        echo "</h2>";
        ?>

        <button ><a href="home.inc.php" >Volver</a></button>

    </div>

    <div id="cambio">
        <h3>Cambio de color de Fondo</h3>
        <form method="post" action="">
            <select name="colores" id="colores">
                <option>Seleccione un color</option>
                <option value="#B40404">Rojo</option>
                <option value="#3104B4">Azul</option>
                <option value="#088A4B">Verde</option>
            </select>
            <table>
                <tr>
                    <td><input name="Submit" type="submit" value="Cambio"></td>
                </tr>
            </table>
        </form>
    </div>
    <br>

    <div id="sql">
        <h2>Realizacion de la consulta con la base de datos</h2>

        <?php
        $sql_query = "select sum(case when a.depto='01' then 1 else 0 end) as CH, 
                            sum(case when a.depto='02' then 1 else 0 end) as LP, 
                            sum(case when a.depto='03' then 1 else 0 end)as CB, 
                            sum(case when a.depto='04' then 1 else 0 end)as ORuro, 
                            sum(case when a.depto='05' then 1 else 0 end)as PT, 
                            sum(case when a.depto='06' then 1 else 0 end)as TJ, 
                            sum(case when a.depto='07' then 1 else 0 end)as SC, 
                            sum(case when a.depto='08' then 1 else 0 end)as BE, 
                            sum(case when a.depto='09' then 1 else 0 end)as PD 
                            from academico a, notas n where a.ci=n.ci and n.notas>50";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);
        ?>
        <table border="1px">
            <tr id="departamento">
                <td>Chuquisaca</td>
                <td>La Paz</td>
                <td>Cochabamba</td>
                <td>Oruro</td>
                <td>Potosi</td>
                <td>Tarija</td>
                <td>Santa Cruz</td>
                <td>Beni</td>
                <td>Pando</td>
            </tr>
            <?php
            echo "<tr>";
            echo "<td>" . $row['CH'] . "</td>";
            echo "<td>" . $row['LP'] . "</td>";
            echo "<td>" . $row['CB'] . "</td>";
            echo "<td>" . $row['ORuro'] . "</td>";
            echo "<td>" . $row['PT'] . "</td>";
            echo "<td>" . $row['TJ'] . "</td>";
            echo "<td>" . $row['SC'] . "</td>";
            echo "<td>" . $row['BE'] . "</td>";
            echo "<td>" . $row['PD'] . "</td>";
            echo "<tr>";
            ?>
        </table>
    </div>
    <br>

    <div id="php">
        <h2>Consulta Realizado por PHP (Manejo de Arrays)</h2>

        <?php
        $departamento = array(8, 4, 3, 2, 2, 1, 7, 9, 1, 2, 5, 6, 1, 7, 5, 2, 2, 4);
        $notas = array(52, 70, 70, 80, 20, 48, 51, 30, 80, 60, 61, 20, 49, 78, 53, 20, 10, 49);
        $contador = count($notas);
        $resultado = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        for ($i = 0; $i < $contador; $i++) {
            if ($notas[$i] > 50) {
                switch ($departamento[$i]) {
                    case 1:
                        $resultado[0] = $resultado[0] + 1;
                        break;
                    case 2:
                        $resultado[1] = $resultado[1] + 1;
                        break;
                    case 3:
                        $resultado[2] = $resultado[2] + 1;
                        break;
                    case 4:
                        $resultado[3] = $resultado[3] + 1;
                        break;
                    case 5:
                        $resultado[4] = $resultado[4] + 1;
                        break;
                    case 6:
                        $resultado[5] = $resultado[5] + 1;
                        break;
                    case 7:
                        $resultado[6] = $resultado[6] + 1;
                        break;
                    case 8:
                        $resultado[7] = $resultado[7] + 1;
                        break;
                    case 9:
                        $resultado[8] = $resultado[8] + 1;
                        break;
                }
            }
        }
        ?>
        <table border="1px">
            <tr id="departamento">
                <td>Chuquisaca</td>
                <td>La Paz</td>
                <td>Cochabamba</td>
                <td>Oruro</td>
                <td>Potosi</td>
                <td>Tarija</td>
                <td>Santa Cruz</td>
                <td>Beni</td>
                <td>Pando</td>
            </tr>
            <?php
            echo "<tr>";
            echo "<td>" . $resultado[0] . "</td>";
            echo "<td>" . $resultado[1] . "</td>";
            echo "<td>" . $resultado[2] . "</td>";
            echo "<td>" . $resultado[3] . "</td>";
            echo "<td>" . $resultado[4] . "</td>";
            echo "<td>" . $resultado[5] . "</td>";
            echo "<td>" . $resultado[6] . "</td>";
            echo "<td>" . $resultado[7] . "</td>";
            echo "<td>" . $resultado[8] . "</td>";
            echo "<tr>";
            echo "</table>";

            ?>
    </div>

</body>

</html>