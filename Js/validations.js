const form = document.getElementById("form");
const lname = document.getElementById("lname");
const email = document.getElementById("email");
const nic = document.getElementById("nic");
const address = document.getElementById("address");
const fname = document.getElementById("fname");
const users = document.getElementById("users");
const mobile = document.getElementById("mobile");

const errorElement = document.getElementById('error');

form.addEventListener('next' ,(e) => {
    let messages=[]

    if(fname.value ==='' || fname.value == null){
        messages.push('First name is required');
    }

    if(messages.length >0){
        e.preventDefault();
        errorElement.innerText=messages.join(',');
    }
});