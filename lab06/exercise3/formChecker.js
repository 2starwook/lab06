
function reset_cart(){
  var item1_count = document.getElementById("item1-count");
  var item2_count = document.getElementById("item2-count");
  var item3_count = document.getElementById("item3-count");
  item1_count.innerHTML = 0;
  item2_count.innerHTML = 0;
  item3_count.innerHTML = 0;
}

function add_item(item_id){
  var item_count = document.getElementById(item_id + "-count");
  item_count.innerHTML = Number(item_count.innerHTML) + 1;
}

function verify_submit(){
  var item1_count = document.getElementById("item1-count").innerHTML;
  var item2_count = document.getElementById("item2-count").innerHTML;
  var item3_count = document.getElementById("item3-count").innerHTML;
  if (Number(item1_count) + Number(item2_count) + Number(item3_count) == 0){
    alert("Total quantity cannot be 0")
    return false;
  }
  if ($('input[name=shipping-method]:checked').length == 0) {
    alert("Shipping method must be selected")
    return false;
  }
  var form_item1 = document.getElementById("form-item1_count");
  var form_item2 = document.getElementById("form-item2_count");
  var form_item3 = document.getElementById("form-item3_count");
  form_item1.setAttribute('value',item1_count);
  form_item2.setAttribute('value',item2_count);
  form_item3.setAttribute('value',item3_count);
}