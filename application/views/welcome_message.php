<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<title>UOC GRADUATE</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-8">
					<form class="" action="index.html" method="post">
						<div class="form-group">
							<label for="year">ปีที่ส่งข้อมูล</label>
							<input class="form-control" type="text" name="year" value="" maxlength="4" placeholder="ปีที่ส่งข้อมูล" required autofocus>
						</div>

						<div class="form-group">
							<label for="univ_id">รหัสสถานศึกษา</label>
							<input class="form-control" type="text" name="univ_id" value="00100" maxlength="5" placeholder="จุฬาลงกรณ์มหาวิทยาลัย" disabled required>
						</div>

						<div class="form-group">
							<label for="citizen_id">รหัสประจำตัวประชาชน</label>
							<input class="form-control" type="text" name="citizen_id" value="" maxlength="13" placeholder="รหัสประจำตัวประชาชน" required>
						</div>

						<div class="form-group">
							<label for="std_id">รหัสนักศึกษา</label>
							<input class="form-control" type="text" name="std_id" value="" maxlength="13" placeholder="รหัสนักศึกษา" required>
						</div>

						<div class="form-group">
							<label for="prefix_name_id">รหัสคำนำหน้าชื่อ</label>
							<select class="form-control" name="prefix_name_id" required>
							  <option value="003">นาย</option>
							  <option value="004">นางสาว</option>
								<option value="005">นาง</option>
							</select>
						</div>

						<div class="form-group">
							<label for="std_fname">ชื่อนักศึกษา</label>
							<input class="form-control" type="text" name="std_fname" value="" maxlength="50" placeholder="ชื่อนักศึกษา" required>
						</div>

						<div class="form-group">
							<label for="std_mname">ชื่อกลาง(ถ้ามี)</label>
							<input class="form-control" type="text" name="std_mname" value="" maxlength="80" placeholder="ชื่อกลาง(ถ้ามี)">
						</div>

						<div class="form-group">
							<label for="std_lname">นามสกุล</label>
							<input class="form-control" type="text" name="std_lname" value="" maxlength="50" placeholder="นามสกุล" required>
						</div>

						<div class="form-group">
							<label for="gender_id">รหัสเพศ</label>
							<select class="form-control" name="gender_id" required>
							  <option value="1">ชาย</option>
							  <option value="2">หญิง</option>
							</select>
						</div>

						<div class="form-group">
							<label for="birthday">วันเดือนปีเกิด(พ.ศ) DD/MM/YYY</label>
							<input class="form-control" type="text" name="birthday" value="" maxlength="10" placeholder="12/02/2529" required>
						</div>

						<div class="form-group">
							<label for="fac_id">รหัสคณะที่ศึกษา</label>
							<input class="form-control" type="text" name="fac_id" value="00048" maxlength="5" placeholder="คณะพยาบาลศาสตร์" disabled required>
						</div>

						<div class="form-group">
							<label for="gpa">เกรดเฉลี่ย *ต้องมีทศนิยม 2 หลัก</label>
							<input class="form-control" type="text" name="gpa" value="" maxlength="4" placeholder="เกรดเฉลี่ย *ต้องมีทศนิยม 2 หลัก" required>
						</div>

						<div class="form-group">
							<label for="house_id">เลขรหัสประจำบ้าน</label>
							<input class="form-control" type="text" name="house_id" value="" maxlength="11" placeholder="เลขรหัสประจำบ้าน" required>
						</div>

						<div class="form-group">
							<label for="house_number">เลขที่บ้าน</label>
							<input class="form-control" type="text" name="house_number" value="" maxlength="10" placeholder="เลขที่บ้าน" required>
						</div>

						<div class="form-group">
							<label for="houseadd_name">ชื่อที่อยู่</label>
							<input class="form-control" type="text" name="houseadd_name" value="" maxlength="80" placeholder="ชื่อที่อยู่" required>
						</div>

						<div class="form-group">
							<label for="moo">หมู่</label>
							<input class="form-control" type="text" name="moo" value="" maxlength="4" placeholder="หมู่" required>
						</div>

						<div class="form-group">
							<label for="soi">ตรอก/ซอย</label>
							<input class="form-control" type="text" name="soi" value="" maxlength="80" placeholder="ตรอก/ซอย" required>
						</div>

						<div class="form-group">
							<label for="street">ถนน</label>
							<input class="form-control" type="text" name="street" value="" maxlength="80" placeholder="ถนน" required>
						</div>

						<div class="form-group">
							<label for="province">จังหวัด</label>
							<select class="form-control" name="province" id="province" required>
								<?php foreach($provinces->result() as $province){ ?>
        					<option value="<?php echo $province->PROVINCE_ID; ?>"><?php echo $province->PROVINCE_NAME_TH; ?></option>
    						<?php } ?>
							</select>
						</div>

						<div class="form-group">
							<label for="district">อำเภอ/เขต</label>
							<select class="form-control" name="district" id="district" required>
        					<option value=" "></option>
							</select>
						</div>

						<div class="form-group">
							<label for="sub_district_id">ตำบล/แขวง</label>
							<select class="form-control" name="sub_district_id" id="sub_district_id" required>
        					<option value=" "></option>
							</select>
						</div>
<!--
						<div class="form-group">
							<label for="sub_district_id">รหัสจังหวัดอำเภอตำบล</label>
							<input class="form-control" type="text" name="sub_district_id" value="" maxlength="6" placeholder="รหัสจังหวัดอำเภอตำบล" required>
						</div>
-->
						<div class="form-group">
							<label for="telephone">หมายเลขโทรศัพท์</label>
							<input class="form-control" type="text" name="telephone" value="" maxlength="30" placeholder="หมายเลขโทรศัพท์" required>
						</div>

						<div class="form-group">
							<label for="zipcode">รหัสไปรษณีย์</label>
							<input class="form-control" type="text" name="zipcode" value="" maxlength="5" placeholder="รหัสไปรษณีย์" required>
						</div>

						<div class="form-group">
							<label for="race_id">รหัสเชื้อชาติ</label>
							<select class="form-control" name="race_id" required>
							  <option value="099">ไทย</option>
							  <option value="994">อื่นๆ</option>
							</select>
						</div>

						<div class="form-group">
							<label for="religion_id">รหัสศาสนา</label>
							<select class="form-control" name="religion_id" required>
							  <option value="00">ไม่นับถือศาสนาใด</option>
							  <option value="01">ศาสนาพุทธ</option>
								<option value="02">ศาสนาอิสลาม</option>
								<option value="03">ศาสนาฮินดู</option>
								<option value="04">ศาสนายิว</option>
								<option value="05">ศาสนาซิกซ์</option>
								<option value="06">ศาสนาคริสต์</option>
								<option value="07">ศาสนาเชน</option>
								<option value="08">ศาสนาโซโรอัสเตอร์</option>
								<option value="09">ศาสนาบาไฮ</option>
							</select>
						</div>

						<div class="form-group">
							<label for="email">อีเมล</label>
							<input class="form-control" type="email" name="email" value="" maxlength="50" placeholder="อีเมล" required>
						</div>

						<div class="form-group">
							<label for="dategraduation">วันที่สำเร็จการศึกษา(พ.ศ.) DD/MM/YYYY</label>
							<input class="form-control" type="text" name="dategraduation" value="" maxlength="10" placeholder="08/06/2560" required>
						</div>

						<div class="form-group">
							<label for="curr_id">รหัสหลักสูตรที่สำเร็จการศึกษา</label>
							<input class="form-control" type="text" name="curr_id" value="25322121100124" maxlength="14" placeholder="หลักสูตรพยาบาลศาสตรบัณฑิต วิทยาลัยพยาบาลตำรวจ สถาบันสมทบจุฬาลงกรณ์มหาวิทยาลัย" disabled required>
						</div>

						<div class="form-group">
							<label for="degree_num">ลำดับของปริญญาในหลักสูตร</label>
							<input class="form-control" type="text" name="degree_num" value="1" maxlength="1" placeholder="พยาบาลศาสตรบัณฑิต" disabled required>
						</div>

						<div class="form-group">
							<label for="nation_id">รหัสสัญชาติ</label>
							<select class="form-control" name="nation_id" required>
							  <option value="TH">THAILAND</option>
							  <option value="XX">ไม่มีสัญชาติ</option>
							</select>
						</div>

						<div class="form-group">
							<label for="passport_number">เลขที่หนังสือเดินทาง</label>
							<input class="form-control" type="text" name="passport_number" value="" maxlength="20" placeholder="เลขที่หนังสือเดินทาง">
						</div>

						<div class="form-group">
							<label for="passport_startdate">วันที่ออกหนังสือเดินทาง(ค.ศ) DD/MM/YYYY</label>
							<input class="form-control" type="text" name="passport_startdate" value="" maxlength="10" placeholder="30/09/2016">
						</div>

						<div class="form-group">
							<label for="passport_enddate">วันหมดอายุของหนังสือเดินทาง(ค.ศ) DD/MM/YYYY</label>
							<input class="form-control" type="text" name="passport_enddate" value="" maxlength="10" placeholder="30/09/2021" required>
						</div>

						<button type="submit" class="btn btn-default" value="Submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	<script type="text/javascript">
	  jQuery(function($) {
	      jQuery('body').on('change','#province',function(){
	          jQuery.ajax({
	              'type':'POST',
	              'url':'http://localhost/ci_uoc-grd/index.php/uoc_grd/get_district',
	              'cache':false,
	              'data':{province:jQuery(this).val()},
	              'success':function(html){
	                  jQuery("#district").html(html);
	              }
	          });
	          return false;
	      });
	       jQuery('body').on('change','#district',function(){
	          jQuery.ajax({
	              'type':'POST',
	              'url':'http://localhost/ci_uoc-grd/index.php/uoc_grd/get_sub_district_id',
	              'cache':false,
	              'data':{district:jQuery(this).val()},
	              'success':function(html){
	                  jQuery("#sub_district_id").html(html);
	              }
	          });
	          return false;
	      });
	  });
	</script>
	</body>
</html>
