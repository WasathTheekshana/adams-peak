document.querySelector("#open-form").addEventListener("click", function () {
    document.querySelector(".popupBox").classList.add("active");

});
document.querySelector(".closeButton").addEventListener("click", function () {
    document.querySelector(".popupBox").classList.remove("active");

});