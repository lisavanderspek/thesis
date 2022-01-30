var startDate;
window.onload = function() {
  startDate = new Date();
};

function SaveTime(){
	var endDate   = new Date();
	var seconds = (endDate.getTime() - startDate.getTime()) / 1000;
	jsonString = JSON.stringify(seconds);
  	$.ajax({
    	url: 'save.php',
    	data : {'jsonString':"Task 3 "+jsonString + " MC \n"},
    	type: 'POST'
  	});
         window.location.href = "productpage.html";
    }