$(document).ready(function(){

	//book movie
	$(document).on("click",'#movieCode',function(){
		var movie = $(this).val();
		
		$.post("./process.php","option=bookMovie&movie="+movie,function(data){
			alert(data);
			window.close();
		});
		
	});

	//click seat choose
	$('input[type="checkbox"]').click(function(){

		var seat = $(this).val();
		var listseat = $('#choosenSeats').val();

		if($(this).is(":checked")) 
		{

			if(listseat!="")
			{
				$('#choosenSeats').val(listseat+","+seat);
			}
			else
			{
				$('#choosenSeats').val(seat);
			}
			
		}
		else
		{
			if(listseat.length!=2)
			{
				listseat = listseat.replace(","+seat, "");
			}
			else
			{
				listseat = listseat.replace(seat, "");
			}
			$('#choosenSeats').val(listseat);
			
		}
	});


	//confirm seat
	$('#confirmBut').click(function(){
		event.preventDefault();
		var seats = $('#choosenSeats').val();
		$.post("./process.php","option=outSeat&seats="+seats,function(data){
			alert(data);
			$('#chooseSeatForm')[0].reset();
			window.close();
		});
		
	});


});