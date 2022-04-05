

document.forms['register'].addEventListener('submit',registerNewUser);

function registerNewUser(event){
    
    event.preventDefault();
    
    const username = document.forms['register']['username'].value;
    const password = document.forms['register']['password'].value;
    const password2 = document.forms['register']['confirmpassword'].value;

    if(username.length <= 0) {
        alert('Username is required!');
        return;
    }

    if(password.length <= 4) {
        alert('Password minimum length is 4 characters!');
        return;
    }

    if (password.localeCompare(password2) != 0){
        alert('Password nor matching!!');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
           alert('Tallennus onnistui!');
        } else {
            alert(data.error)
        }

    }
    ajax.open("POST", "backend/registerNewUser.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("username="+username+"&password="+password);

}