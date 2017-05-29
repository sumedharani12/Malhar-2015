
var password;

var pass1="AdminAccess";

password=prompt('Please enter your password to view this page!','');

if (password==pass1)
  alert('Password Correct! Click OK to enter!');
else
   {
   	alert('Password Wrong! Click OK to retry.');
    window.location="http://www.malharfest.org/social/view.php";
    }