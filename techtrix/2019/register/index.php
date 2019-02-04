
<?php
// Array ( [ambassador-name] => [ambassador-email] => [ambassador-contact] => [ambassador-college_] => [ambassador-stream] => [ambassador-year] => [ambassador-why] => [ambassador-how] => [ambassador-experience] => [ambassador-suggested] => [Apply] => Submit )
    include '../db.php';
    
    $amb_error = "";
    $acc_error = "";

    function insert($conn, $table,$data){
        $array_size=sizeof($data);
        $sql="INSERT INTO `".$table."` SET ";
        $i=0;
        foreach($data as $key => $value){
            ++$i;
            if($i==$array_size)
                $sql .= "`".$key."`='".$value."' ; ";
            else
                $sql .= "`".$key."`='".$value."' , ";
        }
        $query = $conn->prepare($sql);
        $query->execute();
        return $conn->lastInsertId();
    }
    if (isset($_POST['ambassador-name']) && isset($_POST['ambassador-email']) && isset($_POST['ambassador-contact']) && isset($_POST['ambassador-college']) && isset($_POST['ambassador-stream']) && isset($_POST['ambassador-year'])) {
        if (!empty($_POST['ambassador-name']) && !empty($_POST['ambassador-email']) && !empty($_POST['ambassador-contact']) && !empty($_POST['ambassador-college']) && !empty($_POST['ambassador-stream']) && !empty($_POST['ambassador-year'])) {
            
            $data = array(
                "name" => $_POST["ambassador-name"],
                "email" => $_POST["ambassador-email"],
                "contact" => $_POST["ambassador-contact"],
                "college" => $_POST["ambassador-college"],
                "stream" => $_POST["ambassador-stream"],
                "year" => $_POST["ambassador-year"],
                "why" => $_POST["ambassador-why"],
                "how" => $_POST["ambassador-how"],
                "exp" => $_POST["ambassador-experience"],
                "ref" => $_POST["ambassador-suggested"]
            );
            try {
                insert($conn, "ambassador", $data);
                $amb_error = "Success!!! We will contact you soon.";
            }catch(Exception $e){
                $amb_error = "Already Applyed.";
            }
    
        }else{
            $amb_error = "Importent fields are empty";
        }
    }
    if (isset($_POST['accommodation-email']) && isset($_POST['accommodation-name']) && isset($_POST['accommodation-contact'])) {
        
        if(!empty($_POST['accommodation-email']) && !empty($_POST['accommodation-name']) && !empty($_POST['accommodation-contact']) && !empty($_POST['accommodation-college']) && !empty($_POST['accommodation-year']) && !empty($_POST['accommodation-startdate']) && !empty($_POST['accommodation-enddate'])){
            
            $data = array(
                "email" => $_POST["accommodation-email"],
                "name" => $_POST["accommodation-name"],
                "contact" => $_POST["accommodation-contact"],
                "college" => $_POST["accommodation-college"],
                "year" => $_POST["accommodation-year"],
                "address" => $_POST["accommodation-address"],
                "event" => $_POST["accommodation-event"],
                "start" => $_POST["accommodation-startdate"],
                "end" => $_POST["accommodation-enddate"]
            );
            
            try {
                insert($conn, "accommodation", $data);
                $amb_error = "Success!!! We will contact you soon.";
            }catch(Exception $e){
                $amb_error = "Already Applyed.";
            }
        }else{
            $acc_error = "Importent fields are empty";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Registration and Login | TechTrix '19</title>
  
  <meta name="description" content="Register now to experience the extravaganza!">
    <meta name="keywords" content="techtrix, techtrix19, techtrix 19, techtrix 2019, techtrix rcciit, rcciit  fest, rcciit kolkata fest,  fest, technical fest, rcciit  workshop, rcciit, workshops, rcciit workshops, workshop in rcciit, rcciit  workshop, rcciit events, rcciit startup, rcciit banaras, techtrix , techfest ,  rcciit, rcciit  techfest, techtrix rcciit, rcciit, , rcciit festival, rcciit  technical festival, university, india, techfest, , 2018, 2k18, 18, kolkata, big, best, biggest, awesome, large, largest, february, online,  first, robots, science, technology, management, lectures, guest, startup fair, competitions, events, games, informals, rcciit fests">
    <link rel='stylesheet' href='../../cloudfront/login2_files2/kla.css'>
    <link rel="stylesheet" href="../../cloudfront/login2_files2/css.css">
    <link rel="stylesheet" href="../../cloudfront/login2_files2/bootstrap.min.css">
    <link rel="stylesheet" href="../../cloudfront/login2_files2/font-awesome.min.css">
    <link rel="stylesheet" href="../../cloudfront/login2_files2/form-elements.css">
    <link rel="stylesheet" href="../../cloudfront/login2_files2/assets/css/style.css">
    <link href="../../cloudfront/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../cloudfront/css/jquery-ui.css" type="text/css" media="all" />
    <meta name="theme-color" content="#000000">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
  <!--stylesheets / link tags loaded here-->
  <script async src="https://www.googletagmanager.com/gtag/js?id=" type="7664c995310f77cae884c143-text/javascript"></script>

<script type="7664c995310f77cae884c143-text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-68539305-2', 'auto');
  ga('send', 'pageview');
</script>
    <script type="7664c995310f77cae884c143-text/javascript">
function navFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<!-- Facebook Pixel Code -->
<script type="7664c995310f77cae884c143-text/javascript">
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','../../connect.facebook.net/en_US/fbevents.js');
fbq('init', '719194484921932'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>

  

  

  <style type="text/css">.tabs {
    display: -webkit-flex;
    display: -moz-flex;
    display: flex;
    -webkit-flex-direction: row;
    -moz-flex-direction: row;
    flex-direction: row;
}
.tabs > li {
    float: none;
    -webkit-flex: 1;
    -moz-flex: 1;
    flex: 1;
}
.tabs > li > a {
    white-space: nowrap;
    text-overflow: ellipsis;
    text-align: center;
    overflow: hidden;
}
.fb-btn
{
            transition: box-shadow .3s; margin-bottom: 10px;background-color: #fff;color: #5a5b5e;padding: 0.5rem 1rem; text-align: left;border: 1px solid       #e9eaea; display: block; box-shadow: 0 4px 8px rgba(212,213,214,0.2); cursor: pointer; font-family: "Oxygen","Segoe UI","Helvetica Neue",sans-serif,"Helvetica",arial;
        }
        .fb-btn:hover
        {
            box-shadow: 0 4px 15px rgba(212,213,214,0.6) ;
        }
        .fb-btn-img
        {
            max-width: 100%;
            max-height: 100%;margin-top: 2px;
            float: left;
            width: 1.5rem;
            margin-right: 1rem; 
        }
        .labeltext
        {
            text-align: left;  margin-bottom: 5px;font: inherit; 
        }
        #loading {
            background: url('../static/techtrix-loader-new.gif') no-repeat center center;
            width: 600px;
            height: 281px;
}
#loading_bottom{
    background: no-repeat center center;
    width: 600px;
    height: 31.25px;
}
/*#video, #tablogin {
  margin-right: 10px;
  float: left;
}*/
</style>
<style rel="stylesheet" type="text/css">
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
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/foundation.min.css" />
  <link href="../../maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  
  <script src="../static/httperrorfiles/modernizr.min.js" type="7664c995310f77cae884c143-text/javascript"></script>
  <style>
    a:hover,
    a:focus {
        color: white;
    }
</style>
</head>
<body style="background-color: #171517" >
  
    <div style="margin-bottom: 5rem;">
        <header>
            
<?php
    include '../static/nav2.php';
?>

<!--javascript-->
<script type="7664c995310f77cae884c143-text/javascript">
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
        </header>
    </div>



<div class="row" >
    <div id="video" style=" float:left;
   margin-top: 2rem; ">
        <iframe width="600" height="300" src="https://www.youtube.com/embed/RywrurWlcqs" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        <div id="loading_bottom"><img src="../static/t19bottom.png"></div>
    </div>
    <div style="height: 760px; margin-top: 25px; float: right; width: 350px; ">
    <div class="row" id="tablogin" style="background-color: white ;  margin-top: 0px; float: right; width: 350px; ">

            <!-- foundation tabs -->
            <ul class="tabs" data-tab="" >
                <li class="tab-title"><a href="#panelLogin" target="_self">Accommodation</a></li>
                <li class="tab-title active" id="register-tab"><a href="#panelRegister" target="_self">Ambassador</a></li>
            </ul>
            <div class="large-12 columns">
            <div class="tabs-content">
                <div class="content" id="panelLogin">
                    <div class="row">

                                                                  



                    <form role="form" method="post" class="login-form">
                        <fieldset style="display: block; border: 0px;margin-top: 0px; ">
                        <div class="large-12 columns">
                            <h4>This form needs to be filled by participants who require accommodation during Techtrix 2019</h4>
                            <!-- <div class="fb-btn" onclick="fb_login()" data-btn="true" href=fb_login().html >

                                <img class="fb-btn-img" alt="Facebook" src="../static/facebook.svg" >
                                Sign in with facebook</div> -->
    <br >
                            <label class="labeltext">Email address</label>
                                <input type="email" class="form-control inputbor" name="accommodation-email"  >
                            
                            
                        </div>
                        <div class="form control large-12 columns">
                            <label class="labeltext">Name</label>
                                <input type="text" class="form-control" name="accommodation-name"/>
                            
                        </div>

                        <div class="form control large-12 columns">
                            <label class="labeltext">Contact Number</label>
                                <input type="number" class="form-control" name="accommodation-contact"/>
                            
                        </div>

                        <div class="form control large-12 columns">
                            <label class="labeltext">College</label>
                                <input type="text" class="form-control" name="accommodation-college"/>
                            
                        </div>

                        <div class="form control large-12 columns">
                            <label class="labeltext">Year at College</label>
                                <input type="text" class="form-control" name="accommodation-year"/>
                            
                        </div>

                        <div class="form control large-12 columns">
                            <label class="labeltext">Address</label>
                                <input type="text" class="form-control" name="accommodation-address"/>
                            
                        </div>

                        <div class="form control large-12 columns">
                            <label class="labeltext">Event you are Participating</label>
                                <input type="text" class="form-control" name="accommodation-event"/>
                            
                        </div>

                        <div class="form control large-12 columns">
                            <label class="labeltext">Starting Date of accommodation</label>
                                <input type="date" class="form-control" name="accommodation-startdate"/>
                            
                        </div>

                        <div class="form control large-12 columns">
                            <label class="labeltext">Ending Date of accommodation</label>
                                <input type="date" class="form-control" name="accommodation-enddate"/>
                            
                        </div>



                        <div class="form control large-12 columns">
                            <span style="color: red;"><?php echo $acc_error;?></span>
                        </div>


                        <div class=" form-group large-12 columns" style="margin-top: 10px">
                            <input type="submit" name="Apply" value="Apply for Accommodation" type="button" id="btn-next" class="btn btna btn-next pure-button btn-danger pull-right  " style="width: 100%;">

                        </div>
                    
                </fieldset>
                </form>
                    </div>
                    <!--/row-->
                </div>


                <div class="content active" id="panelRegister">
                    <div class="row">
                        <form role="form" action="#" method="post" class="registration-form" >
                    
                    <fieldset style="height:100%; width:100%; border:0px;">
                        <h4>Campus Ambassador for Techtrix '19</h4>
                        <div  style="background-color: white">
                        <div class="large-12 columns form-group">
                            <label  class="labeltext" for="form-first-name">Name</label >
                            <input  name="ambassador-name" placeholder="" class="form-first-name form-control" type="text">
                            
                        </div>
                        
                        <div class="large-12 columns form-group ">
                            <label class="labeltext"  for="form-email">Email</label>
                            <input name="ambassador-email" placeholder="" class="form-email form-control" type="email">
                        </div>
                        
                        <div class="large-12 columns form-group ">
                            <label class="labeltext"  for="form-email">Contact No</label>
                            <input name="ambassador-contact" placeholder="" class="form-first-name form-control" type="number">
                        </div>
                        
                        <div class="large-12 columns form-group ">
                            <label class="labeltext"  for="form-email">College </label>
                            <input name="ambassador-college" placeholder="" class="form-first-name form-control" type="text">
                        </div>
                        
                        <div class="large-12 columns form-group ">
                            <label class="labeltext"  for="form-email">Stream</label>
                            <input name="ambassador-stream" placeholder="" class="form-first-name form-control" type="text">
                        </div>
                        
                        <div class="large-12 columns form-group ">
                            <label class="labeltext"  for="form-email">Year</label>
                            <input name="ambassador-year" placeholder="" class="form-first-name form-control" type="number">
                        </div>
                        
                        <div class="large-12 columns form-group ">
                            <label class="labeltext"  for="form-email">Why do you want to be a Campus Ambassador</label>
                            <input name="ambassador-why" placeholder="" class="form-first-name form-control" type="text">
                        </div>
                        
                        <div class="large-12 columns form-group ">
                            <label class="labeltext"  for="form-email">How would you promote TechTrix 19?</label>
                            <input name="ambassador-how" placeholder="" class="form-first-name form-control" type="text">
                        </div>
                        
                        <div class="large-12 columns form-group ">
                            <label class="labeltext"  for="form-email">Mention if you have any previous experience as Campus Ambassador</label>
                            <input name="ambassador-experience" placeholder="" class="form-first-name form-control" type="text">
                        </div>
                        
                        <div class="large-12 columns form-group ">
                            <label class="labeltext"  for="form-email">Mention the name of the person who suggested you to be a Campus Ambassador for TechTrix 19</label>
                            <input name="ambassador-suggested" placeholder="" class="form-first-name form-control" type="text">
                        </div>
                        


                        <div class="large-12 columns form control">
                            <span style="color: red;"><?php echo $amb_error; ?></span>
                        </div>
                            <div class="large-12 columns form-group">
                                <input type="submit" name="Apply" type="button" id="btn-next" class="btn btna btn-next pure-button btn-danger pull-right  " style="width: 100%;">
                            </div>
                        </div>
                    </fieldset>
                    </form>
                    </div>
                    <!--/row-->
                </div>
            </div>
            <!-- /foundation tabs -->
        </div>
    </div>
    </div>
</div>

<!-- <div style="float:bottom;float:left;padding-left:5%;" >
<h4><font color="white">For queries on registration, contact : +91-8114 183963</font></h4>
</div> -->
  
  <script type="7664c995310f77cae884c143-text/javascript">
    // sandbox disable popups
    // if (window.self !== window.top && window.name!="view1") {;
    //   window.alert = function(){/*disable alert*/};
    //   window.confirm = function(){/*disable confirm*/};
    //   window.prompt = function(){/*disable prompt*/};
    //   window.open = function(){/*disable open*/};
    // }
    
    /*// prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  
                }
              }
              return false;
          })
        }
      }
    }, false);*/
  </script>
  
  <!--scripts loaded here-->
  
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="7664c995310f77cae884c143-text/javascript"></script>
  <script src="../../cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js" type="7664c995310f77cae884c143-text/javascript"></script>
  <script type="7664c995310f77cae884c143-text/javascript">$(document).foundation(function(){});</script>
  
    <script src='../../cloudfront/jquery.min.js' type="7664c995310f77cae884c143-text/javascript"></script>
    <script src="../../cloudfront/login2_files2/bootstrap.min.js" type="7664c995310f77cae884c143-text/javascript"></script>
    <script src="../../cloudfront/login2_files2/jquery.backstretch.min.js" type="7664c995310f77cae884c143-text/javascript"></script>
    <script src="../../cloudfront/login2_files2/retina-1.1.0.min.js" type="7664c995310f77cae884c143-text/javascript"></script>
    <script src="../../cloudfront/vendors/select2/dist/js/select2.full.min.js" type="7664c995310f77cae884c143-text/javascript"></script>
    <script src="../static/login2_files2/scripts.js" type="7664c995310f77cae884c143-text/javascript"></script>
    <script src="../../cloudfront/js/1.12.0jquery-ui.min.js" type="7664c995310f77cae884c143-text/javascript"></script>
    <script type="7664c995310f77cae884c143-text/javascript">

</script>
<script src="../../ajax.cloudflare.com/cdn-cgi/scripts/2448a7bd/cloudflare-static/rocket-loader.min.js" data-cf-nonce="7664c995310f77cae884c143-" defer=""></script></body>

</html>