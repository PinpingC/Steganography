<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>隱寫術</title>
    <style>
        img{
            margin-top:10px;
            margin-left:15px;
        }
        form{
            margin-left: 525px;
            /* width: 50%; */
        }
        audio{
            margin-left: 500px;
        }
    </style>
</head>
<body style="background-color: brown;">

    <!-- 表單 -->
    <form method="post" action="StegControl.php">
        <!-- <label for="answer">answer :</label><br> -->
        <input type="text" id="command" name="command" placeholder="try">
        <input type="submit" value="Submit">
    </form>

    <!-- 圖片 -->
    <img src="img/jesus.jpg" alt="jesus" width="600" height="300" onClick="alert('-r -s opera_steg.wav -o data_steg.txt -n 2 -b 10')">
    <img src="img/dinner.jpg" alt="dinner" width="600" height="300" onClick="alert('-h -s opera_steg.wav -o data_steg.txt -n 2 -b 10')">
    <img src="img/ten.jpg" alt="ten" width="600" height="300" onClick="alert('-r -s opera.wav -o data_steg.txt -n 2 -b 10')">
    <img src="img/sheep.png" alt="sheep" width="600" height="300" onClick="alert('-r -s opera_steg.wav -o data_steg.txt -n 2 -b 5')">

    <!-- 音檔 -->
    <audio controls AUTOSTART="TRUE">
        <source src="audio/opera_steg.wav" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>

</body>
</html>
<!-- 三張圖片排版、alert、背景、播放音樂-->