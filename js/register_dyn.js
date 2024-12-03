//validate email and password

function validateRegisterInfo(){
    const email = document.getElementById("email");
    const phone = document.getElementById("telephone");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("Confirm");
    const gender = document.getElementById("gender");
    const email_regexp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

    if(!email.value.match(email_regexp)){
        email.style.outline = "red";
        email.style.boxShadow = "0px 0px 20px red";
        alert("Invalid email");
        return false;
    }
    
    if(isNaN(phone.value)){
        phone.style.outline = "red";
        phone.style.boxShadow = "0px 0px 20px red";
        alert("Invalid phone number");
        return false;
    }

    if(password.value.length < 6){
        password.style.outline = "red";
        password.style.boxShadow = "0px 0px 20px red";
        alert("Password must be at least 6 characters");
        return false;
    }

    if(confirmPassword.value != password.value){
        confirmPassword.style.outline = "red";
        confirmPassword.style.boxShadow = "0px 0px 20px red";
        alert("Password confirmation failed");
        return false;
    }
    return true;


}