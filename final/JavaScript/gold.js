window.onload = function(){
	
	
	var grandtotal = 0;
	var q1 = document.getElementById("quan1");
	var q2 = document.getElementById("quan2");
	let tot1 = document.getElementById("tot1");
	let tot2 = document.getElementById("tot2");
	var mainForm = document.getElementById("mainForm");
	var  fullName= document.getElementById("fullName");
	var  phoneNumber= document.getElementById("phoneNumber");

	
	// Question 2 part 1
	q1.onchange = function(){
		//Calculate here the price of gold grams
		grandtotal = q1.value * 216.5;
		tot1.innerHTML = grandtotal;
	}
	
	q2.onchange = function(){
		//Calculate here the price of silver grams
		grandtotal = q2.value * 2.72;
		tot2.innerHTML = grandtotal;
	}
	
	// Question 2 part 2
	mainForm.onsubmit = function(e){
		// Check here the form validity 

		if ((fullName.value == '' || fullName.value == null)&&(phoneNumber.value == '' || phoneNumber.value == null))
		{
			alert("Please make sure you filled Your Full Name and Your Phone number!")
			e.preventDefault();
		}
		  else if (fullName.value == '' || fullName.value == null)
		  {
			alert("Please make sure you filled Your Full Name!")
			e.preventDefault();
		  }
		  else if (phoneNumber.value == '' || phoneNumber.value == null)
		  {
			alert("Please make sure you filled Your Phone number!")
			e.preventDefault();
		  }

    }
	
}