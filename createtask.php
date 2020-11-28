<?php include('server.php'); ?>
<html>

<head>
  <title>Create Entry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="css/table-responsive.css" media="screen" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>

<body class="blue-clr" data-new-gr-c-s-check-loaded="8.867.0">
  <div class="navbar" style="border-left-style: solid;border-left-width: -0px;left: 0px;">
    <p> Create New Entry </p>
  </div>
  <div style="margin-top: 150px;">
    <div class="login">
      <form action="createtask.php" method="POST">
        <?php include('errors.php'); ?>
        <div style="margin:0;padding:0">
          <div>
            <label for="coursename">Course Name</label>
            <input id="key1" name="coursename" size="30" type="text" />

            <label for="category">Category</label>
            <div class="select-style">
              <select name="category" type="text" style="max-width:100%;">
                <option value="Quiz">Quiz</option>
                <option value="Assignment">Assignment</option>
                <option value="Project">Project</option>
                <option value="Test">Test</option>
                <option value="Viva">Viva</option>
              </select>
            </div>
            <p>
              <label for="topics">Topics</label>
              <input id="key2" name="topics" size="30" type="text" />

              <label for="deadline">Deadline</label>
              <input id="datepicker" name="deadline" size="30" type="text" /></br>

              <label for="percent">Articles/Links</label>
              <input id="key3" name="percent" size="30" type="text" />
          </div>
        <p class="submit"><input type="submit" name="create" value="Create"></p>
    </div>
    </div>
    </form>
  </div>
  </div>
</body>

</html>