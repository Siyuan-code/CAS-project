usersList = document.querySelector(".users .users-list");
const searchBar1 = document.querySelector(".search1 input");
searchBtn1 = document.querySelector(".search1 button");

searchBtn1.onclick = ()=>{
    console.log("Hello");
}

searchBar1.onkeyup = () =>{
    let searchTerm = searchBar1.value;
    console.log(searchTerm);
    if(searchTerm != ""){
        searchBar.classList.add("active");
    }
    else{
        searchBar.classList.remove("active");
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "browseOccu.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
                console.log(data);
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}