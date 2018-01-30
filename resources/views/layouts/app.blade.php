<!DOCTYPE html>
<html lang="en">

	@include('layouts.header')

	<body>
	@yield('content')

	<script src="{{ asset('/bracket_plus/lib/jquery/jquery.js') }}"></script>
	<script src="{{ asset('/bracket_plus/lib/popper.js/popper.js') }}"></script>
	<script src="{{ asset('/bracket_plus/lib/bootstrap/bootstrap.js') }}"></script>
	<script src="{{ asset('/bracket_plus/lib/select2/js/select2.min.js') }}"></script>
	<script>
        $(function () {
            'use strict';

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });

            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');

            $(document).on('mouseover', function(e){
                e.stopPropagation();
                if($('body').hasClass('collapsed-menu')) {
                    var targ = $(e.target).closest('.br-sideleft').length;
                    if(targ) {
                        $('body').addClass('expand-menu');

                        // show current shown sub menu that was hidden from collapsed
                        $('.show-sub + .br-menu-sub').slideDown();

                        var menuText = $('.menu-item-label,.menu-item-arrow');
                        menuText.removeClass('d-lg-none');
                        menuText.removeClass('op-lg-0-force');

                    } else {
                        $('body').removeClass('expand-menu');

                        // hide current shown menu
                        $('.show-sub + .br-menu-sub').slideUp();

                        var menuText = $('.menu-item-label,.menu-item-arrow');
                        menuText.addClass('op-lg-0-force');
                        menuText.addClass('d-lg-none');
                    }
                }
            });

            // Showing sub left menu
            $('#showSubLeft').on('click', function(){
                if($('body').hasClass('show-subleft')) {
                    $('body').removeClass('show-subleft');
                } else {
                    $('body').addClass('show-subleft');
                }
            });

        });
	</script>
	@yield('js')
	</body>
</html>