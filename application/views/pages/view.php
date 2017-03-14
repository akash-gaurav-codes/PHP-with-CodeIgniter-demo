
<div class="container">
	<div class="row" >
		<div style="position: fixed;">
			<a href="date_joined" class="btn btn-success">Sort by date</a>
			<a href="name" class="btn btn-info">Sort by name</a>
		</div>
		
	</div>
	
	<?php foreach ($persons as $person): ?>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-8">
			<p>Name : <?php echo $person['name'] ?> </p>
			<p>Email : <?php echo $person['email'] ?> </p>
			<p>Date created : <?php echo $person['date_joined'] ?> </p>
			</br><hr></br>
		</div>		
	</div>
<?php endforeach ?>
</div>