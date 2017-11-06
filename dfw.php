<?php $value = get_field( "degree" ); ?>
		<div id="degree-finder">
			<h4 class="mh-widget-title"><span class="mh-widget-title-inner">Find Your Degree</span></h4>
			<!-- POST will take the user directly to a form while GET will show the user search results -->
			<form role="form" action=" " method="post" target="_blank" class="qdf">
				<!-- The Degree Level Selector -->
				<div class="form-group degree">
			        <div class="input-group">
			            <span class="input-group-addon"><i>1</i></span>
			            <select class="selectpicker form-control" name="degree_level_id">
			                <option>Select a Degree Level</option>
			            </select>
			    	</div>
			    </div>
			    <!-- The Category Selector -->
				<div class="form-group category">
			    	<div class="input-group">
			            <span class="input-group-addon"><i>2</i></span>
			            <select class="selectpicker form-control" name="category_id">
			                <option>Select a Category</option>
			            </select>
			        </div>
			    </div>
			    <!-- The Subject Selector -->
			    <div class="form-group subject">
			        <div class="input-group">
			            <span class="input-group-addon"><i>3</i></span>
			            <select class="selectpicker form-control" name="subject_id">
			                <option>Select a Subject</option>
			            </select>
			      	</div>
			    </div>
			    <!-- This field is required to track your leads. Typically, it is the last 2 segments of your domain name. -->
			    <input type="hidden" name="publisher_id" value=" " />
			    <input class="btn btn-primary btn-lg" type="submit" value="Search Now" />
			</form>
		<span class="sponsor">Sponsored Schools</span></div>
		<!-- Initialize the DegreeFinder -->
		<script>
			jQuery(function($) {
			    new QuickDegreeFinder()
			    	// fills in the options for the select boxes
			    	.populate('.degree select', '.category select', '.subject select')
			    	// sets the defaults
	    			.setDefaults("<?php $value = get_field( "degree" );
if( $value ) {
    echo $value;
} else {
    echo 'Bachelor';
}
?>", "<?php $value = get_field( "category" );
if( $value ) {
echo $value;
} else {
echo 'Business';
}
?>", "<?php $value = get_field( "subject" );
if( $value ) {
echo $value;
} else {
echo 'Business Administration';
}
?>");
			});
		</script>
