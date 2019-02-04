<!DOCTYPE html>
<html lang="en-US" class="no-js">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=11,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="50+ events and competitions with prizes worth 2 million.">
    <meta name="keywords" content="techtrix, techtrix18, techtrix 18, kolkata, big, best, biggest, awesome, large, largest, online, online events, iit fest, robots, science, technology, management, competitions, events, games, informals, ascension, byte-the-bits, extreme engineering, modex, pahal, supernova, prizes, riqueza, creatrix">
    <meta property="og:title" content="TechTrix '19 | 21th - 23th Feb 2019 | RCCIIT, Kolkata">
    <meta property="og:url" content="../index.php">
    <meta property="og:description" content="Annual techno-management festival of RCCIIT, Kolkata">
    <meta name="theme-color" content="#000000">
	
    <script type="f1ce59909fd1970f52cf87c4-text/javascript">
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <title>Gallery | TechTrix'19</title>
        <link rel="shortcut icon" type="image/ico" href="../favicon.ico"/>

    <link rel="stylesheet" id="prowebpro-bootstrap-css" href="../../cloudfront/conclave2019/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="prowebpro-main-css-css" href="../../cloudfront/conclave2019/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="prowebpro-font-awesome-css" href="../../cloudfront/conclave2019/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href='../static/css/navbar.css' type="text/css"/>
  
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/js/unitegallery.min.js'></script> 
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/css/unite-gallery.min.css' type='text/css' /> 
	<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/themes/tiles/ug-theme-tiles.min.js'></script> 
	

<Style>
@font-face {
    font-family: "BEYNO";
    src: url(../static/fonts/BEYNO/BEYNO.otf);
}

</Style>
	
	
</head>

<body class="home page page-id-94 page-template page-template-page-templates page-template-front-page page-template-page-templatesfront-page-php" id="home">

<?php
    include '../static/nav2.php';
?>
<!--javascript-->
<script type="f1ce59909fd1970f52cf87c4-text/javascript">
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


<section id="our_client" class="primary-bg">
	<div class="container">
	<h2 style="color:#0069ff;text-align:center;  border: 1px solid powderblue;padding: 30px;font-family:BEYNO"> Gallery</h2>
			
    	<div id="gallery"  style="display:none;">
		
			<?php
		        require_once 'functions.php';
		        $galImg = getImg('gallery_img');
		        foreach($galImg as $img){
		      ?>
		    	<img alt="Techtrix Gallery Section" src="images/gallery_img/<?= $img ?>">
		    <?php } ?>
		</div>
	</div>
</section>
<script type="text/javascript"> 
			
			jQuery(document).ready(function(){ 
				jQuery("#gallery").unitegallery(); 
			}); 
		
		</script>

                <script type="f1ce59909fd1970f52cf87c4-text/javascript" src="../../cloudfront/conclave2019/js/frontend/woocommerce.min.js"></script>
                <script type="f1ce59909fd1970f52cf87c4-text/javascript" src="../../cloudfront/conclave2019/js/jquery-cookie/jquery.cookie.min.js"></script>
                <script type="f1ce59909fd1970f52cf87c4-text/javascript">
                    /* <![CDATA[ */
                    var wc_cart_fragments_params = {
                        "ajax_url": "\/prowebpro\/wp-admin\/admin-ajax.php",
                        "wc_ajax_url": "\/prowebpro\/?wc-ajax=%%endpoint%%",
                        "fragment_name": "wc_fragments"
                    };
                    /* ]]> */
                </script>
                

                <script src="../../ajax.cloudflare.com/cdn-cgi/scripts/2448a7bd/cloudflare-static/rocket-loader.min.js" data-cf-nonce="f1ce59909fd1970f52cf87c4-" defer=""></script>

		   
              </html>
