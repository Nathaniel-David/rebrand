$(document).ready(function(){

    var thisURL = window.location.pathname;
	var viewpath = window.location.pathname;
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	if (viewpath == '/blog') {
		$('#blog').addClass('active');
	}

	if (viewpath == '/apps') {
		$('#apps').addClass('active');
	}

    $(".sectionBtn").click(function(){

    	var section = this.id;
    	var url = "/#" + section;

    	window.location.href = url;

    });

    $(".blogBtn").click(function(){

    	window.location.href = "/blog";
    });

    $(".appsBtn").click(function(){

    	window.location.href = "/apps";
    });

    $("#copyGoss").click(function(){

        var $temp = $("<input>");
        $("form").append($temp);
        $temp.val($("#hotGoss").val()).select();
        document.execCommand("copy");
        $temp.remove();

    });

    $("#generate").click(function(){

        var quantity = $("input:text").val();
        var type = $( "#textType option:selected" ).text();

        $.ajax({
            /* the route pointing to the post function */
            url: '/generateIpsum',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {_token: CSRF_TOKEN, amt: quantity, syntax: type}, 
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) { 
                window.history.replaceState({}, document.title, thisURL);
                $('#hotGoss').val(data.data);
            }
        });
    });


});    