const first_name = document.querySelector("#fName");
const last_name = document.querySelector("#lName");
const email = document.querySelector("#email");
const username = document.querySelector("#username");
const password = document.querySelector("#password");
const confirm_password = document.querySelector("#confirmPassword");
const signupBtn = document.querySelector("[id = 'signupBtn']");
const signinBtn = document.querySelector("#signinBtn");
const form = document.querySelector('#form');


console.log(first_name, " ", last_name, " ", email, " ", username, " ", password, " ", confirm_password, " ", signupBtn, " ", form);
console.log(email, " ", password, " ", signinBtn);

console.log("\n", form.parentElement.parentElement);

console.log("Hello");

form.addEventListener('submit', e => {
    e.preventDefault();
    if (validateInputs()) {
        e.target.submit();
        console.log("Validated Form");
    }
    else {
        console.log("Form Could not validate!");
    }
});

// const inputGroup =  document.querySelector(".form-control").parentElement;
// const errorDisplay = inputGroup.querySelector(".error");
console.log(document.querySelector(".error"));

// console.log(errorDisplay.innerText, " error ");
const setError = (element, message) => {

    const inputGroup = element.parentElement;
    const errorDisplay = inputGroup.querySelector(".error");

    errorDisplay.innerText = message;
    inputGroup.classList.add('error');
    inputGroup.classList.remove('success');

};

const setSuccess = element => {
    const inputGroup = element.parentElement;
    const errorDisplay = inputGroup.querySelector('.error');
    errorDisplay.innerText = " ";
    inputGroup.classList.add('success');
    inputGroup.classList.remove('error');

};


const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return re.test(String(email).toLowerCase());
}


const isValidPassword = password => {
    // Match passwords with at least 8 characters, including at least one uppercase letter, one lowercase letter, one digit, and one special character
    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}$/;
    return passwordRegex.test(password);
};

const validateInputs = () => {
    let isValid = true;

    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue === "") {
        setError(username, "username is required");
        isValid = false;

    }

    // else if (!isValidusername(usernameValue)) {
    //     setError(username, "provide a valid username address");
    //     isValid = false;

    // } 
    else {
        setSuccess(username);
        console.log("Successful username");
    }


    if (passwordValue === "") {
        setError(password, "Password is required");
        isValid = false;


    }
    else if (!isValidPassword(passwordValue)) {
        setError(password, "Password must contain at least 8 characters of one uppercase letter, lowercase letter, a number and one special character");
        isValid = false;
    }


    else if (passwordValue.length < 8) {
        setError(password, "Password must be at least 8 characters");
        isValid = false;


    } else {
        setSuccess(password);
        console.log("Successful Password");
    }



    return isValid;



};





// Example usage:
// const password1 = "MyPa$$w0rd";
// const password2 = "weakpassword";
// console.log(isValidPassword(password1)); // Output: true
// console.log(isValidPassword(password2)); // Output: false
