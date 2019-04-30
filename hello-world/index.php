<?php 
    require_once 'partials/header.php';

    // controller
    $fullname = '';
    $email = '';
    if(isset($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
    }
    ?>

    <!-- view -->
    <form action="index.php" method="post">
        Fullname:<br>
        <input type="text" name="fullname" value="<?= $fullname ?>">
        <br>
        Email:<br>
        <input type="email" name="email" value="<?= $email ?>">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <h1>Hi <?= $fullname ?>, your email is <?= $email ?></h1>

<?php
require_once 'partials/footer.php';
// POST example: $age = $_POST['age'];

/** variables */
// $world = 'world';
// echo '<p>Hello ' . $world . '!</p>';
// echo "<p>Hello $world!</p>";

/** arrays */
// $names = array('Jack', 'Jill');
// $ages = array('Jack' => 35, 'Jill' => 20);
// echo $names[0];
// for($i = 0; $i < count($names); $i++) {
//     echo "$names";
// }
// foreach($names as $name) {
//     echo "$name ";
// }
// foreach($ages as $key => $value) {
//     if($key === 'Jill') {
//         echo "$key: $value ";
//     }
// }
// var_dump($names);
// echo $my_header_var;
// <h1><?php echo $names[1]; </h1>
// <p>Jack is: echo $ages['Jack']; </p>
?>