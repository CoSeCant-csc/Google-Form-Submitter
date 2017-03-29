  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <?php $file1 = lcfirst($controller); ?>
  <?php if(file_exists("./../public/js/{$file1}.js")): ?>
    <?php print("<script src='/js/{$file1}.js' ></script>") ?>
  <?php endif ?>
</body>
</html>
