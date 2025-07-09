<?php
include_once 'bd/conn.php'; // path may differ
include_once 'helpers.php'; // if separate; else define the function here

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $site ?></title>
  <link rel="shortcut icon" href="<?php echo $logo;?>" type="image/x-icon">
  <!-- filepath: your main HTML file (e.g., index.php) -->
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
      <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
