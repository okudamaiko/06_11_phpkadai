<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>textファイル書き込み型todoリスト（入力画面）</title>
</head>

<body>
    <form action="text_c.php" method="POST">
        <fieldset>
            <legend>textファイル書き込み型todoリスト（入力画面）</legend>
            <a href="text_r.php">一覧画面</a>
            <div>
                todo:<input type="text" name="todo">
            </div>
            <div>
                deadline:<input type="date" name="deadline">
            </div>
            <div>
                mail:<input type="text" name="mail">
            </div>

            <div>
                <button>submit</button>
            </div>

        </fieldset>
    </form>
</body>

</html>