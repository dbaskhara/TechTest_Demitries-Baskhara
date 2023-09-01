<!DOCTYPE html>
<html>
<head>
    <title>1_array_loop</title>
</head>
<body>
    <h1>1_array_loop</h1>
    <ul>
        <?php
        $aplikasi[1] = "gtAkademik";
        $aplikasi[2] = "gtFinansi";
        $aplikasi[3] = "gtPerizinan";
        $aplikasi[4] = "eCampuz";
        $aplikasi[5] = "e0viz";

        foreach ($aplikasi as $index => $app) {
            echo "<li>Application $index: $app</li>";
        }
        ?>
    </ul>
</body>
</html>
