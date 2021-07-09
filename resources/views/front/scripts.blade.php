<script type="text/javascript" src="{{ asset('/js/jquery-3.5.1.min.js') }}"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script type="text/javascript">
       $(document).ready(function() {
           $('.slide-page').slick({
               infinite: true,
               slidesToShow: 1,
               slidesToScroll: 1,
               autoplay: true,
               dots: true
           });
       });
   </script>