function validate(){
    if(document.myForm.emri.value == ""){
        $("#emri").css("color","red");
        $('#emri').attr('placeholder','Ju lutem shkruani emrin');
        $("#emri").css("border-color","red");  
        return false;
    }
    if(document.myForm.email.value == ""){
        $("#email").css("border-color","red");
        return false;
    }  	
    var now = new Date();
    var dateString = moment(now).format('YYYY-MM-DD');
    // var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()+1);
    if(document.myForm.data.value <= dateString){
        $("#data").css("border-color","red");
        alert('Rezervo per neser ');
        return false;
    }
    if(document.myForm.Personat.value == "-1") {
        $("#Personat").css("border-color","red");
        alert("Sa persona jeni!");
        return false;
    }
    else {
        return true;
    }
}
