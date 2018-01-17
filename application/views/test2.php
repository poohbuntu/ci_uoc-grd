<div class="form-group">
  <label for="district">อำเภอ/เขต</label>
  <select class="form-control" name="district" id="district" required>
    <?php foreach($districts->result() as $district){ ?>
      <option value="<?php echo $district->DISTRICT_ID; ?>"><?php echo $district->DISTRICT_NAME_TH; ?></option>
    <?php } ?>
  </select>
</div>

<div class="form-group">
  <label for="sub_district_id">ตำบล/แขวง</label>
  <select class="form-control" name="sub_district_id" id="sub_district_id" required>
    <?php foreach($sub_districts->result() as $sub_district){ ?>
      <option value="<?php echo $sub_district->SUB_DISTRICT_ID; ?>"><?php echo $sub_district->SUB_DISTRICT_NAME_TH; ?></option>
    <?php } ?>
  </select>
</div>
