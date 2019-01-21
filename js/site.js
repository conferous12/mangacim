function anasayfagetir(){
	var gelenveri="";
	$.ajax({
		  type: "POST",
		  url: "siteayar.php",
			data:{"doldur":"anasayfa"},
			dataType:"JSON",
		  success: function(response){	
			$.each(response, function(i, item) {
						gelenveri+='<div class="card col s3" style="margin:20px;"><div class="card-image"><img src="'+item.kucukgorsel+'" style="width:220px;height:220px;"><span class="card-title" style="background-color:black;color:white;padding:5px;">'+item.ad+'</span></div><div class="card-action"><a href="mangatanitim.html?id='+item.id+'">Detay</a></div></div>'
					})
						$(".index").html(gelenveri)
			}
		});		

}

function mangadetay(){

	var gelenurl=window.location.href;
	var url = new URL(gelenurl);
	var id=url.searchParams.get("id");
	$.ajax({
		  type: "POST",
		  url: "siteayar.php",
			data:{"doldur":"detay","id":id},
			dataType:"JSON",
		  success: function(response){	
					$(".manga-image").append('<img src="'+response[0].buyukgorsel+'" style="width:100%;height:600px;"/>')
					$(".manga-detay").append(response[0].detay)
					$(".likes").html(response[0].begenme)
					bolumler()
					yorumlar()
			}
		});		

}
	
function bolumler(){
	var gelenurl=window.location.href;
	var url = new URL(gelenurl);
	var id=url.searchParams.get("id");
	var gelenveri="";
	$.ajax({
		  type: "POST",
		  url: "siteayar.php",
			data:{"doldur":"bolumler","id":id},
			dataType:"JSON",
		  success: function(response){	
			$.each(response, function(i, item) {
						gelenveri+='<li class="collection-item bolum"><div>'+item.bolum+'. Bölüm<a href="okuma.html?id='+item.id+'&mangaid='+id+'" class="secondary-content "><i class="material-icons">send</i></a></div></li>'
					})
						$(".manga-bolum bolum").remove()
						$(".manga-bolum").append(gelenveri)
			}
		});		

}
function yorumlar(){
	var gelenurl=window.location.href;
	var url = new URL(gelenurl);
	var id=url.searchParams.get("id");
	var gelenveri="";
	$.ajax({
		  type: "POST",
		  url: "siteayar.php",
			data:{"doldur":"yorumlar","id":id},
			dataType:"JSON",
		  success: function(response){	
			$.each(response, function(i, item) {
						gelenveri+='<li class="collection-item avatar"><i class="material-icons circle">face</i><p>'+item.yorum+'</p></li>'
						})
						$(".manga-yorumlar li").remove()
						$(".manga-yorumlar").append(gelenveri)
			}
		});		

}
function yorumekle(){
	var yorum=$("#textarea1").val();
	if(yorum!=""){
		
		var gelenurl=window.location.href;
	var url = new URL(gelenurl);
	var id=url.searchParams.get("id");
	$.ajax({
		  type: "POST",
		  url: "siteayar.php",
			data:{"yorum":yorum,"doldur":"yorumekle","id":id},
			dataType:"JSON",
		  success: function(response){
			 location.reload()
		  }
		});		
		
	}else{alert("Boş yorum gönderilemez");}
	

}
function begen(){
	var begeni=$(".likes").text();
	begeni++;
	var gelenurl=window.location.href;
	var url = new URL(gelenurl);
	var id=url.searchParams.get("id");
	$.ajax({
		  type: "POST",
		  url: "siteayar.php",
			data:{"sayi":begeni,"doldur":"begeni","id":id},
			dataType:"JSON",
		  success: function(response){
			location.reload()
		  }
		});		
}
function sayfalar(){
	var gelenurl=window.location.href;
	var url = new URL(gelenurl);
	var mangaid=url.searchParams.get("mangaid");
	var bolumid=url.searchParams.get("id");
	var gelenveri="";
	$.ajax({
		  type: "POST",
		  url: "siteayar.php",
			data:{"bolumid":bolumid,"doldur":"sayfalar","mangaid":mangaid},
			dataType:"JSON",
			success: function(response){
				$.each(response, function(i, item) {
						gelenveri+='<div class="hard"><img src="'+item.sayfagorsel+'" style="width:100%;height:700px;"/> </div> '
						})
						$("#flipbook .hard").remove()
						$("#flipbook").append(gelenveri)
						
			$("#flipbook").turn({
			  width: 900,
			  height: 700,
			  autoCenter: true
			});
						
			
			}	
		  
		});		
}

function karakterler(){
	
	var gelenveri="";
	$.ajax({
		  type: "POST",
		  url: "siteayar.php",
			data:{"doldur":"karakterler"},
			dataType:"JSON",
		  success: function(response){	
			$.each(response, function(i, item) {
						gelenveri+='<div class="card col s3" style="margin:20px;"><div class="card-image"><img src="'+item.gorsel+'" style="width:220px;height:220px;"><span class="card-title" style="background-color:black;color:white;padding:5px;">'+item.karakteradi+'</span></div><div class="card-action"><a href="karaktertanitim.html?id='+item.id+'">Detay</a></div></div>'
					})
						$(".karakter").html(gelenveri)
			}
		});	
	
	
}
function karakterdetay(){
	
	var gelenurl=window.location.href;
	var url = new URL(gelenurl);
	var id=url.searchParams.get("id");
	$.ajax({
		  type: "POST",
		  url: "siteayar.php",
			data:{"doldur":"karakterdetay","id":id},
			dataType:"JSON",
		  success: function(response){	
					$(".manga-image").append('<img src="'+response[0].gorsel+'" style="width:100%;height:600px;"/>')
					$(".manga-detay").append(response[0].karakteradi+"<hr><br>"+response[0].detay)
					
			}
		});		
	
}

	
