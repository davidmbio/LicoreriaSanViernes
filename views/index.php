<?php $titulo = 'Licoreria San Viernes' ?>
	
	<?php ob_start() ?>
	
	<link rel='stylesheet' href='../css/slider_multiple.css' />  
    <script type='text/javascript' src='../js/jquery-1.7.2.js'></script>
    <script type='text/javascript' src='../js/wpts_slider_multiple.js'></script>
	<script>
      jQuery(document).ready(function(e) {
         jQuery('#my_carousel_ct').tsSlider({
           thumbs:''
          , width:'600'
          , showText: true 
          , autoplay:5000
          , imgWidth: 100
          , imgHeight: 100
          , imgMarginTop: 0
          , imgMarginLeft: 0
          , squared: true 
          , textSquarePosition: 4 
          , textPosition: 'top'
          , imgAlignment: 'Center'
          , textColor: 'F00'
          , skin: 'transparent'
          , arrows:'ts-arrow-1'
          , sliderHeight: 400 
          , effects:''
					, titleBold: 'false'
					, titleItalic: 'false'
					, textBold: 'true' 
					, textItalic: 'false' 
					, textWidth: 90
          , background_sld:'#FFF'
          , background_caption:'#000'
         });		
      });
    </script>
    
	 <div id='my_carousel_ct' class='carousel-container' style="background-color: rgba(0,0,0,0.2);">  
      <div id="my_carousel_1" class="carousel slide">      
        <!-- Carousel items -->
        <div id="my_carousel_2" class="carousel-inner rs-slider">
         
          <div class="item active">
            <div class="ts_border">
              <img class="image photo" src="../img/news/1.jpg" />
              <div class="carousel-caption">
                <h3 style="color: white;">Noticia 1</h3>
                  <p class="ts_txt">
                    <p>Hola esto es solo una prueba</p>
                  </p>
              </div>
            </div>
          </div>
		
		  <div class="item activate">
            <div class="ts_border">
              <img class="image photo" src="../img/news/2.jpg" />
              <div class="carousel-caption">
                <h3 style="color: white;">Noticia 2</h3>
                  <p class="ts_txt">
                    <p>Hola esto es solo una prueba</p>
                  </p>
              </div>
            </div>
          </div>
          
                                         
        </div>            
        <a class="carousel-custom" href="#my_carousel_1" data-slide="prev">&lsaquo;</a>
        <a class="carousel-custom" href="#my_carousel_1" data-slide="next">&rsaquo;</a>
      </div>	
    </div>	

   <?php $contenido = ob_get_clean() ?>	
<?php include 'layout.php' ?>