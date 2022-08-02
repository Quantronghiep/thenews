

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {

    // var menu = document.getElementsByClassName("dropdown-content");
    var menu = document.getElementById('myDropdown');

    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
    // alert("hehe");
}

function openImage(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" text-blue-600", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " text-blue-600";
}




