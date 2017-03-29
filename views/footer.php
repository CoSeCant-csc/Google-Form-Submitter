<div class="container">
  <br><br><br>
  <h4>This Website is being hosted on <a href="https://www.000webhost.com/955080.html"  target="_blank">000webhost</a> for Free!</h4>
  <a href="https://www.000webhost.com/" onClick="this.href='https://www.000webhost.com/955080.html'"  target="_blank">
    <img src="/img/banner_big.gif" alt="Web hosting" width="600" height="400" border="0" />
  </a>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php $file1 = lcfirst($controller); ?>
<?php if(file_exists("./../public/js/{$file1}.js")): ?>
  <?php print("<script src='/js/{$file1}.js' ></script>") ?>
<?php endif ?>
</body>
</html>
