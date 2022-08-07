<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>popup</title>
    <link rel="stylesheet" href="css/clientDashboard.css">
    <link rel="stylesheet" href="css/header1.css">
    <script src="https://kit.fontawesome.com/283605f283.js" crossorigin="anonymous"></script>
</head>

<body>
 <?php include'assets/header1.php'; ?>
    <div class="container">
        <div class="typewriter">
            <h1>Welcome</h1>
          </div>
        <div>
            <h2>It is easy to create Survey with <span id="mid">SurveyDuniya.com</span> </h2>
        </div>
        <div>
            <p>Create survey as per your requirement</p>
        </div>
        <button type="submit" class="create_btn" onclick="openPopup()">Create Survey</button>
        <div class="popup" id="popup">
            <h6>CREATE A SURVEY</h6>
            <h2>How would you like to get started?</h2>
            <div class="btns">
                <a href="">
                    <div class="boxes" id="box1"><img class="image" height="100px" width="100px" src="auto.png" alt="">
                        <h4>Option1</h4>
                    </div>
                </a>
                <a href="index.php">
                    <div class="boxes" id="box2"><img class="image" height="100px" width="100px" src="scratch.png"
                            alt="">
                        <h4>Start From Scratch</h4>
                    </div>
                </a>
                <a href="">
                    <div class="boxes" id="box3"><img class="image" height="100px" width="100px" src="template.png"
                            alt="">
                        <h4>Option1</h4>
                    </div>
                </a>

            </div>
            <div>
                <button class="close_btn" onclick="closePopup()">Close</button>
            </div>
        </div>
    </div>
    <script>
        let popup = document.getElementById("popup");

        function openPopup() {
            popup.style.visibility = 'visible';
            popup.style.top = '50%';
            popup.style.transform = 'translate(-50%,-50%) scale(1)';
        }
        function closePopup() {
            popup.style.visibility = 'hidden';
            popup.style.top = '0%';
            popup.style.transform = 'translate(-50%,-50%) scale(0.1)';
        }
    </script>
</body>

</html>