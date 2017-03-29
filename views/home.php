<div class="container">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/papuvlVeZg8" frameborder="0" allowfullscreen></iframe>
</div>
<br>
<div class="container">
  <form action="/submit" method="post">
    <div class="form-group" id='id0'>
      <label for="url">Url - Copy everything after /forms and everything before /viewform</label>
      <h4><?php print(htmlspecialchars("https://docs.google.com/forms/<URL-ID>/viewform")) ?></h4>
      <input type="text" class="form-control" id="url" name='url' placeholder="URL-ID">
    </div>

      <div id='input'>
        <div class='form-group' id='id1'>
          <label for='entry1'>Input 1</label>
          <input type='text' class='form-control' id='entry1' name='entry1' placeholder='entry.xxx'>
          <input type='text' class='form-control' id='text1' name='text1' placeholder='Value'>
        </div>
      </div>

      <div class="form-group" id='buttons1'>
        <button onclick='add_f(2);' type='button' class='btn btn-success'>Add Input Field</button>
        <button onclick='remove_f(1);' type='button' class='btn btn-warning'>Remove Input Field</button><br><br>
      </div>

      <label for='entry1'>Number of submissions (consider at a rate of 10 sub/sec to prevent Google from blocking you)</label>
      <input type='text' class='form-control' id='sub' name='sub' placeholder='No. of Submissions'>
      <div class="form-group" id='buttons2'>
        <input type='hidden' name='sub' value=1>
      </div>
      <button type='submit' class='btn btn-info'>Submit</button>

    </form>
  </div>
