$(document).ready(
		function() {
			changeImage();
			loadData();

			//
			// Load the data via AJAX using JSON.
			// Put text and author into placeholder innerHTML.
			//
			function loadData() {
				$.getJSON('../php/data.php', function(json) {
					// console.log( "JSON Data: " + json );
					$("#quote").text(json.quote);
					$("#author").text(json.aname);
					$("#date").text(json.abirthdate);
					$("messageBlock").attr("data", json.id);
					$("#hitCounter").text(json.hit);
					$("#likeCounter").text(json.like);
				});
			}
			// Alter Background Image
			function changeImage() {
				$.getJSON('../php/images.php', function(json) {
					console.log("Amount" + json.length);
					var randomImage = Math
							.floor((Math.random() * (json.length - 1)) + 1);
					console.log("JSON Data: " + json[randomImage].imageUrl);
					$("#backgroundId").css(
							"background-image",
							"url('../../images/" + json[randomImage].imageUrl
									+ "')");
				});
			}
			// Like citation counter
			function likeCounter(){
				$.post("like.php", { id: $("messageBlock").attr("data")} );
			}
					 
			// Load data on document ready
			// loadData();
			// Reload data after an intervall
			// changeImage();
			// change image random
			var refreshId = setInterval(function() {
				loadData();
				changeImage();
			}, 8000);
			//Pop Up Login
			$("#modal_trigger").leanModal({
				top : 200,
				overlay : 0.6,
				closeButton : ".modal_close"
			});

		});
