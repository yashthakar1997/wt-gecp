function stringlength(inputtxt,inputtxt1, minlength, maxlength)
{ 
var letters = /^[A-Za-z]+$/;      
var uname = inputtxt.value;
var field = inputtxt1.value; 
var mnlen = minlength;
var mxlen = maxlength;

if(field.length<mnlen || field.length> mxlen || uname.length == 0)
{ 
alert("enter valid input with " + "password with " +mnlen+ " and " +mxlen+ " characters");
return false;
}
else
{ 
if(inputtxt.value.match(letters))
      {
      alert('Your name have accepted');
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
 }
}
