$(document).ready(function(){
			$("input:radio").click(function() {
    var $this = $(this);
    var value = $this.val();
    $('input:radio[value="' + value + '"]') 
        .not(this)
        .attr("disabled","disabled"); 
        });
			});