function checkInp()
{
    var tName = document.forms["myForm"]["tName"].value;
    var tSurname = document.forms["myForm"]["tSurname"].value;
    var tAge = document.forms["myForm"]["tAge"].value;
    var tSalary = document.forms["myForm"]["tsalary"].value;
    if(tName == "" || tName === null){
        alert("Name should not be empty");
        return false;
    }
    if(tSurname == "" || tSurname === null){
        alert("Surname should not be empty");
        return false;
    }
    if (tAge <= 0) 
    {
        alert("Enter valued number");
        return false;
    }
    if (tSalary <= 0 || isNaN(tSalary)) 
    {
        alert("Enter valued number");
        return false;   
    }
}

window.onload = function(){
    var btnSelected = document.getElementById("btnSelected");
    btnSelected.onclick = function(){
        var x = document.getElementById("sel");
        var x1 = document.getElementById("sel1");
        for (var i = 0; i < x.options.length; i++) {
            if(x.options[i].selected ==true){
                var newOption = document.createElement("option");
                newOption.setAttribute('value',  x.options[i].value);
                newOption.innerHTML = x.options[i].value;
                x1.appendChild(newOption);
                x.options[i].remove();

            }
        }
        return false;
    }


    var btnDeleted = document.getElementById("btnDeleted");
    btnDeleted.onclick = function(){
        var x1 = document.getElementById("sel1");
        var x = document.getElementById("sel");
        for (var i = 0; i < x1.options.length; i++) {
            if(x1.options[i].selected ==true){
                var newOption = document.createElement("option");
                newOption.setAttribute('value',  x1.options[i].value);
                newOption.innerHTML = x1.options[i].value;
                x.appendChild(newOption);
                x1.options[i].remove();

            }
        }
        return false;
    }

    


}