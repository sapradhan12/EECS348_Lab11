<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Practice 4</title>
  <style>
    table {
      border-collapse: collapse;
      margin-top: 1rem;
    }
    th, td {
      border: 1px solid #333;
      padding: 0.5rem 1rem;
      text-align: center;
    }
    th {
      background-color: #f0f0f0;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <h1>Multiplication Table Generator</h1>

  <form method="get" action="practice4.php">
    <label for="number">Enter a positive integer:</label>
    <input type="number" id="number" name="number" min="1" required>
    <button type="submit">Go</button>
  </form>

  <?php
    if (isset($_GET['number'])) {
      $n = intval($_GET['number']);

      if ($n < 1) {
        echo '<p class="error">Please enter a number of at least 1.</p>';
      } else {
        echo '<h2>Multiplication Table from 1 to ' . $n . '</h2>';
        echo '<table>';

        echo '<tr><th></th>';
        for ($col = 1; $col <= $n; $col++) {
          echo '<th>' . $col . '</th>';
        }
        echo '</tr>';
        
        for ($row = 1; $row <= $n; $row++) {
          echo '<tr>';
          echo '<th>' . $row . '</th>';
          for ($col = 1; $col <= $n; $col++) {
            echo '<td>' . ($row * $col) . '</td>';
          }
          echo '</tr>';
        }

        echo '</table>';
      }
    }
  ?>
</body>
</html>