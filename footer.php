<!--////////////////////////////////////Footer-->
<footer>
    <div class="top-footer">
        <div id="map" style="height: 270px;"></div>
    </div>
    <div class="zerogrid">
        <div class="wrap-footer">
            <div class="row">
                <div class="col-1-3 col-footer-1">
                    <div class="wrap-col">
                        <h3 class="widget-title">About Us</h3>
                        <p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum gravida, metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
                    </div>
                </div>
                <div class="col-1-3 col-footer-2">
                    <div class="wrap-col">
                        <h3 class="widget-title">Recent Post</h3>
                        <ul>
                            <li><a href="#">MOST VISITED COUNTRIES</a></li>
                            <li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
                            <li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
                            <li><a href="#">STARTUP COMPANY???S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-3 col-footer-3">
                    <div class="wrap-col">
                        <h3 class="widget-title">Subcribe</h3>
                        <p>Never missed any post published in our site. Subscribe to our daly newsletter now.</p>
                        <p>Email address:</p>
                        <form action="#" method="post">
                            <input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
                            <input type="submit" value="SUBSCRIBE" class="button button-subcribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="zerogrid">
            <div class="wrapper">
                Copyright @ zDominos - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
                <ul class="quick-link">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Js Menu -->
<script type="text/javascript">
  $(function() {
    if ($.browser.msie && $.browser.version.substr(0,1)<7)
    {
      $('li').has('ul').mouseover(function(){
        $(this).children('ul').css('visibility','visible');
      }).mouseout(function(){
        $(this).children('ul').css('visibility','hidden');
      })
    }

    /* Mobile */
    $("#menu-trigger").on("click", function(){
      $("#menu").slideToggle();
    });

    // iPad
    var isiPad = navigator.userAgent.match(/iPad/i) != null;
    if (isiPad) $('#menu ul').addClass('no-transition');
  });
</script>

<!-- Google Map -->
<script>
  var marker;
  var image = '<?php echo IMG_DIR ?>/map-marker.png';
  function initMap() {
    var myLatLng = {lat: 39.79, lng: -86.14};

    // Specify features and elements to define styles.
    var styleArray = [
      {
        featureType: "all",
        stylers: [
          { saturation: -80 }
        ]
      },{
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
          { hue: "#000000" },
          { saturation: 50 }
        ]
      },{
        featureType: "poi.business",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
      }
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      // Apply the map style array to the map.
      styles: styleArray,
      zoom: 7
    });

    var directionsDisplay = new google.maps.DirectionsRenderer({
      map: map
    });

    // Create a marker and set its position.
    marker = new google.maps.Marker({
      map: map,
      icon: image,
      draggable: true,
      animation: google.maps.Animation.DROP,
      position: myLatLng
    });
    marker.addListener('click', toggleBounce);
  }

  function toggleBounce() {
    if (marker.getAnimation() !== null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>

<!-- carousel -->
<script>
  $(document).ready(function() {
    $("#owl-testimonials").owlCarousel({
      autoPlay: 3000,
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,2],
      navigation: false,
    });
  });
</script>

</div>
</body>
</html>