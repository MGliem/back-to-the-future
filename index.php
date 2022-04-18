<?php
    $presentTime = new DateTime();
    $destinationTime = (new DateTime())->setDate(2058, 8, 23)->setTime(18, 45);
    $timeBetween = $presentTime->diff($destinationTime);
    $minutesBetween = $timeBetween->days * 24 * 60 + $timeBetween->h * 60 + $timeBetween->i;
    $fuelNeeded = round($minutesBetween / 10000, 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Back to the futur</title>
</head>
<body>
    <main>
        <div class='fond'>
            <div class="space-evenly">
                <div class="wrapper">
                    <div class="date-title">MONTH</div>
                    <div class="date-detail red"><?= $destinationTime->format('M') ?></div>
                </div>
                <div class="wrapper">
                    <div class="date-title">DAY</div>
                    <div class="date-detail red"><?= $destinationTime->format('d') ?></div>
                </div>
                <div class="wrapper">
                    <div class="date-title">YEAR</div>
                    <div class="date-detail red"><?= $destinationTime->format('Y') ?></div>
                </div>
                <div class="wrapper">
                    <div class="date-title">HOUR</div>
                    <div class="date-detail red"><?= $destinationTime->format('G') ?></div>
                </div>
                <div class="wrapper">
                    <div class="date-title">MIN</div>
                    <div class="date-detail red"><?= $destinationTime->format('i') ?></div>
                </div>
            </div>
            <p>DESTINATION TIME</p>
        </div>
        <div class='fond'>
            <div class="space-evenly">
                <div class="wrapper">
                    <div class="date-title">MONTH</div>
                    <div class="date-detail green"><?= $presentTime->format('M') ?></div>
                </div>
                <div class="wrapper">
                    <div class="date-title">DAY</div>
                    <div class="date-detail green"><?= $presentTime->format('d') ?></div>
                </div>
                <div class="wrapper">
                    <div class="date-title">YEAR</div>
                    <div class="date-detail green"><?= $presentTime->format('Y') ?></div>
                </div>
                <div class="wrapper">
                    <div class="date-title">HOUR</div>
                    <div class="date-detail green"><?= $presentTime->format('G') ?></div>
                </div>
                <div class="wrapper">
                    <div class="date-title">MIN</div>
                    <div class="date-detail green"><?= $presentTime->format('i') ?></div>
                </div>
            </div>
            <p>PRESENT TIME</p>
        </div>
        <div class="fond info">
            <p>Difference: <?= $timeBetween->format('%y years, %m months, %d days, %h hours and %i minutes') ?></p>
            <p>Fuel needed: <?= $fuelNeeded ?> Liters for <?= $minutesBetween ?> minutes</p>
        </div>
    </main>
</body>
</html>