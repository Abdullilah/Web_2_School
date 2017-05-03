window.onload = function(){
    var logo = document.getElementsByClassName("logo")[0];
    logo.onmouseover = function(){
        document.getElementsByClassName("hiddenDiv")[0].style.display = "block";
    }
    logo.onmouseout = function(){
        document.getElementsByClassName("hiddenDiv")[0].style.display = "none";
    }
}