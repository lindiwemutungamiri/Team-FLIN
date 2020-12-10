

//retrieving  values from the form
const thisform = document.getElementById('formid'); //declaring a constant called theform


function submitData() {
    var username = thisform.elements['username'].value;



    var email = thisform.elements['email'].value;
    var password_1 = thisform.elements['password_1'].value;
    var password_2 =thisform.elements['password_2'].value;
    
  

    //storing into local storage 
    localStorage.setItem("input1", username);
    localStorage.setItem("input2", email);
 
    localStorage.setItem("input4", password_1);
    localStorage.setItem("input5", password_2);

    

   
}


//retrieving from local storage and sending to .phps's ids shown by tekvalues 
    document.getElementById("tek1").innerHTML=localStorage.getItem("input1");
    document.getElementById("tek2").innerHTML=localStorage.getItem("input2");
 
    document.getElementById("tek4").innerHTML=localStorage.getItem("input4");
    document.getElementById("tek5").innerHTML=localStorage.getItem("input5");





    
function ValidateRegForm() {
    

    username= document.regform.username;  //getting the first name and declaring it into variable firstnem
    var txtregx = /^[a-zA-Z]+$/i;  //declaring a text regular expression

    email = document.regform.email;
    var emailregx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ //email regular expression

  
    

    password_1= document.regform.password_1;
    //password must have atleast one digit, one lowercase, one uppercase, one special character and atleast 8 words in lenght
    var passwordregx = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

    password_2= document.regform.password_2;
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
    if(password_1.value == ""){
        alert("Please Enter your password. Password cannot be blank");
        password_1.focus();
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
   
    if(!passwordregx.test(password_2.value)){
        alert(" //password must have atleast one digit, one lowercase, one uppercase, one special character and atleast 8 words in length");
        password_2.focus();
        return false;
    }




}
