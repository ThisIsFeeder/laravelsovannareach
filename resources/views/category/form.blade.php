<div class="card-body">
	<div class="form-group">
		<label for="name">{{__('Name')}}</label>
		<input type="text" class="form-control" name="name" id="name" value="" placeholder="Name">
	</div>
	<div class="form-group">
		<label for="description">{{__('Description')}}</label>
		<input type="text" class="form-control" id="editdescription" name="description" value="" placeholder="Description">
	</div>
	<div class="form-group">
		<div class="form-group">
			<label for="parent">{{__('Parent')}}</label>
			<select class="select2" multiple="multiple" data-placeholder="Select a Parent" style="width: 100%;">
			  <option>Alabama</option>
			</select>
		  </div>
	</div>
</div>