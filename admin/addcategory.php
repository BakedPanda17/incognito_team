<?php
	require_once("../database.php");
	require_once("../classes/_Ideals.php");
	require_once("admin_functions.php");
	include("admin_header.php");

	session_start();
	global $idea;
	// if ( 1 == $_SESSION['login'] ) {
	// 	if ( 1 == $_SESSION['isAdmin'] ) { 
			?>
		<div class="admin-container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<?php
							$current_tab = 'idea';
							include("admin_sidebar.php"); 
						?>
					</div>
					<div class="col-md-10">
					<div class="row">
						<div class="col-md-3">
							<form method="POST" action="modules/admin_add_category.php">
								<div class="form-group">
									<label for="cat-name">Category Name</label>
									<input type="cat-name" name="cat-name" class="form-control" id="cat-name">
								</div>
								<button type="submit" class="btn btn-default">Add</button>
							</form>
						</div>
						<div class="col-md-9">
							<label for="cat-name">Categories</label>
							<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Slug</th>
									<th>Actions</th>
								</tr>
							</thead>
							<?php 
								$category = $idea->get_all_category();
							?>
							<?php if ( $category ) : ?>
							<?php foreach ( $category as $cat ) : ?>
								<tbody>
									<tr> 
										<td><?php echo $cat['name']; ?></td>
										 <td><?php echo $cat['slug']; ?></td>
										  <td>
											<a href="modules/admin_delete_category.php?id=<?php echo $cat['id'] ?>"> Delete </a>
										  </td>
										   </tr>
										 <tr> 
									</tr>
								</tbody>
							<?php endforeach; ?>
						<?php endif; ?>

							</table>
						</div>
					<div>
					</div>
				</div>
			</div>
		</div>
		<?php
	// 	 }
	// } else {
	// 	echo '???';
	// }


	include("admin_footer.php");