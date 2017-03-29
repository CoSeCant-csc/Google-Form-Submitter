<div class="page-header">
  <pre><h1>Google Form Submitter <small>Infinite Submissions</small></h1></pre>
  <h3>Only works with Google Forms which have multiple submisions allowed. Doesn't work with forms which require login.</h3>
  <h3>Please watch the following video if you don't know how to use it.</h3>
</div>

<div class="container">
<form>
  <div class="form-group">
    <label for="url">Url - Copy everything after /forms and everything before /viewform</label>
    <h4><?php print(htmlspecialchars("https://docs.google.com/forms/<URL-ID>/viewform")) ?></h4>
    <input type="text" class="form-control" id="url" name='url' placeholder="URL-ID">
  </div>

  <div class="form-group">
    <label for="text1">Input</label>
    <input type="text" class="form-control" id="text1" name="text1" placeholder="Input 1">
  </div>

  <button onclick="add_f();" type="button" class="btn btn-success">Add Input Field</button>
  <button onclick="remove_f();" type="button" class="btn btn-warning">Remove Input Field</button><br><br>

  <button onclick="req(); return false;" type="submit" class="btn btn-default">Submit</button>
</form>
</div>
