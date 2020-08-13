document.addEventListener("DOMContentLoaded", function(){
    const items = document.querySelectorAll('ol > li');
    items.forEach(item => items.addEventListener("click", function(){
        console.log(this); 
        })
    );
});