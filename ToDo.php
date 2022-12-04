<!-- Gruppe 22: Leonard Richertz, Jessica Schiffer-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo Liste</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<?php
    $name="Todos (Aktuelles Projekt)";
    include("ueberschrift.php");
?>

<?php
    $todos=array(
            array(
                'header' => 'ToDo:',
                'item1' => 'HTML Datei erstellen (Max Mustermann)',
                'item2' => 'CSS Datei erstellen (Max Mustermann)'
            ),
            array(
                'header' => 'Erledigt:',
                'item1' => 'PC eingeschaltet (Petra Müller)',
                'item2' => 'Kaffee trinken (Petra Müller)'
            ),
            array(
                'header' => 'Verschoben:',
                'item1' => 'Für die Uni lernen (Max Mustermann)'
            )
    );

    var_dump($todos);
?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-2">
                <?php include("menu.html"); ?>
            </div>

            <div class="col">
                <div class="row">
                    <?php
                        foreach ($todos as $todo): ?>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header"><?php echo $todo['header'] ?></div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?php echo $todo['item1'] ?></li>
                                        <li class="list-group-item"><?php echo $todo['item2'] ?></li>
                                    </ul>
                                </div>
                            </div>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
    </div>

</body>
</html>