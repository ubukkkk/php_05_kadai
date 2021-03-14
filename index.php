<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>じゃんけんゲーム</h1> -->
    <div id="wrapper">
    <header>
        <div class="header-logo">ゆるグラミング講座</div>
    </header>
    <main>
        <h1>練習問題(1) じゃんけん</h1>
        出す手を選んで勝負してください。
        <div class="form-box">
            <form action="ken.php" method="post">
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="グー" checked>グー
                </label>
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="チョキ">チョキ
                </label>
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="パー">パー
                </label>
                <button type="submit" class="battle-button">勝負する！</button>
            </form>
        </div>
    </main>
    <footer>
        <small>&copy;yurugramming!!</small>
    </footer>
</div>
<!-- </?php$han = mt_rand(1,3)?> -->


</body>
</html>