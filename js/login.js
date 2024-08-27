const form = document.querySelector('.form form'),
    submitbtn = form.querySelector('.submit input'),
    errortxt = form.querySelector('.error-text');

form.onsubmit = (e) => {
    e.preventDefault();
}

submitbtn.onclick = () => {
    //start ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./Php/login.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                if (data == "success") {
                    location.href = "./index.php";
                }
                else {
                    errortxt.textContent = data;
                    errortxt.style.display = "block";
                }
            }
        }
    }
    //send data through ajax to PhP
    let formData = new FormData(form); //creating new object from form data
    xhr.send(formData);// sending data to PhP
}