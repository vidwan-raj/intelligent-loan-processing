function phonenumber(inputtxt)  
{  
  var phoneno = /^\d{10}$/;  
  if(inputtxt.value.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("phone number should be 10 digits");  
        return false;  
        }  
} 