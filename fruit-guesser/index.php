<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fruit Guesser</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <?php
        $fruits = array('apple', 'mango', 'banana', 'avocado');
        $active_fruit = $fruits[rand(0, count($fruits) - 1)];
        $message = '';
        $guessed_fruit = '';
        $correct_image = 'box.png';
    ?>
    <?php
        if(isset($_POST['guessed_fruit'])) {
            $guessed_fruit = $_POST['guessed_fruit'];
            if($guessed_fruit === $active_fruit) {
                $message = "Hell yeah";
                $correct_image = $active_fruit . '.jpg';
            }else {
                $correct_image = 'box.png';
                $message = "Guess again loser";
            }
        }
    ?>

    <!-- view -->
    <form action="index.php" method="post">
        <h1>What fruit is in the box?</h1>
        <ul>
            <li class="<?= $fruits[0] ?>">
                <?= $fruits[0] ?>
            </li>
            <li class="<?= $fruits[1] ?>">
                <?= $fruits[1] ?>
            </li>
            <li class="<?= $fruits[2] ?>">
                <?= $fruits[2] ?>
            </li>
            <li class="<?= $fruits[3] ?>">
                <?= $fruits[3] ?>
            </li>
        </ul>
        <input type="text" name="guessed_fruit" value="<?= $guessed_fruit ?>">
        <input type="submit" value="Submit">
    </form>
    <br>
    <h2 class="message">
        <?= $message ?>
    </h2>
    <img src="assets/<?= $correct_image ?>" alt="Mystery box" />
        
    </body>
</html>