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
        <link rel="shortcut icon" type="image/ico" href="../favicon.ico"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events | Techtrix'19</title>
    <meta name="description" content="Events | The Annual Techno-Management Fest of RCCIIT Kolkata " />
    <meta name="keywords" content="techtrix, fest, techtrix19, events, technical" />
    <meta name="author" content="RCCIIT" />
    <meta name="theme-color" content="#000000" />
    <meta property="og:image" content="../static/css/images/img-fb.jpg">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="e2c994dea4e79ea6ff87e1b6-text/javascript"></script>

    <!-- Latest compiled JavaScript -->
    <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="e2c994dea4e79ea6ff87e1b6-text/javascript"></script>
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../cloudfront/css/pspage.css" />
    <link rel="stylesheet" type="text/css" href="../static/css/base.css" /> 
    <link rel="stylesheet" href='../static/css/navbar.css' type="text/css"/>	

    <style>
        .background,
        .background__copy {
            background-image: url(../../cloudfront/assets/images/2.jpg);
        }
        
        .menu__item-map {
            background: url(../../cloudfront/Red-tech-background-vectors.jpg) no-repeat 50% 50%;
        }
        
        .pscontainer {
            background:#000;
            background: url(../../cloudfront/eventp.jpg) #000 no-repeat;
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
                                echo '<a href="javascript:void(0)" class="mainmenu__item" id="event--'.$event['num'].'" style="text-decoration: none;text-transform:capitalize;font-family:BEYNO;line-height:1.3">';
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

                                echo '<a href="javascript:void(0)" onclick="download_file(\''.$eventname['name'].'\')" class="sidemenu__item" id="event-'.$event['num'].'-subevent-'.$eventname['num'].'" style="text-decoration: none;">';
                                echo '<span class="text-decoration: none;" style="font-size: 1.5rem;">';
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
                    <p class="quote" style="color: #FFF;">Redefining The Possibilities</p>
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
                                    
                                    <?php 
                                        if ($eventname['intro']) {

                                    ?>
                                    <div class="h4">Introduction</div>
                                    <hr>
                                    <div class="contentdes"><p>
                                            <?php echo $eventname['intro']; ?>
                                    </div>
                                    <?php 
                                        }
                                    ?>
                                    
                                    <?php 
                                        if ($eventname['rule']) {

                                    ?>
                                    <div class="h4">Rules</div>
                                    <hr>
                                    <div class="contentdes">
                                        <p>
                                            <?php echo $eventname['rule']; ?>

                                        </p>
                                    </div>

                                    <?php 
                                        }
                                    ?>
                                    <?php 
                                        if ($eventname['problem']) {

                                    ?>
                                    <div class="h4">Problem Statement</div>
                                    <hr>
                                    <div class="contentdes">
                                        <p>

                                            <?php echo $eventname['problem']; ?>
                                        </p>
                                    </div>
                                    <?php 
                                        }
                                    ?>

                                    <div class="h4">Contacts</div>
                                    <hr>
                                    <div class="contentdes" style="text-transform: capitalize;">
                                        <p><?php echo $eventname['contact']; ?></p>
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
<script type="text/javascript">
    function download_file(file) {
        console.log(file);
        console.log(screen.width);
        if(screen.width < 500){

            location.assign("download.php?file="+file);
        }
    }

</script>
 
</html>