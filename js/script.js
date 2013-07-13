var moves_left=35;

var getSwitchState = function(idx){
	return $("#switch"+idx).is(":checked") ? 0 : 1;
}

$(document).ready(function(){
	$("button#new-game").click(function(){
		location.reload();
	});
	
	$("button#submit").click(function(){
		moves_left--;
		var first_not_match = 100;
		var switch_state = new Array();//Is only used for display purpose
		for (var i=0; i<10; i++) {
			switch_state.push(getSwitchState(i+1));
			//random_bit[i] is the correct bit for door i
			//arr[i] is the correct switch for door i
			if (getSwitchState(arr[i]+1) != random_bit[i] && first_not_match == 100) {
				first_not_match = i+1;
			}
		}
		$("div#console").append("<p>Switches are: "+JSON.stringify(switch_state)+"</p>");
		
		if (first_not_match == 100) {
			$("div#console").append("<p>Congrats, you have opened all the doors.</p>");
		} else {
			$("div#console").append("<p>Doors up to (but not including) "+first_not_match+" are open. Door "+first_not_match+" is closed.");
		}
		
		$("div#console").append("<p>You have "+moves_left+" moves left.");
		
		$("div#console").animate({
			scrollTop: $("div#console")[0].scrollHeight
		}, "fast");
		
		if (!moves_left || first_not_match == 100){
			$("button#submit").hide();
		}
	});
});