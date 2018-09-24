/*
$(function(){
	//For User Registration Ajax

	$("#regsubmit").click(function(){
		var name = $("#name").val();
		var username = $("#username").val();
		var password = $("#password").val();
		var email = $("#email").val();

		var dataString = 'name='+name+'&username='+username+'&password='+password+'&email='+email;
		$.ajax({
			type: "POST",
			url: "getregister.php",
			data: dataString,
			success:function(data){
				$("#state").html(data);
			}
		});
		return false;
	});

	$("#loginsubmit").click(function(){
		var email = $("#email").val();
		var password = $("#password").val();

		var dataString = 'email='+email+'&password='+password;
		$.ajax({
			type: "POST",
			url: "getlogin.php",
			data: dataString,
			success:function(data){
				if($.trim(data)=="empty"){
					$(".empty").show(data);
					$(".disable").hide(data);
					$(".error").hide(data);
				}else if($.trim(data)=="disable"){
					$(".empty").hide(data);
					$(".disable").show(data);
					$(".error").hide(data);
				}else if($.trim(data)=="error"){
					$(".empty").hide(data);
					$(".disable").hide(data);
					$(".error").show(data);
				}else{
					window.location = "exam.php";
				}
			}
		});
		return false;
	});
});
