window.onload = function() {
    prepareListener();
 }
 function prepareListener() {
     var droppy;
     droppy = document.getElementById("pickaprovince");
     droppy.addEventListener("change", getProvince);
 }
 function  getProvince() {
     this.form.submit();
 }
 
 