<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100px;
            
        }
    </style>
</head>
<body>
    <?
    echo "<table border='1'>";
        for($i=0;$i<9;$i++){
            echo "<tr>";
            for($j=0;$j<9;$j++){
                echo "<td></td>";
                if($i+$j%2==0){
                    echo ""
                }
            }
            echo "</tr>";
        }
    echo "</table>";
    ?>
</body>
</html>