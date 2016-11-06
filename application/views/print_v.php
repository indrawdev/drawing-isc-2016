<html>
<head>
	<title>Print Out</title>
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css';?>">
	<link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.ico'; ?>" type="image/x-icon">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h4 style="text-align: center;"><?php echo $desc; ?></h4>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP A</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group_a as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				
				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP B</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group_b as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP C</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group_c as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP D</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group_d as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP E</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group_e as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP F</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group_f as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP G</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group_g as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP H</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group_h as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>Copyright &copy; PT. Gelora Trisula Semesta - <?php echo date('Y'); ?></p>
		</div>
	</div>

</div>
</body>
</html>