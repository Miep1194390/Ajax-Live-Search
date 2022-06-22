<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Live Zoeken</title>
    <link rel="stylesheet" href="../showHint/styles.css">
</head>

<body>
    <div class="form">
        <div class="title">Titel</div>
        <div class="subtitle">Ondertitel</div>
        <div class="input-container ic1">
            <input type="text" class="input" placeholder=" " onkeyup="showHint(this.value)">
            <div class="cut"></div>
            <label for="firstname" class="placeholder">Zoeken...</label>
        </div>
        <p class='p'>Suggesties: <span id="txtHint"></span></p>
    </div>


</body>

<script src="../showHint/js/hint.js"></script>

</html>