//retrieving  values from the form
const itform = document.getElementById('drugs_form'); //declaring a constant called theform

function submitData() {
    var DrugID = itform.elements['DrugID'].value;
    var drug_name = itform.elements['drug_name'].value;
    var manufacturer = itform.elements['manufacturer'].value;
    var number_available = itform.elements['number_available'].value;
    var payment_status = itform.elements['payment_status'].value;
    var drug_type = itform.elements['drug_type'].value;

    //storing into local storage 
    localStorage.setItem("input1", DrugID);
    localStorage.setItem("input2", drug_name);
    localStorage.setItem("input3", manufacturer);
    localStorage.setItem("input4", number_available);
    localStorage.setItem("input5", payment_status);
    localStorage.setItem("input6", drug_type);

}

//retrieving from local storage and sending to .phps's ids shown by tekvalues 
document.getElementById("tek1").innerHTML = localStorage.getItem("input1");
document.getElementById("tek2").innerHTML = localStorage.getItem("input2");
document.getElementById("tek3").innerHTML = localStorage.getItem("input3");
document.getElementById("tek4").innerHTML = localStorage.getItem("input4");
document.getElementById("tek5").innerHTML = localStorage.getItem("input5");
document.getElementById("tek6").innerHTML = localStorage.getItem("input6");

//validating the clinic forms 

function ValidateDrugsForm() {

    DrugID = document.dform.DrugID;
    drug_name = document.drugs_form.drug_name;  //getting the first name and declaring it into variable firstnem
    var txtregx = /^[a-zA-Z]+$/i;  //declaring a text regular expression

    manufacturer = document.dform.manufacturer;

    number_available = document.dform.number_available;
  
    var numregx = /^[0-9]+$/;

    payment_status = document.dform.payment_status;
    drug_type = document.dform.drug_type;

    

    if (DrugID.value == "") { //checking if the first name field is blank
        alert("DrugID should not be blank"); //returns an alert showing that the first name is blank
        DrugID.focus(); //returns the cursor into the box on the same page
        return false;
    }
    if (!numregx.test(DrugID.value)) { //validating that the value in the first name field is a text
        alert("Please enter the correct format drug id");
        DrugID.focus();
        return false;
    }
    if (drug_name.value == "") {
        alert("Please Enter drug name. Drug name should not be blank");
        drug_name.focus();
        return false;
    }

    if (!txtregx.test(drug_name.value)) {
        alert(" Enter the correct text format for drug name");
        drug_name.focus();
        return false;
    }

    if (manufacturer.value == "") {
        alert("Please enter manufacturer's name for partnership and reorder purposes");
        manufacturer.focus();
        return false;
    }
    if (!txtregx.test(manufacturer.value)) {
        alert("Please Enter the correct format for manufacturer");
        manufacturer.focus();
        return false;
    }


    else {
        alert("Your Login Information has been submitted successfully!") //informing the user that their form has been submitted successfully
    }



}
