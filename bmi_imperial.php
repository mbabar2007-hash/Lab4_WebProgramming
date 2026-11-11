<!DOCTYPE html>
<html>
<head>
    <title>BMI calculator (lb/in)</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <form method="post" action="">
        <h1>BMI Calculator</h1>
        <fieldset>
            <legend align="left">
                Check your BMI Now!
            </legend>
            Weight in lb: <input type="text" name="weight"><br>
            Height in in: <input type="text" name="height"><br>
            <input type="submit" value="Calculate"><br>

            <?php
            if (!empty($_POST)) {
                $weight = $_POST['weight'];
                $height = $_POST['height'];

                $bmi = 703 * $weight / (pow($height, 2));

                echo <<<END
The answer is: <input type="text" value="$bmi">
END;
            ?>

            <script type="text/javascript">
                var bmi = "<?php echo ($bmi); ?>";

                if (bmi < 18.5) {
                    document.write("You are underweight");
                } else if (bmi >= 18.5 && bmi < 25) {
                    document.write("Your weight is normal");
                } else if (bmi >= 25 && bmi < 30) {
                    document.write("You are over weight");
                } else {
                    document.write("Obesity");
                }
            </script>
            <?php } ?>
        </fieldset>
    </form>
</body>
</html>