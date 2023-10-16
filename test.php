<script type="text/javascript">
function change() {
        var select = document.getElementById("slct");
        var divv = document.getElementById("container");
        var value = select.value;
        if (value == 1) {
            toAppend = "<input type='textbox' >"; divv.innerHTML=toAppend; return;
            }
            if (value == 2) {
                toAppend = "<input type='textbox' >&nbsp;<input type='textbox' >";divv.innerHTML = toAppend;  return;
            }
            if (value = 3) {
                toAppend = "<input type='textbox' >&nbsp;<input type='textbox' >&nbsp;<input type='textbox' >";divv.innerHTML = toAppend;  return;

            }
     }
</script>
<select id="slct" onchange="change();">
 <option value="1"> 1 </option>
<option value="2"> 2 </option>
 <option value="3"> 3 </option>
  </select>
  <div id="container"></div>