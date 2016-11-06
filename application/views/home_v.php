<script type='text/javascript'>
function startRefresh() {
    $.get('', function(data) {
        $(document.body).html(data);    
    });
}
$(function() {
    setTimeout(startRefresh,10000);
});
</script>

<div class="row"  style="margin-top:20px">
	<div class="col-sm-1 col-md-offset-1">
		<img src="<?php echo base_url($small); ?>"> 
	</div>
	<div class="col-md-10"><h1><?php echo $desc; ?></h1></div>
</div>
<hr>
<div class="row">

	<div class="col-xs-6 col-sm-3">
		
		<div class="panel panel-default">
			<div class="panel-heading heading-1"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group A</div>
			<div class="panel-body">
				<ol id="group1" class='simple_with_animation vertical'>
				<?php foreach($group_a as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> . <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	
	</div>
	
	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-2"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group B</div>
			<div class="panel-body">
				<ol id="group2" class='simple_with_animation vertical'>
				<?php foreach($group_b as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> . <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>	
			</div>
		</div>
	</div>

	  <!-- Add the extra clearfix for only the required viewport -->
	<div class="clearfix visible-xs-block"></div>

	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-3"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group C</div>
			<div class="panel-body">
				<ol id="group3" class='simple_with_animation vertical'>
				<?php foreach($group_c as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> . <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
	
	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-4"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group D</div>
			<div class="panel-body">
				<ol id="group4" class='simple_with_animation vertical'>
				<?php foreach($group_d as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> . <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>

	<div class="clearfix visible-xs-block"></div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-3">
		
		<div class="panel panel-default">
			<div class="panel-heading heading-5"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group E</div>
			<div class="panel-body">
				<ol id="group1" class='simple_with_animation vertical'>
				<?php foreach($group_e as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> . <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	
	</div>
	
	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-6"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group F</div>
			<div class="panel-body">
				<ol id="group2" class='simple_with_animation vertical'>
				<?php foreach($group_f as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> . <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>	
			</div>
		</div>
	</div>

	  <!-- Add the extra clearfix for only the required viewport -->
	<div class="clearfix visible-xs-block"></div>
		<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-7"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group G</div>
			<div class="panel-body">
				<ol id="group3" class='simple_with_animation vertical'>
				<?php foreach($group_g as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> . <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
	
	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-8"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group H</div>
			<div class="panel-body">
				<ol id="group4" class='simple_with_animation vertical'>
				<?php foreach($group_h as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> . <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>

	<div class="clearfix visible-xs-block"></div>
</div>