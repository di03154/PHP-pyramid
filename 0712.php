<!DOCTYPE>
<html>
<head>
    <style>
        body{
            font-family: "MS Gothic";
        }
        div {
            margin: 20px;
            border-style: solid;
            border-width: 5px;
            border-color: darkred;
            width: 200px;
            height: 45px;
            text-align: center;
            font-size: 30px;
            padding:30px;

        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script language="javascript">
        $(document).ready(function(){
            var second = 10;
            // 초기화
            $(".countTimeSecond").text(second);
            var timer = setInterval(function () {
                // 설정
                $(".countTimeSecond").text(second);
                if(second == 0){
                    clearInterval(timer);
                    location.replace("0712.html");
                }else{
                    second--;
                    //분처리
                    //시간처리
                }
            }, 1000); /* millisecond 단위의 인터벌 */
        });
    </script>
</head>
<body>
<?php
    $empty_space=50;
    if($_POST['que'] == -2)  {
        for($a = 1, $j = ord('A'); $a < 27; $a++)  {
            for($i = ord('A'); $i < $j + $a; $i++) {
                echo chr($i);
            }
            echo "<br>";
        }
    }
    else if($_POST['que'] == -3) {
        for($a = 0, $j = ord('A'); $a < 26; $a++)  {
            for($i = ord('A'); $i < ord('Z') - $a; $i++) {
                echo chr($i);
            }
            echo "<br>";
        }
    }
    else if($_POST['que'] == -4) {
        for($a = 1, $j = ord('A'); $a < 27; $a++)  {
            for($i = ord('A'); $i < $j + $a; $i++) {
                echo chr($i);
            }
            echo "<br>";
        }
        for($a = 0, $j = ord('A'); $a < 26; $a++)  {
            for($i = ord('A'); $i < ord('Z') - $a; $i++) {
                echo chr($i);
            }
            echo "<br>";
        }
    }
    else if($_POST['que'] == -5) {
        for($a = 1, $m = 50; $a < 27; $a++, $m = $m - 2)  {
            $z=0;
            for($i = ord('A'); $i < ord('A') + $a; $i++) {
                echo chr($i);
            }
//            while($z<$empty_space){
//                echo "&nbsp";
//                $z++;
//            }
            for($k = 0; $k < $m; $k++)   {
                echo "&nbsp";
            }
            for($i = ord('A') + $a - 1; $i > ord('A') - 1; $i--) {
                echo chr($i);
            }
            echo "<br>";
        }//상반신
        for($a = 0, $m = 2; $a < 26; $a++, $m= $m + 2)  {
            for($i = ord('A'); $i < ord('Z') - $a; $i++) {
                echo chr($i);
            }
            for($k = 0; $k < $m; $k++)   {
                echo "&nbsp";
            }
            for($i = ord('A') + 24 - $a; $i > ord('A')-1 ; $i--) {
                echo chr($i);
            }
            echo "<br>";
        }
    }
    else if($_POST['que'] == -6) {
        for($a = 1, $m = 50; $a < 27; $a++, $m = $m - 2)  {
            for($i = ord('A'); $i < ord('A') + $a; $i++) {
                if($i == ord('A') || $i == ord('A') + $a - 1 || $a == 26) {
                    echo chr($i);
                }
                else {
                    echo "&nbsp";
                }
            }
            for($k = 0; $k < $m; $k++)   {
                echo "&nbsp";
            }
            for($i = ord('A') + $a - 1; $i > ord('A') - 1; $i--) {
                if($i == ord('A') || $i == ord('A') + $a - 1 || $a == 26) {
                echo chr($i);
                }
                else {
                echo "&nbsp";
                }
            }
            echo "<br>";
        }//상반신
        for($a = 0, $m = 2; $a < 26; $a++, $m= $m + 2)  {
            for($i = ord('A'); $i < ord('Z') - $a; $i++) {
                if($i == ord('A') || $i == ord('Z') - $a - 1) {
                    echo chr($i);
                }
                else {
                    echo "&nbsp";
                }
            }
            for($k = 0; $k < $m; $k++)   {
                echo "&nbsp";
            }
            for($i = ord('A') + 24 - $a; $i > ord('A')-1 ; $i--) {
                if($i == ord('A') || $i == ord('Z') - $a - 1) {
                    echo chr($i);
                }
                else {
                    echo "&nbsp";
                }
            }
            echo "<br>";
        }
    }
    else if($_POST['queF'] != null && $_POST['queS'] != null) {
        if($_POST['queF'] == 1) {
            for($i = 0, $m = ord("a"); $i < $_POST['queS']; $i++, $m++)   {
                for($j = 0; $j < 5; $j++)   {
                    echo chr($m);
                }
                echo "<br>";
            }
        }
        else if($_POST['queF'] == 2)    {
            for($i = 0, $m = ord("A"); $i < $_POST['queS']; $i++, $m++)   {
                for($j = 0; $j < 5; $j++)   {
                    echo chr($m);
                }
                echo "<br>";
            }
        }
    }
?>
<div>
    <span class="countTimeSecond"></span>
    <strong>초 남음.</strong>
</div>
</body>
</html>

