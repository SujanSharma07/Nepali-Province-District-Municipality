<?php
session_start();
	$z_arr=array("Mechi","Koshi","Sagarmatha","Janakpur","Bagmati","Narayani","Gandaki","Lumbini","Dhaulagiri","Rapti","Karnali","Bheri","Seti","Mahakali");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>District 2 Zones</title>
	</head>
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<body>
	<div id="Container">
		<div id="div_district" style="position:absolute; left:30%; width:20%; top:15%">
        	Select District
		</div>
		<div id="div_district2" style="position:absolute; left:50%; width:20%; top:15%;">
        	Select Zone 
        </div>

		<div id="div_district" style="position:absolute; left:30%; width:20%; top:20%">
              <select name="a_zone" id="a_zone"  class="form-control" style="padding:2px;width:100%;" onChange="javascript:$(this).focus();" onclick="javascript:$(this).focus();" value="<?php echo @$_SESSION['a_zone']; ?>">
                  <option value="s_z">Select Zone</option>
                    <?php
                  for($i=0;$i<14;$i++){
                     $d_data = $z_arr[$i];
                    echo "<option value=\"{$d_data}\" onchange=\"javascript:$('a_zone').focus();\">{$d_data}</option>";  
                  }
                  
                  ?>
            </select>
		</div>
		<div id="div_district" style="position:absolute; left:50%; width:20%; top:20%;">
    	<select name="a_district" id="a_district"  class="form-control" style="padding:2px;width:100%;"   onclick="javascript:$(this).focus();">
				  <option value="s_d">Select District</option>
				  <?php
				  $sess_dist=@$_SESSION['a_district'];
				  if(!empty($sess_dist) && $sess_dist!=="s_d" )
				  {
					  echo "<option  value=\"{$sess_dist}\" selected=\"selected\" id=\"selected_dist\">{$sess_dist}</option>";
				  }
				  ?>
			</select>
        </div>
	</div>
<div id="div_district3" style="position:absolute; left:30%; width:488px; top:35%;">
  <div align="center">
    <p><strong>Developed By Kiran Pantha</strong></p>
    <p>DOWNLOAD SOURCE (.zip) - 3KB</p>
  </div>
</div>
</body>
<script type="text/javascript">
$('.form-control').blur(function ()
{
				var ch='';
				var elem=$(this);
				if(elem.attr("name")=="a_zone")
				{
					$.ajax({
						  type: "POST",
						  url: "class.zone2district.php",
						  data: "zone="+elem.val(),
						  success: function(html){
							 	$("#div_district").show();
								$("#a_district").html(html);
								$("#selected_dist").hide();
								$("#a_district").focus();
						  }
					});
				}
});
</script>
</html>