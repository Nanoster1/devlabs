<?php
class Test
{
    public function test()
    {
        echo 'test string';
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Hello</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <p>
        <?=(new Test())->test() ?>
    </p>
</body>

</html>