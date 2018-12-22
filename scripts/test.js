var location = window.location.href;
    var cur_url = location.pathname;
 alert(location + '=' + cur_url);
    $('.nav a').each(function () {
        var link = $(this).find('a').attr('pathname');
 alert('link=' + cur_url);
 		if (cur_url == link)
        {
        	//alert(cur_url + '==' + link);
        	$(this).addClass('nav_current');
        }
    });


    var url = window.location.href;
    url;
    // url.split('/').pop();
    $('.nav a').each(function () {
    	var link = $(this).find('a').attr('href');
    	alert('link=' + link);
    	if (url == link)
        {
        	alert(url + '==' + link);
        	$(this).addClass('nav_current');
        }

    });