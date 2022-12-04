<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,regular,500,700&display=swap&subset=cyrillic-ext" rel="stylesheet" />
        <link rel="stylesheet" href="/css/style.css">
        <title>Таблица умножения</title>
    </head>
    <body>
    <div class="container">
        <h1>Таблица умножения</h1>
        <div class="table__container">
            <div class="table color1">
                <?php
                    for($i = 1; $i < 10; $i+=1){
                        echo "<div></div>";
                        echo "1 x $i = ";
                        echo 1 * $i;
                    }
                ?>
            </div>
            <div class="table color2">
                <?php
                for($i = 1; $i < 10; $i+=1){
                    echo "<div></div>";
                    echo "2 x $i = ";
                    echo 2 * $i;
                }
                ?>
            </div>
            <div class="table color3">
                <?php
                for($i = 1; $i < 10; $i+=1){
                    echo "<div></div>";
                    echo "3 x $i = ";
                    echo 3 * $i;
                }
                ?>
            </div>
            <div class="table color4">
                <?php
                for($i = 1; $i < 10; $i+=1){
                    echo "<div></div>";
                    echo "4 x $i = ";
                    echo 4 * $i;
                }
                ?>
            </div>
            <div class="table color5">
                <?php
                for($i = 1; $i < 10; $i+=1){
                    echo "<div></div>";
                    echo "5 x $i = ";
                    echo 5 * $i;
                }
                ?>
            </div>
            <div class="table color6">
                <?php
                for($i = 1; $i < 10; $i+=1){
                    echo "<div></div>";
                    echo "6 x $i = ";
                    echo 6 * $i;
                }
                ?>
            </div>
            <div class="table color7">
                <?php
                for($i = 1; $i < 10; $i+=1){
                    echo "<div></div>";
                    echo "7 x $i = ";
                    echo 7 * $i;
                }
                ?>
            </div>
            <div class="table color8">
                <?php
                for($i = 1; $i < 10; $i+=1){
                    echo "<div></div>";
                    echo "8 x $i = ";
                    echo 8 * $i;
                }
                ?>
            </div>
            <div class="table color9">
                <?php
                for($i = 1; $i < 10; $i+=1){
                    echo "<div></div>";
                    echo "9 x $i = ";
                    echo 9 * $i;
                }
                ?>
            </div>
            <div class="table color10">
                <?php
                for($i = 1; $i < 10; $i+=1){
                    echo "<div></div>";
                    echo "10 x $i = ";
                    echo 10 * $i;
                }
                ?>
            </div>
        </div>
    </div>
    </body>
</html>