{!! Form::select($select_name,$select_data,
	isset($value) ? $value : null,
	[
		'id'=> isset($select_id) ? $select_id : null, 

		'class'=> $select_class,
		
		'data-route'=>isset($select_data_route) ? $select_data_route : null,

		'data-destination'=>isset($select_data_destination) ? $select_data_destination : null,

		'data-loader'=>isset($select_data_loader) ? $select_data_loader : null

		
	])
!!}
