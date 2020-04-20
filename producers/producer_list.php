<?php
	include_once("../session.php");
	include("producers.php");
	$producers = get_all_producers();
    disconnect_db();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<?php
		include_once("../layout/meta_link.php");

		// Custom styles for this page
		include_once("../layout/cssdatatables.php");
	?>
	<title>Producer Management</title>
</head>
<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<?php
			include_once("../layout/sidebar.php");
		?>
		<!-- End of Sidebar -->
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
      		<div id="content">
      			<!-- Topbar -->
      			<?php
      				include_once("../layout/topbar.php");
      			?>
      			<!-- End of Topbar -->
      			<!-- Begin Page Content -->
      			<div class="container-fluid">
      				<p class="mb-4"><a href="producer_add.php" class="btn btn-success">Add producer</a></p>
      				<!-- DataTales Users -->
      				<div class="card shadow mb-4">
      					<div class="card-header py-3">
      						<h6 class="m-0 font-weight-bold text-primary">Producers List</h6>
      					</div>
      					<div class="card-body">
      						<div class="table-responsive">
      							<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
      								<thead>
				                    	<tr>
					                      	<!-- <th>ID</th> -->
					                      	<th>Name</th>
					                      	<th>Actions</th>
				                    	</tr>
				                	</thead>
					                <tfoot>
					                    <tr>
					                      	<!-- <th>ID</th> -->
					                      	<th>Name</th>
					                      	<th>Actions</th>
				                    	</tr>
					                </tfoot>
					                <tbody>
					                	<?php
					                		foreach ($producers as $producer)
					                		{
					                	?>
					                	<tr>
					                		<!-- <td><?php echo $producer['pr_id']; ?></td> -->
					                		<td><?php echo $producer['pr_name']; ?></td>
					                		<td>
					                			<form method="post" action="producer_delete.php">
						                			<a href="producer_edit.php?id=<?php echo $producer['pr_id'] ?>" class="btn btn-info btn-circle">
		                    							<i class="fas fa-info-circle"></i>
		                  							</a>
		                  							<input type="hidden" name="id" value="<?php echo $producer['pr_id']; ?>">
	                  								<button type="submit" name="deleteproducer" class="btn btn-danger btn-circle" onclick="return confirm('Are you sure you want to delete producer <?php echo $producer['pr_name']; ?> ?');">
	                  									<i class="fas fa-trash"></i>
	                  								</button>
		                  						</form>
					                		</td>
					                	</tr>
					                	<?php
					                		}
					                	?>
					                </tbody>
      							</table>
      						</div>
      					</div>
      				</div>
      			</div>
      			<!-- End of Page Content -->
      		</div>
      		<!-- End of Main Content -->
      		<!-- Footer -->
      		<?php
      			include_once("../layout/footer.php");
      		?>
      		<!-- End of Footer -->
		</div>
		<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

	<?php
		// Scroll to Top Button
		include_once("../layout/topbutton.php");
		include_once("../layout/script.php");

		// Logout Modal
		include_once("../layout/logout.php");

		// Page level
		include_once("../layout/scriptdatatables.php");
	?>
</body>
</html>