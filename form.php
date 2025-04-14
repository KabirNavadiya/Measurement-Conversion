<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Measurement Converter</title>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="number" name="value" step="any" required placeholder="Enter value">
        <label for="from">From</label>
        <select name="fromunit">
            <?php foreach ($units as $unit): ?>
                <option value="<?= $unit ?>"><?= ucfirst($unit) ?></option>
            <?php endforeach; ?>
        </select>

        <label for="to">To</label>
        <select name="tounit">
            <?php foreach ($units as $unit): ?>
                <option value="<?= $unit ?>"><?= ucfirst($unit) ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Convert</button>
        <div class="result">
            <h2>Result: <?= $data ?></h2>
        </div>
    </form>

</body>

</html>