<?php include('server.php'); ?>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="table-responsive.css" media="screen" type="text/css" rel="stylesheet" />
</head>

<body data-new-gr-c-s-check-loaded="8.867.0">
	<?php echo $_SESSION['success'] ?>
	<?php if (isset($_SESSION['success'])): ?>
		<div class="navbar" style="border-left-style: solid;border-left-width: -0px;left: 0px;">
		<a href="createtask.php"><span class="blue"></span>Create New Entry<span class="blue"></span></a>
		<div class="topnav-right">
			<a href="home.php?logout='1'">Logout</a></div>
	</div>
	<div style="margin-top: 80px;">
		<h1><span class="blue"></span>Welcome <?php echo $_SESSION['username']; ?><span class="blue"></span></h1>
		<table class="container">
			<thead>
				<tr>
				<th style="padding-right: 100px;">
						<h1>Course</h1>
					</th>
					<th style="padding-right: 100px;">
						<h1>Category</h1>
					</th>
					<th style="padding-right: 100px;">
						<h1>Topics</h1>
					</th>
					<th style="padding-right: 90px;">
						<h1>Deadline</h1>
					</th>
					<th style="padding-right: 90px;">
						<h1>Articles/Links</h1>
					</th>
					<th style="padding-right: 90px;">
						<h1>Delete</h1>
					</th>
					
				</tr>
			</thead>
			<tbody>
				<?php include('tasks.php'); ?>
			</tbody>
		</table>
	</div>
	<?php endif ?>



</body>

</html>