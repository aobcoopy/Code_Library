<form id="form_send_data" class="wpcf7-form" novalidate>
	<div style="display: none;">
		<input type="hidden" name="_wpcf7" value="4861">
		<input type="hidden" name="_wpcf7_version" value="5.1.1">
		<input type="hidden" name="_wpcf7_locale" value="th">
		<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4861-p1346-o2">
		<input type="hidden" name="_wpcf7_container_post" value="1346">
		<input type="hidden" name="g-recaptcha-response" value="">
	</div>
	<div class="tt-l tt-full title_from">
		<h3>แจ้งเติมเงิน</h3>
	</div>
	<div class="tt_from_list">
		<div class="tt_from_box tt_hide">
<span class="wpcf7-form-control-wrap your-subject"><select name="your-subject" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="แจ้งฝากเงิน">แจ้งฝากเงิน</option></select></span>
		</div>
	</div>
	<div class="tt_from_list">
		<div class="tt_from_title">User</div>
		<div class="tt_from_box">
<span class="wpcf7-form-control-wrap your-name"><input type="text" name="tx_user" id="tx_user" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="User *"></span>
		</div>
	</div>
	<div class="tt_from_list">
		<div class="tt_from_title">ชื่อบัญชีลูกค้า</div>
		<div class="tt_from_box">
<span class="wpcf7-form-control-wrap text-157"><input type="text" name="tx_name" id="tx_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="ชื่อบัญชีลูกค้า *"></span>
		</div>
	</div>
	<div class="tt_from_list">
		<div class="tt_from_title">ธนาคารของทางเว็บ</div>
		<div class="tt_from_box">
<span class="wpcf7-form-control-wrap menu-189"><select name="cbb_bacnk" id="cbb_bacnk" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="กรุณาเลือกธนาคาร">กรุณาเลือกธนาคาร</option><option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option><option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option><option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option><option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option><option value="ธนาคารทหารไทย">ธนาคารทหารไทย</option><option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option></select></span>
		</div>
	</div>
	<div class="tt_from_list">
		<div class="tt_from_title">วันที่โอน (ตามในใบสลิป)</div>
		<div class="tt_from_box">
<span class="wpcf7-form-control-wrap text-205"><input type="text" name="tx_day" id="tx_day" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="วันที่โอน (ตามในใบสลิป) เช่น 23/9/16 *"></span>
		</div>
	</div>
	<div class="tt_from_list">
		<div class="tt_from_title">เวลาที่โอน (ตามในใบสลิป)</div>
		<div class="tt_from_box">
<span class="wpcf7-form-control-wrap text-206"><input type="text" name="tx_time" id="tx_time" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="เวลาที่โอน (ตามในใบสลิป) เช่น 22:18 *"></span>
		</div>
	</div>
	<div class="tt_from_list">
		<div class="tt_from_title">จำนวนเงินที่โอนเข้ามา</div>
		<div class="tt_from_box">
<span class="wpcf7-form-control-wrap text-209"><input type="text" name="tx_amount" id="tx_amount" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="จำนวนเงินที่โอนเข้ามา (ไม่รวมค่าธรรมเนียม) *"></span>
		</div>
	</div>
    
    
    
    <div class="tt_from_list">
		<div class="tt_from_title">รูปสลิป (ตามในใบสลิป)</div>
		<div class="tt_from_box">
<span class="wpcf7-form-control-wrap text-206"><button type="button" class="btn btn-primary btn_uploadd" onClick="upload_photo()">Upload</button></span>
		</div>
	</div>
    
    <div class="tt_from_list">
		<div class="tt_from_title"></div>
		<div class="tt_from_box">
<span class="wpcf7-form-control-wrap text-206">
	<div class="thumbs">
        <div class="col-md-12 phof">
            <input type="hidden" class="paths" id="path_photo" name="path_photo">
            <input type="hidden" name="txt_photo" id="txt_photo" >
            <img width="100%" class="phos">
        </div>
    </div>
</span>
		</div>
	</div>
    
    
    
    
    
    
    
	<div class="tt_from_submit">
    	<button class="wpcf7-form-control wpcf7-submit"  onClick="send_data();">แจ้งฝากเงิน</button>
		<!--<input type="button" value="แจ้งฝากเงิน" class="wpcf7-form-control wpcf7-submit" ><span class="ajax-loader"></span>-->
	</div>
	<div class="wpcf7-response-output wpcf7-display-none"></div>
</form>

<form id="form_add_photo" class="hidden" style="display:none;">
    <!--<input name="txtID" value="<?php echo $brand['id']?>" type="hidden">-->
    <input id="f_Photo" name="file" type="file" accept="image/*" capture="camera">
    <button type="button" id="btn_upp" onClick="upload_photo_file()">UP</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
function send_data()
{
	if($("#tx_user").val()=='')
	{
		alert('กรุณากรอกข้อมูลด้วยครับ');
		$("#tx_user").focus()
		return false;
	}
	else if($("#tx_name").val()=='')
	{
		alert('กรุณากรอกข้อมูลด้วยครับ');
		$("#tx_name").focus()
		return false;
	}
	else if($("#cbb_bacnk").val()=='กรุณาเลือกธนาคาร')
	{
		alert('กรุณากรอกข้อมูลด้วยครับ');
		$("#cbb_bacnk").focus()
		return false;
	}
	else if($("#tx_day").val()=='')
	{
		alert('กรุณากรอกข้อมูลด้วยครับ');
		$("#tx_day").focus()
		return false;
	}
	else if($("#tx_time").val()=='')
	{
		alert('กรุณากรอกข้อมูลด้วยครับ');
		$("#tx_time").focus()
		return false;
	}
	else if($("#tx_amount").val()=='')
	{
		alert('กรุณากรอกข้อมูลด้วยครับ');
		$("#tx_amount").focus()
		return false;
	}
	else if($("#path_photo").val()=='')
	{
		alert('กรุณากรอกข้อมูลด้วยครับ');
		$("#btn_uploadd").click()
		return false;
	}
	else
	{
		$.post('line_notify.php',$('#form_send_data').serialize(),function(response){
				if(response.success){
					window.location.reload();
				}else{
				}
			},'json');
			return false;
	}
}




    var file_upload = "#f_Photo";

	function upload_photo(){
		$(file_upload).click();
		$(file_upload).unbind();
		
		$(file_upload).on("change",function(e){
			var files = this.files
			$("#btn_upp").click();    
		});
	};
	
	function upload_photo_file(){
		$("#btn_upp").css({"background":"green"});
		var data = new FormData($("#form_add_photo")[0]);
		$.ajax({
			url: '../upload_photo/action-up-photo.php',
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			type: 'POST',
			dataType: 'json',
			success: function(response){
				if(response.success){
					$("#path_photo").val(response.path);
					$("#txt_photo").val(response.path);
					$(".phos").attr('src',response.path);
					$(".bc").show();
					/*$("#tblbrand").DataTable().draw();
					$("#dialog_edit_icon").modal('hide');*/
				}else{
					fn.engine.alert("Alert",response.msg);
				}	
			}
		});
	};
</script>