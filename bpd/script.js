$(document).ready(function(){
$(".radioBtn").click(function() {
    $("#t2name1,#t2name2,#t2phone1,#t2phone2,#t3name1,#t3name2,#t3phone1,#t3phone2,#accommodation2,#student2,#accommodation3,#student3").attr("disabled", false);
    if ($("input[name=no_]:checked").val() == "1") {
        $("#t2name1").attr("disabled",true);
        $("#t2name2").attr("disabled",true);
        $("#t2phone1").attr("disabled",true);
        $("#t2phone2").attr("disabled",true);
        $("#t3name1").attr("disabled",true);
        $("#t3name2").attr("disabled",true);
        $("#t3phone1").attr("disabled",true);
        $("#t3phone2").attr("disabled",true);         
       $("#accomodation21").attr("disabled",true); 
       $("#student21").attr("disabled",true); 
       $("#accomodation31").attr("disabled",true); 
       $("#student31").attr("disabled",true); 
        $("#accommodation22").attr("disabled",true); 
       $("#student22").attr("disabled",true); 
       $("#accommodation32").attr("disabled",true); 
       $("#student32").attr("disabled",true); 
    }
    if ($("input[name=no_]:checked").val() == "2") {
        $("#t3name1").attr("disabled",true);
        $("#t3name2").attr("disabled",true);
        $("#t3phone1").attr("disabled",true);
        $("#t3phone2").attr("disabled",true);   
       $("#accomodation31").attr("disabled",true); 
       $("#student31").attr("disabled",true); 
       $("#accommodation32").attr("disabled",true); 
       $("#student32").attr("disabled",true);  
    }
});
});
