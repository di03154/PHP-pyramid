<!DOCTYPE>
<html>
<head>
    <style>
        .color {
            background-color: red;
        }
    </style>
    <script>
        function back() {
            location.replace("0713.html");
        }
    </script>
</head>
<body>
    <?php
    $fScope = $_GET['first'];
    $sScope = $_GET['last'];
    $hang = $_GET['hang'];
    $yul = $_GET['yul'];
    $beasu = $_GET['beasu'];
    $ran = [];
    function error() {
        echo ("<script language=javascript> alert('범위오류');
                location.replace(\"0713.html\");
                </script>");
    }
    if($sScope - $fScope + 1 < 25)  {
       echo call_user_func(error);
    }
    else    {
        for($i=0; $i < $hang*$yul; $i++)    {
            $ran[$i] = rand($fScope,$sScope);
            for($j = 0; $j < $i; $j++)  {
                if($ran[$i] == $ran[$j]) {
                    $i--;
                }
            }
        }
        echo "<table border=1 width = 500>";
        for($i = 0, $k = 0; $i < $yul; $i++, $k = $k + $hang)    {
            echo "<tr>";
            for($j = 0; $j < $hang; $j++)   {
                $hop = $k+$j;
                echo "<td";
                if($ran[$hop] % $beasu == 0) {
                    echo " class = 'color'";
                }
                echo ">$ran[$hop]</td>";
            }
        }
        echo "</table>";
    }
    ?>
    <br>
<button onclick="back();">돌아가기</button>
</body>
</html>
