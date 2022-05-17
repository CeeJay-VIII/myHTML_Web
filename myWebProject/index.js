
/*NAV bar onclick*/
let navbar = document.getElementById('nav');
navbar.onclick = function(){
    if(navbar.className=='closed'){
        navbar.className='opened';
        document.getElementById('default').id = 'sort';
    }
    else{
        navbar.className='closed';
        document.getElementById('sort').id='default';
    }
}