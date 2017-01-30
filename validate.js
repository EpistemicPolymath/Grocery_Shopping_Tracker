/**
 *HW 02 Grocery Shopping Tracker
 *800768070_HW02
 *Jennifer Tillman
 */


window.onload = pageload();


function pageload() { //On the page's load the submit button will be hooked to the function validateForm

    document.getElementById("submitButton").onclick = validateForm;
}



function validateForm(){

    var budget = document.forms["theForm"]["userBudget"].value;
    if ((budget == " ") || (budget == null) || (budget == "")) {

        console.log('Budget validation failed');
        alert("The Budget value must be filled");
        return false;
    }


}


