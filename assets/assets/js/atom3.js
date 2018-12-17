document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();
    
    var dropdownElems = document.querySelectorAll('.dropdown-toggle');
    console.log(dropdownElems);
    var dropdownInstances = M.Dropdown.init(dropdownElems);
    console.log(dropdownInstances);
    
    // sidenav
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});
