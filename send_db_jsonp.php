<!-- jsonp로 연결 2018-01-03  -->
<script src="/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">

	var is_wr_name = "<?php echo urlencode($is_wr_name)?>";
	var is_ca_name = "<?php echo urlencode($is_ca_name)?>";
	var is_ca_name2 = "<?php echo urlencode($is_ca_name2)?>";
	var is_wr_1 = "<?php echo urlencode($is_wr_1)?>";
	var is_wr_2 = "<?php echo urlencode($is_wr_2)?>";
	var is_wr_3 = "<?php echo urlencode($is_wr_3)?>";
	var is_wr_4 = "<?php echo urlencode($is_wr_4)?>";
	var is_wr_5 = "<?php echo urlencode($is_wr_5)?>";
	var is_wr_6 = "<?php echo urlencode($is_wr_6)?>";

	var is_bo_table = "<?php echo urlencode($is_bo_table)?>";
	var is_wr_subject = "<?php echo urlencode($is_wr_subject)?>";	
	var is_wr_content = "<?php echo urlencode($is_wr_content)?>";	
	var is_br_id = "monaco";
	
	var dummy = "";

	$.ajax({
			type:"GET",
			url : "http://www.xn--260b5yshr3e1vjwom.com/insert_db_jsonp_monaco.php",
			data : {"accessKey" : "cfc773852e068cadc771ab26f994682c", "is_wr_name" : is_wr_name, "is_ca_name" : is_ca_name, "is_ca_name2" : is_ca_name2, "is_wr_1" : is_wr_1, "is_wr_2" : is_wr_2, "is_wr_3" : is_wr_3, "is_wr_4" : is_wr_4, "is_wr_5" : is_wr_5, "is_wr_6" : is_wr_6, "is_wr_content" : is_wr_content, "is_bo_table" : is_bo_table, "is_wr_subject" : is_wr_subject, "is_br_id" : is_br_id},
			dataType : "jsonp",			
			jsonpCallback : "dfInsert",
					
				success: function(data) {					
					console.log("success = "+JSON.stringify(data));
					
					// 데이타가 있을시 alert
					//if(data != null) {
					//	alert(data.message + "[" + data.time + "]" + data.gate_name);
					//}
				},
				
				error: function(xhr) {
					console.log("error = "+JSON.stringify(xhr));
				}
		});
</script>
