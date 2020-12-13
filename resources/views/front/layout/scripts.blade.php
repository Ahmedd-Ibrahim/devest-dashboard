
<div class="on-load text-center">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<a id="scrollTop"><i class="fas fa-chevron-up fa-2x"></i></a>





<script src="{{asset('assests/custom/js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assests/front/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assests/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assests/front/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assests/front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assests/front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assests/front/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('assests/front/js/scrollax.min.js')}}"></script>
<script src="{{asset('assests/front/js/all.min.js')}}"></script>
<script src="{{asset('assests/front/js/main.js')}}"></script>


<script>
    $('.our-work-information .see-more').on('click',function(e){  // select btn and make event
    e.preventDefault();
    $(this).parent().parent().find('.text-box').slideToggle(800).toggleClass('done');  // Toggle Silde & add class
    if($(this).parent().parent().find('.text-box').hasClass('done')){    // toggle text
        $(this).text("@lang('work.see less')");
    }else {
        $(this).text("@lang('work.see more')");
    }
});
</script>
</body>
</html>
