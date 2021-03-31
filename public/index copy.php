<?php

//require '../app/bootstrap.php';

include '../app/views/default/header.php';


?>
<div class="container" style="margin-top:25%">

		<div class="card">
			<h5 class="card-header card text-white bg-primary mb-3">Feeds</h5>
			<div class="row pl-3 pr-3"> </div>
			<div class="image-container">
							<a href="/detail.php?id=<?php echo $row['id'] ?>"><img class="card-img-top" src="<?php echo $row['image'] ?>" alt=""></a>
						</div>
						<div class="card-body">
							<h4 class="card-title">
								<a href="/detail.php?id=<?php echo $row['id'] ?>">
									<?php echo $row['title']; ?>
								</a>
							</h4>

							<h5> placeholder
								<?php //echo $row['datetime']; ?>
							</h5>
							<h5>
								placeholder
								<?php //echo $row['']; ?>
							</h5>
							<p class="card-text">
								<?php //echo $row['detail'] ?>
							</p>
						</div>
						<div class="card-footer">
							<!--This is the see product button-->
							<a href="/detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary float-right">Rea</a>
						</div>
		</div>
	</div>





</div>
<!--Close Row-->
<!-- include the Footer File -->

<?php
include('../app/views/default/footer.php'); ?>
