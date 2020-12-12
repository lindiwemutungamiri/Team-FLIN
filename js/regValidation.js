

//retrieving  values from the form
const myform = document.getElementById('FormID'); //declaring a constant called myform

//retrieving values from the form 
function submitData() {
    var username = myform.elements['username'].value;
    var email = myform.elements['email'].value;
    var user_password = myform.elements['user_password'].value;
    var password_2 =myform.elements['password_2'].value;
    
  

    //storing into local storage 


    localStorage.setItem("input1", username);
    localStorage.setItem("input2", email);
 
    localStorage.setItem("input3", user_password);
    localStorage.setItem("input4", password_2);

    

   
}



//retrieving from local storage and sending to .phps's ids shown by tekvalues 
    document.getElementById("tek1").innerHTML=localStorage.getItem("input1");
    document.getElementById("tek2").innerHTML=localStorage.getItem("input2");
 
    document.getElementById("tek3").innerHTML=localStorage.getItem("input3");
    document.getElementById("tek4").innerHTML=localStorage.getItem("input4");





    
function ValidateRegForm() {
    

    username= document.RegForm.username;  //getting the first name and declaring it into variable firstnem
    var txtregx = /^[a-zA-Z]+$/i;  //declaring a text regular expression

    email = document.RegForm.email;
    var emailregx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ //email regular expression
    
    user_password= document.RegForm.user_password;
    //password must have atleast one digit, one lowercase, one uppercase, one special character and atleast 8 words in lenght
    var passwordregx = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

    password_2= document.RegForm.password_2;
    //password must have atleast one digit, one lowercase, one uppercase, one special character and atleast 8 words in lenght
    var passwordregx = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;



    if(username.value == ""){ //checking if the first name field is blank
        alert("username should not be blank"); //returns an alert showing that the first name is blank
        username.focus(); //returns the cursor into the box on the same page
        return  false;
    }
    if(!txtregx.test(username.value)){ //validating that the value in the first name field is a text
        alert("Please enter the correct format for username ");
        username.focus();
        return false;
    }
   
      
    if(email.value == ""){
        alert("Email should not be blank");
        email.focus();
        return  false;
    }
    if(!emailregx.test(email.value)){
        alert("Please Enter the correct format for email");
        email.focus();
        return  false;
    }
    if(user_password.value == ""){
        alert("Please Enter your password. Password cannot be blank");
        user_password.focus();
        return  false;
    }
   
    if(!passwordregx.test(password_2.value)){
        alert(" //password must have atleast one digit, one lowercase, one uppercase, one special character and atleast 8 words in length");
        password_2.focus();
        return false;
    }
    if(password_2.value == ""){
        alert("Please Enter your password. Password cannot be blank");
        password_2.focus();
        return  false;
    }
   
    if(user_password.value != password_2.value){
        alert(" //passwords must match!");
        password_2.focus();
        return false;
    }




}
