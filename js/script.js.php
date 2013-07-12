<?php 
header("Content-Type: application/javascript");
$curl = curl_init("http://www.random.org/sequences/?min=0&max=14&col=1&format=plain&rnd=new");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
$result = str_replace("\n", ",", trim($result));
?>
var arr = new Array(<?php echo $result;?>), moves_left=75;
<?php
$curl = curl_init("http://www.random.org/integers/?num=15&min=0&max=1&col=1&base=10&format=plain&rnd=new");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
$result = str_replace("\n", ",", trim($result));
?>
var random_bit = new Array(<?php echo $result;?>);

$(document).ready(function(){
	$("button#new_game").click(function(){
		location.reload();
	});
	$("button#submit").click(function(){
		var tmp = new Array();
		var contain_null = false;
		var first_not_match = 100;
		for (var i=1; i<=15; i++)
		{
			tmp.push(parseInt($("input[name='switch"+i+"']:checked").val()));
			if ($("input[name='switch"+i+"']:checked").val() === undefined)
				contain_null = true;
		}
		$("div#console").append("<p>"+JSON.stringify(tmp)+"</p>");
		if (contain_null)
		{
			$("div#console").append("<p style='color:red;'>Cannot query: Some of the switches are not defined.</p>");
			return;
		}
		moves_left--;
		$("span#moves_left").html(moves_left);
		for (var i=0; i<tmp.length; i++)
			if (tmp[i] != random_bit[arr[i]])
				first_not_match = Math.min(arr[i], first_not_match);
		if (first_not_match == 100)
		{
			$("div#console").append("<p style='color:green;'>You solved the puzzle!</p>");
			$("button#submit").hide();
		}
		else
			$("div#console").append("<p>"+(first_not_match+1)+"</p>");
		$("div#console").animate({
			scrollTop: $("div#console")[0].scrollHeight
		}, "fast");
	});
});