<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script type="text/javascript">
function loadData()
{
	
	 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("data").innerHTML = this.responseText;
        //alert(this.responseText);
	  }
    };
    xmlhttp.open("GET", "getData.php", true);
    xmlhttp.send();
  }
  </script>
  </head>
  <body>
  <div class="row">
  <div class="col-md-12" style="height:100px"></div></div>
  <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6" id="data">
  <tr>
<td><center>
<button type="button" class="btn btn-primary" name="button" value="LoadData" onclick="loadData()">GET DATA</button>
</center></td>
</tr></div>
<div class="col-md-3"></div>
</div>
</body>
</html>