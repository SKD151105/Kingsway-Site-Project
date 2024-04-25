let btn = document.querySelector("input[type=submit]");
let form = document.querySelector("form");

btn.addEventListener('hover', function(e) {
    btn.value = "Kindly Proceed to Login page";
    e.preventDefault();
});
