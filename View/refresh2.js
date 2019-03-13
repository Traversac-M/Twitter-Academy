(function($, undefined) {

	$(document).ready(function() {
		var previousLength = $('.teweet').length;
		setInterval(function() {
			$.ajax({
				url: "/tweet_academie/MVC2/Controller/ShowTweet.php",
				method: "GET",
				success: function(data) {
					var newPage = jQuery('<div></div>');
					newPage.html(data);
					var newLength = newPage.children('.teweet').length;
					if(newLength > previousLength) {
						$(newPage.children()[0]).insertAfter('#form');
						$('#tweetBody').val('')
					}

					previousLength = newLength;
				}, 
				error: function(error) {
					console.log(error);
				}
			});
		}, 1000);

		$('#sendTweet').on('click', function() {
			var body = $('#tweetBody').val();
			$.ajax({
				url: "/tweet_academie/MVC2/Controller/ShowTweet.php",
				method: "POST",
				data: {
					tweet1: body
				},
				success: function(data) {
					console.log(data);
				}, 
				error: function(error) {
					console.log(error);
				}
			});
		});
	});
})(jQuery);