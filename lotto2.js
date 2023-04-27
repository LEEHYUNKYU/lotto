function pushRandom(){
	var num_set = $("#num_set").val();
	var j;
	var random_num = new Array();
	var random = "";
	for(j=0; j < num_set; j++){	
		for(var i = 0; i < 7; i++){
			var random = Math.floor((Math.random() * 45) + 1);
			if(i == 0){
				random_num.push(random);
			}else{
				if($.inArray(random, random_num) !=-1){
					i--;
					return true;
				}else{
					random_num.push(random);
				}
			}
		}

		fn_loop(random_num);
	}

}

function fn_loop(random_num){
	var num_set = $("#num_set").val();
	var j;
	for(j=0; j < num_set; j++){
		$('.set'+j).each(function(i, item){
			
			setTimeout(function() {
				$(item).animateNumber(
			    {
			      number: 45
			    },
			    'normal',
			    function() {
			      $(item).text(random_num[i]);
			    }
			  );
			}, 500*i);
		});
	}
}

function reset(){
	var num_set = $("#num_set").val();
	var j;
	for(j=0; j < num_set; j++){
		$('.set'+j).each(function(){
			$(this).text('');
		});
	}
}

var detaili = 0;
function detailPrc() {
	++detaili;
	msg = detaili+"<div id='content'"+detaili>"<div>";
	DetailDiv.innerHTML += msg;
}