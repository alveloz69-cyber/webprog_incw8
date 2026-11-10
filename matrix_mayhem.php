<?php
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
$original = $matrix;

// TODO 2: Save the three original coordinate values for the readout.
echo "Element at [0][0]: " . $matrix[0][0] . "<br>";
echo "Element at [1][1]: " . $matrix[1][1] . "<br>";
echo "Element at [2][2]: " . $matrix[2][2] . "<br>";

// TODO 3: Modify [1][2] and [2][1], then save $modified.
$matrix[1][2]= 6;
$matrix[2][1]= 10;
$modified = $matrix; // Move this snapshot below your two assignments.


// TODO 4: Append 11 to row 2, then append [10, 11, 12, 13].
$matrix[2][] = 11;
$matrix[]= array(10,11,12,13);

// TODO 5: Calculate row count, each row length, and total numeric cells.
$cellcount = 0;
echo "Number of rows: " . count($matrix) . "<br>";
foreach ($matrix as $index => $row) {
    echo "Elements in row $index: " . count($row) . "<br>";
    $cellcount += count($row);
}
echo "Total numeric cells: $cellcount " . "<br>";


function renderMatrix(array $rows, string $caption): void
{
    echo "<table><caption>" . htmlspecialchars($caption, ENT_QUOTES, 'UTF-8') . "</caption><tbody>";
    // TODO 6: Nested foreach loops; one tr per row, one td per integer.
    // Remove the placeholder row after implementing your loops.
    echo "<table><tbody>";
    foreach ($matrix as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
    echo "</tr>";
    }
    echo "</tbody></table>";
}

$max = $matrix[0][0];
foreach ($matrix as $row) {
    foreach ($row as $cell) {
        if ($cell > $max) {
            $max = $cell;
        }
    }
}
echo "Maximum value: $max";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Mayhem | PHP Dashboard</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; background: #eef3fa; color: #17243a; font: 16px/1.6 system-ui, sans-serif; }
        header, main { max-width: 1240px; margin: auto; padding: 28px; }
        header h1 { margin-bottom: 8px; }
        main { display: grid; grid-template-columns: minmax(0, 2fr) minmax(280px, 1fr); gap: 24px; align-items: start; }
        section, aside { background: #fff; border: 1px solid #cbd8ec; border-radius: 14px; padding: 24px; }
        .matrix-wrap { overflow-x: auto; }
        table { border-collapse: collapse; margin-bottom: 28px; }
        caption { text-align: left; font-weight: 700; padding: 10px 0; }
        td { padding: 14px 20px; border: 1px solid #b5c7e2; text-align: center; }
        .stat { background: #e8eff9; border-left: 4px solid #2459d4; padding: 14px; margin: 12px 0; }
        code { font-family: Consolas, monospace; }
    </style>
</head>
<body>
    <header>
        <h1>Matrix Mayhem: control room</h1>
        <p>Student name: TODO | Individual assignment - no teams | Desktop web</p>
        <p>Due: <time datetime="2026-10-21T16:15:00-04:00">October 21, 2026 at 4:15 p.m. EDT</time></p>
    </header>
    <main>
        <section>
            <h2>Matrix evolution</h2>
            <div class="matrix-wrap">
                <?php
                renderMatrix($original, 'Original / 3 x 3');
                renderMatrix($modified, 'Modified / two values changed');
                renderMatrix($matrix, 'Expanded / final state');
                ?>
            </div>
        </section>
        <aside>
            <h2>Array telemetry</h2>
            <div class="stat">TODO 2: Coordinate readout: 1, 5, 9.</div>
            <div class="stat">TODO 5: Rows, each row length, total numeric cells.</div>
            <p>TODO: Explain why the final rows have different lengths.</p>
        </aside>
    </main>
</body>
</html>