<?php
    // set default value of variables for intial page load
    if(!isset($investment)){
        $investment = '';
    }
    if(!isset($interest_rate)){
        $interest_rate = '';
    }
    if(!isset($years)){
        $years = '';
    }
?>
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Future Value Calculator</title>
        <meta name="description" content="Calculate Future Value of an Item">
        <meta name="keywords" content="calculate, value, item">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./normalize.css">
        <link rel="stylesheet" type="text/css" href="./main.css">
    </head>
    <body>
        <!-- application out inputting calculations -->
    <main>
        <h1>Future Value Calculator</h1>
        <?php if(!empty($error_message)) { ?>
            <p class="error"><?php echo htmlspecialchars($error_message);?></p>
        <?php } ?>
        <form action="display_results.php" method="post">
            <div id="data">
                <label>Investment Amount: </label>
                <input type="text" name="investment" value="<?php echo htmlspecialchars($investment);?>">
                <br>

                <label>Yearly Interest Rate: </label>
                <input type="text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate);?>">
                <br>

                <label>Number of Years: </label>
                <input type="text" name="years" value="<?php echo htmlspecialchars($years);?>">
                <br>                
            </div>
        <!-- button submitting the application -->
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate">
            </div>
        </form>
    </main>
        
    </body>
</html>