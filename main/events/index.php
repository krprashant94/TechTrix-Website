<?php
    include '../db.php';


    function fetch($conn, $table)
    {
        
         $query="SELECT 
                    *
                FROM 
                    `".$table."`
                WHERE 
                    1";
                    //echo $query;

        $result = $conn->prepare($query);
        $result->execute();
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function fetch_by_id($conn, $table, $id)
    {
        
         $query="SELECT 
                    *
                FROM 
                    `".$table."`
                WHERE 
                    event_num = ".$id;

        $result = $conn->prepare($query);
        $result->execute();
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    $events = fetch($conn, 'event');


    // foreach ($events as $key => $event) {
    //     $subevent = fetch_by_id($conn, 'subevent', $event['num']);
    //     foreach ($subevent as $indedx => $eventname) {
    //         print_r($eventname);
    //     }
    // }
    // die();
?>
<!DOCTYPE html> 
<html lang="en" class="no-js">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events | Techtrix'19</title>
    <meta name="description" content="Events | Techtrix'19 Asia's oldest techno-management fest" />
    <meta name="keywords" content="techtrix, fest, techtrix19, events, technical" />
    <meta name="author" content="RCCIIT" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="favicon.html">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="../../cloudfront/favicon/android-chrome-192x192.png">
    <!-- jQuery library -->
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="e2c994dea4e79ea6ff87e1b6-text/javascript"></script>

    <!-- Latest compiled JavaScript -->
    <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="e2c994dea4e79ea6ff87e1b6-text/javascript"></script>
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../cloudfront/css/pspage.css" />
    <link rel="stylesheet" type="text/css" href="../static/css/base.css" /> <style rel="stylesheet" type="text/css">
    .navbar119 {
        font-family: Helvetica, Arial, sans-serif;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        border-bottom: 0px solid rgba(255, 255, 255, 0.2);
        width: 100%;
        height: 50px;
        line-height: 50px;
        font-size: 16px;
        padding: 0;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        background-size: 100% 200%;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.0) 50%, black 50%);
        -webkit-transition: all 0.7s;
        -moz-transition: all 0.7s;
        transition: all 0.7s;
        font-weight: 400;
    }
    /* #navbar119id {
        transition: top 0.5s linear;
    } */
    
    .navbar119:hover {
        background-position: 0 -100%;
    }
    
    .navbar119 a {
        text-decoration: none;
        color: #fff;
    }
    
    .navbar119 a.navbar119-brand {
        float: left;
        height: inherit;
        line-height: inherit;
        padding: 0 30px;
        font-size: 22px;
        text-transform: uppercase;
        font-weight: 400;
        letter-spacing: 2px;
        /* height:80px; */
    }
    
    .navbar119 a.navbar119-brand span {
        font-size: 28px;
        font-weight: 700;
    }
    
    .navbar119 ul {
        float: right;
        list-style: none;
        height: 80px;
        line-height: inherit;
        padding: 0 0px;
        overflow: hidden;
    }
    
    .navbar119 ul li {
        display: inline-block;
    }
    
    .navbar119 ul li a {
        display: block;
        text-align: center;
        /* min-width: 90px; */
        padding: 0 10px;
        font-size: 16px;
}
    /*
    .navbar119 ul li a:hover {
      background-color: rgba(255,255,255,0.15);
    }*/
    
    .navbar119 .navbar119-toggler {
        display: none;
    }
    
    @import url(https://fonts.googleapis.com/css?family=Quando);
    .navbar119 *,
    .navbar119 *:after,
    .navbar119 *:before {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    
    .navbar119 * {
        margin: 0;
        padding: 0;
        border: 0 none;
        position: relative;
        outline: none;
    }
    
    #underline:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        bottom: 0;
        left: 0;
        background: #e90606;
        visibility: hidden;
        border-radius: 5px;
        transform: scaleX(0);
        transition: .25s linear;
    }
    
    #underline:hover:before,
    #underline:focus:before {
        visibility: visible;
        transform: scaleX(1);
    }
    
    @keyframes hover-v {
        0% {
            transform: scaleX(0);
            height: 5px;
        }
        45% {
            transform: scaleX(1.05);
            height: 5px;
        }
        55% {
            height: 5px;
        }
        100% {
            transform: scaleX(1.05);
            height: 3.8rem;
        }
    }
    
    @keyframes no-hover-v {
        0% {
            transform: scaleX(1.05);
            height: 3.8rem;
        }
        45% {
            height: 5px;
        }
        55% {
            transform: scaleX(1.05);
            height: 5px;
            opacity: 1;
        }
        100% {
            transform: scaleX(0);
            height: 5px;
            opacity: .02;
        }
    }
    
    @media (max-width: 1200px) {
        .navbar119 ul {
            padding: 0 10px;
        }
        .navbar119 ul li a {
            min-width: 100px;
            padding: 0 20px;
        }
    }
    
    @media (max-width: 1200px) {
        .navbar119 {
            height: 60px;
        line-height: 60px;
            padding: 0;
        }
        .navbar119 {
    -moz-transition: none;
    -webkit-transition: none;
    -o-transition: color 0 ease-in;
    transition: none;
}
/* .navbar119 a.navbar119-brand {

} */
        .navbar119 ul {
            width: 100%;
            padding: 0;
            background-color: rgba(0, 0, 0, 0.9);
            /*height: auto; */
            height: 100vh;
            max-height: 0;
            overflow-x: hidden;
            overflow-y: scroll;
            transition: all ease-in-out 0.3s;
        }
        .navbar119 ul.open119 {
            max-height: 100vh;
        }
        .navbar119 ul li {
            width: 100%;
            /* border-bottom: 1px solid rgba(255,255,255,0.3); */
        }
        .navbar119 ul li a {
            padding: 0;
        }
        .navbar119 .navbar119-toggler {
            display: block;
            position: absolute;
            height: 40px;
            top: 10px;
            right: 20px;
            background-color: transparent;
            color: #fff;
            border: 3px solid #fff;
            /* border: none; */
            /* border-radius: 4px; */
            outline: none;
            padding: 0 5px;
            cursor: pointer;
        }
        /* .nav-container119{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
      }*/
        .navbar119 .navbar119-toggler span,
        .navbar119 .navbar119-toggler span::before,
        .navbar119 .navbar119-toggler span::after {
            display: block;
            content: '';
            background-color: #fff;
            height: 3px;
            width: 28px;
            border-radius: 4px;
            transition: all ease-in-out 0.3s;
        }
        .navbar119 .navbar119-toggler span::before {
            transform: translateY(-8px);
        }
        .navbar119 .navbar119-toggler span::after {
            transform: translateY(5px);
        }
        .navbar119 .navbar119-toggler.open119-navbar119-toggler span {
            /* transform: rotate(90deg); */
            background-color: transparent;
            /* transform: scale(0.85) rotate(270deg); */
        }
        .navbar119 .navbar119-toggler.open119-navbar119-toggler span::before {
            transform: translateY(0px) rotate(45deg);
            /* transform: translateY(0px) scale(0.75) rotate(45deg); */
        }
        .navbar119 .navbar119-toggler.open119-navbar119-toggler span::after {
            transform: translateY(-3px) rotate(-45deg);
            /* transform: translateY(-3px) scale(0.75) rotate(-45deg); */
        }
    }
    
     ::-webkit-scrollbar {
        display: none;
    }
</style> 

    <style>
        .background,
        .background__copy {
            background-image: url(../../cloudfront/assets/images/1.jpg);
        }
        
        .menu__item-map {
            background: url(../../cloudfront/Red-tech-background-vectors.jpg) no-repeat 50% 50%;
        }
        
        .pscontainer {
            background: url(../../cloudfront/eventps.jpg) no-repeat;
            background-attachment: fixed;
        }
    </style>
    <script type="e2c994dea4e79ea6ff87e1b6-text/javascript">
        document.documentElement.className = "js";
        var supportsCssVars = function() {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130791545-1" type="e2c994dea4e79ea6ff87e1b6-text/javascript"></script>
    <script type="e2c994dea4e79ea6ff87e1b6-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-130791545-1');
    </script>

</head>

<body class="loading">
    <svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-menu" viewBox="0 0 119 25">
				<title>menu</title>
				<path d="M36,8 L36,0 L100,0 L100,8 L36,8 Z M0,8 L0,0 L24,0 L24,8 L0,8 Z M0,28 L0,20 L71,20 L71,28 L0,28 Z"/>
			</symbol>
		</svg>

<?php
    include '../static/nav2.php';
?>

<!--javascript-->
<script type="e2c994dea4e79ea6ff87e1b6-text/javascript">
    const navbar119Toggler = document.querySelector(".navbar119-toggler");
    const navbar119Menu = document.querySelector(".navbar119 ul");
    const navbar119Links = document.querySelectorAll(".navbar119 a");

    navbar119Toggler.addEventListener("click", navbar119TogglerClick);

    function navbar119TogglerClick() {
        navbar119Toggler.classList.toggle("open119-navbar119-toggler");
        navbar119Menu.classList.toggle("open119");
        if(navbar119Menu.classList.contains("open119")) {
            document.getElementsByTagName("BODY")[0].style.overflowY = "hidden";
        }
        else {
            document.getElementsByTagName("BODY")[0].style.overflowY = "scroll";
        }

        // document.getElementsByTagName("BODY")[0].style.overflow = "hidden";
    }

    navbar119Links.forEach(elem => elem.addEventListener("click", navbar119LinkClick));

    function navbar119LinkClick() {
        if (navbar119Menu.classList.contains("open119")) {
            navbar119Toggler.click();
        }
    }

    
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar119id").style.top = "0";
        } else {
            if (!navbar119Menu.classList.contains("open119")) {
                document.getElementById("navbar119id").style.top = "-80px";
            }
        }
        prevScrollpos = currentScrollPos;
    }
    

</script>

    <main id="container" class="use_body">
        <div class="frame">
        </div>
        <div class="content" id="landcontent">
            <div class="background" style="background-color:black;"></div>
            <h2 class="content__title"></h2>
            <p class="content__tagline"> <br><br><br><br><br><br> (Click anywhere to continue)</p>
        </div>
        <nav class="menu" id="eventmenuid">

            <div class="menu__item menu__item--1" data-direction="bt" id="menu__item--1id">
                <div class="menu__item-inner">
                    <div class="mainmenu" id="mainmenu_id">
                        
                        <?php
                            foreach ($events as $key => $event) {
                                echo '<a href="javascript:void(0)" class="mainmenu__item" id="event--'.$event['num'].'" style="text-decoration: none;text-transform:capitalize;">';
                                echo $event['name'];
                                echo "</a>
                                ";
                            }
                        ?>
                        
                    </div>
                </div>
            </div>

            <?php
                foreach ($events as $key => $event) {
                    $subevent = fetch_by_id($conn, 'subevent', $event['num']);

            ?>
                <div class="menu__item menu__item--3" id="sub-item-set--<?php echo $event['num'];?>" data-direction="bt" id="menu__item--3id">
                    <div class="menu__item-inner">
                        <div class="sidemenu" id="sidemenu_id">
                <?php

                            foreach ($subevent as $indedx => $eventname) {

                                echo '<a href="javascript:void(0)" class="sidemenu__item" id="event-'.$event['num'].'-subevent-'.$eventname['num'].'" style="text-decoration: none;">';
                                echo '<span class="sidemenu__item-inner" style="font-size: 1rem;">';
                                echo $eventname['name'];
                                echo '</span> </a> 

                                ';
                            }
                ?>

                        </div>
                    </div>
                </div>

            <?php
                }
            ?>
                        
            





            <div class="menu__item menu__item--2" data-direction="lr" id="menu__item--2id">
                <div class="menu__item-inner">
                    <div class="menu__item-map" id="ps_link" style="display: block;"></div>

            <?php

                foreach ($events as $key => $event) {
                    $subevent = fetch_by_id($conn, 'subevent', $event['num']);
                    foreach ($subevent as $indedx => $eventname) {
                        echo '<a href="javascript:void(0)" class="menu__item-hoverlink" id="problems_event--'.$event['num'].'_event-'.$event['num'].'-subevent-'.$eventname['num'].'" style="text-decoration: none; color: white;">';
                        echo 'More About '.$eventname['name'];
                        echo '</a>
                        ';
                    }
                }
            ?>
                                      
                </div>
            </div>







            <div class="menu__item menu__item--4" data-direction="rl" id="menu__item--4id">
                <div class="menu__item-inner">
                    <div class="regevbutt">
                    <?php
                        foreach ($events as $key => $event) {
                            $subevent = fetch_by_id($conn, 'subevent', $event['num']);
                            foreach ($subevent as $indedx => $eventname) {
                                echo '<a href="#" class="btn btn-sm animated-button victoria-two" id="regevent_event--'.$event['num'].'_event-'.$event['num'].'-subevent-'.$eventname['num'].'">On Spot Register</a>
                                ';
                            }
                        }
                    ?>

                    </div>
                </div>
            </div>


            <div class="menu__item menu__item--5" data-direction="tb" id="menu__item--5id">
                <div class="menu__item-inner">
                    <p class="quote">Redefining The Possibilities</p>
                </div>
            </div>
            <button class="action action--menu"><use xlink:href="#icon-menu"></use></button>
            <button class="action action--close"></button>

        </nav>

        <!--THE PROBLEM STATEMENT TEMPLATE STARTS-->

        <?php
            foreach ($events as $key => $event) {
                $subevent = fetch_by_id($conn, 'subevent', $event['num']);
                foreach ($subevent as $indedx => $eventname) {
                    ?>
         
                        <div class="probspage" id="probspage-event--<?php echo $event['num'];?>-event-<?php echo $event['num'];?>-subevent-<?php echo $eventname['num'];?>">
                            <div class="container">
                                <div class="jumbotron pscontainer">
                                    <a href="javascript:void(0)" class="btn btn-light" id="backbuttps-event--<?php echo $event['num'];?>-event-<?php echo $event['num'];?>-subevent-<?php echo $eventname['num'];?>">
                                        <span class="glyphicon glyphicon-chevron-left" style="margin: 1rem;"></span> Back
                                    </a>
                                    <div class="h2 pseventtitle"><?php echo $eventname['name']; ?></div>
                                    
                                    <div class="h4">Introduction</div>
                                    <hr>
                                    <div class="contentdes"><p>
                                            <?php echo $eventname['intro']; ?>
                                    </div>
                                     
                                    <div class="h4">Rules</div>
                                    <hr>
                                    <div class="contentdes"><p>
                                            <?php echo $eventname['rule']; ?>

                                    </p></div>
                                    
                                    <div class="h4">Problem Statement</div>
                                    <hr>
                                    <div class="contentdes"><p>

                                            <?php echo $eventname['problem']; ?>
                                    </p></div>
                                    
                                    <div class="h4">Contacts</div>
                                    <hr>
                                    <div class="contentdes">
                                        <p>Name (phone)</p>
                                        <p><a href="#" class="__cf_email__" >mail@google.com</a>,</p>
                                        <p>Name (phone)</p>
                                        <p><a href="#" class="__cf_email__" >mail@google.com</a>,</p>
                                            <?php echo $eventname['contact']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            }
        ?>
                        

    
        
        <!--THE PROBLEM STATEMENT TEMPLATE ENDS-->

    </main>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../cloudfront/imagesloaded.pkgd.min.js" type="e2c994dea4e79ea6ff87e1b6-text/javascript"></script>
    <script src="../../cloudfront/TweenMax.min.js" type="e2c994dea4e79ea6ff87e1b6-text/javascript"></script>
    <script src="../static/demo.js" type="e2c994dea4e79ea6ff87e1b6-text/javascript"></script>

<script src="../../ajax.cloudflare.com/cdn-cgi/scripts/2448a7bd/cloudflare-static/rocket-loader.min.js" data-cf-nonce="e2c994dea4e79ea6ff87e1b6-" defer=""></script></body>


</html>