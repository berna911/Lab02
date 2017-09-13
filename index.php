<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lab02</title>
</head>
<body>
	<div id="lists">
		<a href="#lists">Завдання зі списками</a>
		<a href="#tables">Завдання з таблицями</a>
		<a href="#schedule">Завдання про розклад</a>
	</div>
	<div id="content"></div>
  <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$("a").click(function(){
				var href = $(this).attr("href");
				switch(href)
				{
					case "#lists":
					{
						$.ajax
						({
							type: "POST",
							url: "lists.html",
							dataType: "html",
							cache: false,
							asynch: true,
							success: function(data){
								$("#content").html(data);
							}
						});
						break;
					}
					case "#tables":
					{
						$.ajax
						({
							type: "POST",
							url: "tables.html",
							dataType: "html",
							cache: false,
							asynch: true,
							success: function(data){
								$("#content").html(data);
							}
						});
						break;
					}
					case "#schedule":
					{
						$.ajax
						({
							type: "POST",
							url: "schedule.html",
							dataType: "html",
							cache: false,
							asynch: true,
							success: function(data){
								$("#content").html(data);
							}
						});	
						break;
					}	
				}
			});
		});
	</script>
</body>
</html>