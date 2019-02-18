$(document).ready(function(){

// menu active
	var url=document.location.href;
$.each($(".nav a"),function(){
if(this.href==url){$(this).addClass('nav_current');};
});
   
//burger
	$('.nav_btn').on('click', function (e) {
		e.preventDefault;
		$('.nav_mini').toggleClass('nav_mini_active');
	});

	$('.popup').magnificPopup();

	$("form").submit(function() {
		// var name = document.getElementById("name").value;
			var str = $(this).serialize();
		    $.ajax({
		      type: "POST",
		      url: "mail.php",
		      data: str,
		      success: function(msg) {
		        if(msg == 'OK') {
		          result = '<div class="ok">Сообщение отправлено</div>';
		          $("#fields").hide();
		        }
		        else {result = msg;}
		        $('#note').html(result);
		      }
		    });
	    return false;
 	});

});	

//calc

$(document).ready(function () {
	var offset = $('#total').offset();
	var topPadding = 120;
	$(window).scroll(function() {
			if ($(window).scrollTop() > offset.top) {
					$('#total').stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});
			}
			else {
					$('#total').stop().animate({marginTop: 0});
			}
	});
});


// $('input[name="calc_option"]').val()
var total =  Number(0);
$('input[name="calc_option"]').each(function(i,elem) {
	v=$(elem).val();
	total = total +  Number(v);
	// alert(v);
});
// alert(total);