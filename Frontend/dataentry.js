function handleSubmit() 
 {
     if (check()) 
    {
     document.querySelector("input[type='submit']").disabled=true;
    return true;
    }
    return false;
 }

function check() 
{
    return checkPhno() && checkAge() 
}
function checkAge() 
 {
   var age=document.form1.age.value;
   if (age<=0 || age>99) 
   {
       alert("Invalid Age...!");
       return false;
   }
   return true;
 }
function checkPhno() {
    var Phno=document.form1.Phno.value.length;
    if(Phno==10)
   {
      return true;
   }
      alert("Invalid PhoneNumber..!");
       return false;
}
