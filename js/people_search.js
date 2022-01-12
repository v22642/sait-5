$(function(){
    var login = "";
    // поиск лудей для админа
    $('#btnSend').click(function(event){
		var gg = $('#gg').val();
		if(gg=="Английский"){
		$.ajax({
			success:function(){
				$.ajax({
                    type:"POST",
                    data: ({email:email}),
					url:"../core/people_search.php",
					success:function(html){
					$('#messages').html(html);
					}
				});
			
			}
			
		});}
    
	});
    // сделать учителя
    $('#btnTeacher').click(function(event){
		var email = $('#txtEmail').val();
		
		$.ajax({

			type:"POST",
			url:"do_teacher.php",
			data: ({email:email}),
			
			success:function(){
				
			
			}
			
		});
	});
});