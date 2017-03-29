<!DOCTYPE html>
<html>
<head>
  <?php if (isset($title)): ?>
    <title> <?= htmlspecialchars($title) ?> </title>
  <?php else: ?>
    <title> <?= htmlspecialchars($controller) ?> </title>
  <?php endif ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

  <?php $file1 = lcfirst($controller); ?>
  <?php if(file_exists("./../public/css/{$file1}.css")): ?>
    <?php print("<link rel='stylesheet'  href='/css/{$file1}.css' />") ?>
  <?php endif ?>

</head>

<body>
