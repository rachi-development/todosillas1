<?php include("template/header.php"); ?>

	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
               <img src="images/silla1.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title">Cuida<br>tu espalda</h1>
                        <!-- /Text title -->
                        <div class="button"><a href="productos.php">Ver productos</a></div>
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="images/silla3.png" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">CUIDA<br>TU ESPALDA</h1>
                       	<div class="button"><a href="productos.php">Ver productos</a></div>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
	  <div class="main">
		<div class="content-top">
			<h2>Sillas ergonómicas</h2>
			<p>Una buena silla de oficina ha de ser ergonómica, lo que quiere decir que se adapta completamente a tu cuerpo</p>
			<div class="close_but"><i class="close1"> </i></div>
				<ul id="flexiselDemo3">
				<li><img src="images/silla7.png" /></li>
				<li><img src="images/silla10.png" /></li>
				<li><img src="images/silla5.png" /></li>
				<li><img src="images/silla8.png" /></li>
				<li><img src="images/silla9.png" /></li>
			</ul>
		<h3>Mejores sillas ergonómicas</h3>
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>

		 </div>
	    </div>


<?php include("template/footer.php"); ?>