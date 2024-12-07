$(document).ready(()=>{
	$("#send_pro").on('click',()=>{
	var formData = new FormData();
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var ville = $("#ville").val();
	var profile = $("#profile").val();
	var file = $("#cv")[0].files[0]; 
	if (name != '' && email != '' && phone != '' && ville != '' && profile != '' && file && file.type === 'application/pdf')  {
		formData.append('file', file);
		formData.append('name', name);
		formData.append('email', email);
		formData.append('phone', phone);
		formData.append('ville', ville);
		formData.append('profile', profile);
		$.ajax({
			url : 'php/pro.php',
			type: 'POST',
			data : formData,
			contentType: false,
            processData: false,
			success : function(data){
				console.log(data);
			},
			error : function(err){
				console.log(err);
			}
		});
	}else{
		$("#err").show()
		$("#err").html('<div class = "alert alert-danger">Vous devez remplir tous les champs, ou fichier n\'est un pdf!</div>');
		setTimeout(function(){$("#err").hide()},5000);
	}
	});

});