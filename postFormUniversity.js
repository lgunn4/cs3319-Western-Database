window.onload = function() {
    prepareListener();
 }
 function prepareListener() {
     var droppy;
     droppy = document.getElementById("pickauniversity");
     droppy.addEventListener("change",getUniversity);
 }
 function  getUniversity() {
     this.form.submit();
 }
 
 