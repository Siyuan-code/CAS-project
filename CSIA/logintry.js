const form = document.querySelector(".login form");
loginBtn = form.querySelector(".button input");
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault();  // prevent form from submitting
}

loginBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();  // creating xml ojbect
    xhr.open("POST", "loginstudy.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                    location.href = "../public_html/homeafter.php";
                }
                else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

