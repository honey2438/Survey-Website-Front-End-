<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Interface</title>
    <script src="https://kit.fontawesome.com/283605f283.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>

<body>
    <!-- navbar -->
    <?php include '../assets/header.php'; ?>
    <!-- navbar -->
    <!-- main -->
    <main>
        <div id="box1">

            <h1 id="primary">Create your own survey now <br>
                <button class="btn" onclick="sub()"><span>Get Started</span></button>
            </h1>


        </div>
        <div id="box2">

        </div>
    </main>
    <div class="flowchart">
        <h1 class="secondary">How it works?</h1>
        <div class="inner-flowchart">
            <div id="flow1" class="flowchart-box">
                <div class="flow dec"> </div>
                <div class="flow inc">
                    <div class="top "></div>
                    <div class="mid">
                        <div class="flow-innermost1 remove ignore"></div>
                        <div class="flow-btn flow-inner-most2" id="flow-btn1">
                            <h1 class="secondary">01.</h1>
                        </div>
                        <div class="flow-innermost1"></div>
                    </div>
                    <div class="bottom addb addr"></div>
                </div>
                <div class="flow left dec">
                    <p class="tertiary">step1</p>
                </div>
            </div>
            <div id="flow2" class="flowchart-box">
                <div class="flow right dec">
                    <p class="tertiary">step2</p>
                </div>
                <div class="flow inc">
                    <div class="top add addr"></div>
                    <div class="mid">
                        <div class="flow-innermost1"></div>
                        <div class="flow-btn flow-inner-most2" id="flow-btn2">
                            <h1 class="secondary">02.</h1>
                        </div>
                        <div class="flow-innermost1 remove"></div>
                    </div>
                    <div class="bottom addr"></div>
                </div>
                <div class="flow dec"> </div>
            </div>
            <div id="flow3" class="flowchart-box">
                <div class="flow dec"> </div>
                <div class="flow inc">
                    <div class="top addr"></div>
                    <div class="mid">
                        <div class="flow-innermost1 remove"></div>
                        <div class="flow-btn flow-inner-most2" id="flow-btn3">
                            <h1 class="secondary">03.</h1>
                        </div>
                        <div class="flow-innermost1"></div>
                    </div>
                    <div class="bottom addb addr"></div>
                </div>
                <div class="flow left dec">
                    <p class="tertiary">step3</p>
                </div>
            </div>
            <div id="flow4" class="flowchart-box">
                <div class="flow right dec">
                    <p class="tertiary"> step4</p>
                </div>
                <div class="flow inc">
                    <div class="top add addr"></div>
                    <div class="mid">
                        <div class="flow-innermost1"></div>
                        <div class="flow-btn flow-inner-most2" id="flow-btn4">
                            <h1 class="secondary">04.</h1>
                        </div>
                        <div class="flow-innermost1 remove ignore"></div>
                    </div>
                    <div class="bottom"></div>
                </div>
                <div class="flow dec"> </div>
            </div>
        </div>
    </div>
    <div class="clients">
        <h1 class="secondary">Our Clients</h1>
        <div class="inner-clients">
            <marquee behavior="scroll" scrollamount="10"  direction="left">
                <img class="images" src="../img/ibm-logo.png" alt="" height="200px" width="200px">
                <img class="images" src="../img/intel-logo.png" alt="" height="200px" width="200px">
                <img class="images" src="../img/att-logo.png" alt="" height="200px" width="200px">
                <img class="images" src="../img/samsung-logo.png" alt="" height="200px" width="200px">
                <img class="images" src="../img/loreal-logo.png" alt="" height="200px" width="200px">
                <img class="images" src="../img/toyota-logo.png" alt="" height="200px" width="200px">
                <img class="images" src="../img/visa-logo.png" alt="" height="200px" width="200px">
                <img class="images" src="../img/walmart-logo.png" alt="" height="200px" width="200px">
            </marquee>
        </div>

    </div>
    <!-- main -->

    <!-- footer -->
    <?php include '../assets/footer.php'; ?>

</body>

<script src="../js/index.js"></script>

</html>