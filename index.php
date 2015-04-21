<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <meta content="telephone=no" name="format-detection" />
        <link rel="shortcut icon" href="/images/ico.ico">
        <link href="/images/ico2.png" rel="apple-touch-icon-precomposed" />
        <title>任性的网名</title>
    </head>
    <div style="display:none;"><img src="/images/show.png"></div>
<body>
   <?php
        $hand = fopen('new2.txt', 'r');
        $cont = fread($hand,10240);
        //$first = array();
        $frist = explode(' ',$cont);
        
        //这里开始的名字
        $name = fopen('new1.txt', 'r');
        $show = fread($name,10240);
        $names= explode(',',$show);
        
        $num1 = count($frist)-1;
        $num2 = count($names)-1;
        
        echo "<div style='font-size:18px; color:red; text-align:center;'>选个任性的网名</div>";
        echo "<br>";
                for($i=0; $i< 10; $i++) {
                $n = rand(0, $num1);
                $m = rand(0, $num2);
                echo "<div style='width:100%; text-align:left; padding-left:15px; font-size:16px; color:green;'>".$frist[$n].'的'.$names[$m]."</div>"."<br />";
                }
        
        echo "<p style='text-align:center;'><a style='text-decoration:none; font-size:48px; color:red; font-weight:bold;' href='/'>再选一波</a></p>";
      ?>
</body>
</html>
