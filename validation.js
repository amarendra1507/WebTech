function validate()
{	
	var regex_name=/[A-Za-z]{3,20}/;
	var regex_city=/[A-Za-z]{5,20}/;
	var regex_mob=/[0-9]{10,10}/;
	var regex_pwd=/[A-Za-z0-9]{6,20}/;
	
	var name_test=document.getElementById("fname").value;
	var city_test=document.getElementById("city").value;
	var mob_test=document.getElementById("mob").value;
	var pwd_test=document.getElementById("pwd").value;
	var cpwd_test=document.getElementById("cpwd").value;
	var gender_test=document.getElementById("gndr").value;



	
	if (!regex_name.test(name_test) || name_test==""){		
		alert("Name shouldn't be blank or numeric!!!\nMinimum 3 characters and maximum 20 characters.\nRetry again")
		return false;
	}

	if ((!regex_mob.test(mob_test)) || (mob_test.length != 10)){		
		alert("Mobile shouldn't be blank or characters!!!\nMinimum length is 10 digit.\nRetry again")
		return false;
	}

	if(pwd_test=="" || !regex_pwd.test(pwd_test)){
		 
		alert("Password can't be blank !!!")
		return false;
	}
	else if(pwd_test!=cpwd_test){
		alert("Password mismatch !!!")
		return false;
	}


	if (!regex_city.test(city_test) || city_test==""){		
		alert("City shouldn't be blank or numeric!!!\nMinimum 5 characters and maximum 20 characters.\nRetry again")
		return false;
	}


	if(document.register.gender[0].checked==false && document.register.gender[1].checked==false){
		alert("Please select gender !!!");
		return false;
	}

	

	



	alert("You have successfully registered Mr."+name_test);
	return false;

}
