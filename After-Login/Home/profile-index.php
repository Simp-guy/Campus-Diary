<?php include('../../partials/session/session.php'); include('../nav.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }

        html,
        body {
            height: 100%;
            width: 100vw;
            background-color: white;
            scroll-behavior: smooth;
        }

        .code-content {
            height: 100%;
            width: 100%;
            background-color: #f9f9f9;
        }

        .temp {
            padding-top: 60px;
        }

        .home-nav {
            flex: 0 0 auto;
            width: 100%;
            height: 30px;
            margin: 1.5rem 0px;
            list-style: none;
            font-size: 15px;
        }

        nav {
            display: flex;
            gap: 15px;
            padding-left: 30px;
        }

        .home-nav nav a,
        .home-nav nav .dashboard {
            text-decoration: none;
        }

        .home-nav nav .home,
        .home-nav nav .dashboard {
            color: #958d8d;
        }

        .home-nav nav .activeDashboard {
            color: #FD981D;
        }

        .code-content .topic {
            height: 100%;
            width: 100%;
            display: flex;
            position: relative;
        }

        .code-content .topic .left {
            padding: 20px 0px 0px 10px;
            width: 22%;
            height: 100vh;
            /*background-color: aliceblue;*/
            overflow-y: auto;
            position: sticky;

        }

        .code-content .topic .left::-webkit-scrollbar {
            display: none;
        }

        .code-content .topic .left ol {
            counter-reset: serial-number;
            display: flex;
            flex-direction: column;
            gap: 20px;
            border-radius: 15px;
        }

        .code-content .topic .left ol li {
            display: flex;
            list-style: none;
            font-size: 15px;
            border: 2px solid #747171;
            border-radius: 10px;
            height: 7.5vh;
            align-items: center;
            padding: 10px 5px;
            margin-right: 10px;
            justify-content: space-evenly;
        }

        .code-content .topic .left ol li:hover {
            /*background-color: #f98b7a;*/
            color: #FD981D;
            cursor: pointer;
        }

        .active {
            background-color: #f98b7a;
            color: white;
        }

        .code-content .topic .right {
            width: 78%;
            height: 100vh;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .code-content .topic .right .tutorial {
            display: none;
            overflow-y: auto;
            height: 100vh;
        }

        .code-content .topic .right .tutorial::-webkit-scrollbar {
            display: none;
        }


        .activeTopic {
            background-color: rgb(68, 67, 67);
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="code-content temp">
        <div class="home-nav">
            <nav aria-lable="breadcrumb">
                <a href="#">
                    <li class="home">Home</li>
                </a>
                <span>/</span>
                <a href="dashboard-index.php">
                    <li class="dashboard">My Dashboard</li>
                </a>
                <span>/</span>
                <a href="#">
                    <li class="activeDashboard">User Profile</li>
                </a>
            </nav>
        </div>
        <div class="code-content">
            <div id="html-content" class="topic">
                <div class="left" id="left">
                    <ol type="1" id="tutorial-list">
                        <li id="tut1">Personal Information</li>
                        <li id="tut2">Gender</li>
                    </ol>
                </div>
                <div class="right" id="right">
                </div>
            </div>
        </div>
    </div>
</body>

</html>