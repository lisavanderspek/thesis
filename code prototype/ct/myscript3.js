var startDate;
window.onload = function() {
  startDate = new Date();
};

async function SaveTime(){
	var endDate   = new Date();
	var seconds = (endDate.getTime() - startDate.getTime()) / 1000;
	jsonString = JSON.stringify(seconds);
  	await $.ajax({
    	url: 'save.php',
    	data : {'jsonString':"Task 3 "+jsonString + " CT \n"},
    	type: 'POST'
  	});
         window.location.href = "productpage.html";
    }