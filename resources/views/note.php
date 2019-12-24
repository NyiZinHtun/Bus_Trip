vendor/bin/phpunit --filter=CityTest


Testing

assertTrue()
assertFalse()
assertEquals()
assertNull()
assertContains()
assertCount()
assertEmpty()

bus_station,gate


laravel_localization



<!-- @section('scripts')
<script >
var baseURL="{!! URL::to("/") !!}";
$(document).ready(function(){
	$.ajax({
		type:'GET',
		url:baseURL + '/departure_time',
		data:{},
		success:function(data){	
			// console.log(data);
				$.each(data,function(key,value){
					// console.log(key, value);				
					// console.log(value.gate_id);
					if($("#time-"+value.gate_id).length){
						setupTime(value.gate_id,value.departure_time);
					}
					// console.log(value.departure_time);
				})
		},
		error:function(XMLHTTPRequest,textStatus,errorThrow){
			alert("ERROR!!");
			alert(errorThrown);
		}
	});
	function setupTime(yourId,departureTime){
		$('#time-'+yourId).timepicker({
			// 'minTime': '4:00pm',
			// 'maxTime': '10:30pm',
			timeFormat:'h:i a'
		});
	}
});
</script>
@endsection -->


	
	
	

