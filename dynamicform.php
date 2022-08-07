<!DOCTYPE html>
<html>

<head>
  <title>Dynamic Fields - Day #29</title>
  <link rel="stylesheet" type="text/css" href="css/dynamicform.css">
  <!-- include font awesome -->
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/283605f283.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include'assets/header1.php'; ?>
  <div class="wrapper">
    <!-- dropdown survey options -->
    <div class="dropdown">
      <button class="dropbtn">Add Question <i class="fa fa-caret-down" aria-hidden="true"></i></button>
      <div class="dropdown-content">
        <a href="#" id="add_question">Question</a>
        <a href="#" id="add_radio">Multiple Choice</a>
        <a href="#" id="add_checkbox">Checkbox</a>
        <a href="#" id="add_dropdown">Dropdown</a>
        <a href="#" id="add_date_time">Date</a>
      </div>
    </div>


    <!-- different inputs -->
    <form action="" method="post" id="client_form">
      <div id="all_option_top">
       
      </div>
    </form>


  </div>
</body>
<script src="js/dynamicForm.js"></script>
</html>