<?php
echo "<style>
        table {
            border-collapse: collapse;
            text-align: center;
            font-family: Arial;
        }
        td, th {
            border: 1px solid black;
            padding: 8px;
            width: 40px;
        }
        .header {
            background-color: #ccff00; /* kuning-hijau */
            font-weight: bold;
        }
        .row-header {
            background-color: #00ff66; /* hijau terang */
            font-weight: bold;
        }
        .cell-blue {
            background-color: #00e5ff; /* biru muda */
        }
        .cell-yellow {
            background-color: #ffee00; /* kuning */
        }
     </style>";

echo "<table>";

echo "<tr><th class='header'>bilangan</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th class='header'>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td class='row-header'>$i</td>";

    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;

        // warna kuning untuk angka kelipatan 3
        if ($hasil % 3 == 0) {
            $class = "cell-yellow";
        } else {
            $class = "cell-blue";
        }

        echo "<td class='$class'>$hasil</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
