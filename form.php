<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Options</title>
</head>
<body>
    <h1>Multiplication table</h1>

    <form action="multiplicationTable.php" method="GET">
        <div class="selection-form">
            <div class="num">
                <p>Number Set</p>
                <input type="radio" name="numSet" value="5">
                <label for="1to5">1-5</label><br>
                <input type="radio" name="numSet" value="10">
                <label for="1to10">1-10</label><br>
                <input type="radio" name="numSet" value="12">
                <label for="1to12">1-12</label><br>
                <input type="radio" name="numSet" value="15">
                <label for="1to15">1-15</label>
            </div>
            

            <div class="diff" >
                <p>Difficulty</p>
                <input type="radio" name="difficulty" value="90">
                <label for="90">Easy</label><br>
                <input type="radio" name="difficulty" value="70">
                <label for="70">Medium</label><br>
                <input type="radio" name="difficulty" value="50">
                <label for="50">Hard</label><br>
            </div>
        </div>

        <button>Generate</button>
    </form>

    
</body>
</html>