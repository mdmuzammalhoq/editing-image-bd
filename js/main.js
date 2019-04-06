$(document).ready(function () {
		$('.slider').pogoSlider({
			autoplay: true,
			autoplayTimeout: 2000,
			displayProgess: false,
			preserveTargetSize: true,
			targetWidth: 0,
			targetHeight: 0,
			responsive: true
		}).data('plugin_pogoSlider');
	});
function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
 
/* $(document).ready(function(){
    $(".header-area").sticky({topSpacing:0});
  });*/
  