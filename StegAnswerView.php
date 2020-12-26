<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>隱寫術</title>
    <style>
        div {
            position: relative;
            left: 500px;
            top: 10px;
            margin: auto;
            font-size: 40px;
        }

        table {
            color: white;
            margin: 50px auto;
            border: 1px white solid;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body style="background-color: black;">
    <script type="text/javascript" name="ans"></script>
    <div style="color: white;"><?php session_start();
                                        if (isset($_SESSION['congra'])) {
                                            echo $_SESSION['congra'];
                                            unset($_SESSION['congra']);
                                        } ?></div>
    <table border='1'>
        <thead style="font-size: 50px;">
            <tr>
                <td>
                    關卡
                </td>
                <td>
                    解答
                </td>
            </tr>
        </thead>
        <tbody style="font-size: 40px;">
            <tr>
                <td>
                    第一關
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>第二關</td>
                <td>
                    按鈕是執行Lsb的python檔
                    結果會出現在箭頭指的位置
                    <img src="img/messageImage.png" alt="msg" width="700"><br>
                    然後根據每個解密出來的句子判斷那個水果是謎底 拖到右邊去
                    <img src="img/messageImage_2.png" alt="msg" width="700">
                </td>
            </tr>
            <tr>
                <td>第三關</td>
                <td>音檔裡撥放著"哈利路亞"，而"哈利路亞意"為「讚美耶和華」或「讚美亞」或「讚美主」之意，而四張圖中的第一張正好符合此意
                    <img src="img/jesus.jpg" alt="jesus" width="600"><br>
                    點擊後，上方會出現一段指令，此指令則為解密檔案的正確指令，將其輸入上方的文字輸入框，送出後則為解密成功 !
                    <img src="img/answer.png" alt="answer" width="600"><br>
                </td>
            </tr>
        </tbody>


    </table>

</body>

</html>
