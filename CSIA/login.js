const pswrdField = document.querySelector(".login input[type='password']");
toggleBtn = document.querySelector(".login .field i");



toggleBtn.onclick = ()=>{
    if(pswrdField.type == "password"){
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    }
    else{
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}

