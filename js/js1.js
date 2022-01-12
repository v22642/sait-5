$(function(){
	var login = "";
	$('#btnSend').click(function(event){
		var name = $('#txtName').val();
		
		$.ajax({

			type:"POST",
			url:"gip.php",
			data: ({name:name}),
			
			success:function(){
				$.ajax({

					url:"mui.php",
					success:function(html){
					$('#messages').html(html);
					}
				});
			
			}
			
		});
		// $('input[type="text"]').val('');
	});
	$('#btnSend').click(function(){
		
	 });

	
	  	$( document ).ready(function(){
			(function worker() {
				$.ajax({
					url:"mui.php",
					success:function(html){
					$('#messages').html(html);
				  },
				  complete: function() {
					
					setTimeout(worker, 5000);
				  }
				});
			  })();
		
	  	});
});