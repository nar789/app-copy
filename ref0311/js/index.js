function init(){
	$.post("geturl.php",{},function(data,status){
		var j=JSON.parse(data);
		document.getElementById('img1').src=j.imgurl1;
		document.getElementById('img2').src=j.imgurl2;
		document.getElementById('img3').src=j.imgurl3;
		document.getElementById('img4').src=j.imgurl4;
		document.getElementById('url1').value=j.url1;
		document.getElementById('url2').value=j.url2;
		document.getElementById('url3').value=j.url3;
		document.getElementById('url4').value=j.url4;
	});

}
function update(idx){
	var url="";
	if(idx==1){
		url=document.getElementById('url1').value;
	}
	else if(idx==2){
		url=document.getElementById('url2').value;
	}
	else if(idx==3){
		url=document.getElementById('url3').value;
	}
	else if(idx==4){
		url=document.getElementById('url4').value;
	}

	$.post("updateurl.php",{
		no:idx,
		url:url
	},function(data,status){
		alert(data);
	})
}

function imgclick(img){
	location.href=img.src;
}
window.onload=init();
