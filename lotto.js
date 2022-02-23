function pushRandom(){
	var random_num = new Array();
	var random = "";
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

function fn_loop(random_num){
	$('.set').each(function(i, item){
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

function reset(){
	$('.set').each(function(){
		$(this).text('');
	});
}