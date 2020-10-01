<?php
$data = array();
$data["success"] = 1;
$data["html"] = '<div class="col-md-6 item-value">
    <img src="./images/formInterfacePart.PNG" alt="">
    <div
        class="btn-btn-select-radio-form custom-control custom-radio">
        <input type="radio" id="backgroundGame1" name="customRadio"
            class="custom-control-input">
        <label
            class="custom-control-label custom-control-description"
            for="backgroundGame1"></label>
    </div>
</div>
<div class="col-md-6 item-value">
    <img src="./images/formInterfacePart.PNG" alt="">
    <div
        class="btn-btn-select-radio-form custom-control custom-radio">
        <input type="radio" id="backgroundGame1" name="customRadio"
            class="custom-control-input">
        <label
            class="custom-control-label custom-control-description"
            for="backgroundGame1"></label>
    </div>
</div>
';

echo json_encode($data);
exit;
