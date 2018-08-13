<!DOCTYPE html>
<html>
   <head>
      <title>Customer List</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <style>
         h1.heading{
         color: tomato;
         }
         th.tabhead{
         background-color: lightblue;
         }
      </style>
      <script type="text/javascript">
         
                 $(function() {
                 $(document).on('click','.delbutton',function(){
                 var element = $(this);
                 var del_id = element.attr("id");
                 var info = 'id=' + del_id;
                 var el = this;
           		var id = this.id;
           		var splitid = id.split("_");
         
           		// Delete id
           		var deleteid = splitid[1];
          
                 if(confirm("Are you sure you want to delete this Record?")){
                     $.ajax({
                         type: "GET",
                         url: "delete.php",
                         data: 'id1=' + deleteid,
                         success: function(){ 
                         	// Removing row from HTML Table
         				    $(el).closest('tr').css('background','tomato');
         				    $(el).closest('tr').fadeOut(800, function(){ 
         				     $(this).remove();
         				      });
                          } 
                     });
                 }
                 return false;
                 });
                 });
            
            $(function() {
                 $(document).on('click','.admbutton',function(){
                 var element = $(this);
                 var del_id = element.attr("id");
                 var info = 'id=' + del_id;
                 var el = this;
           		var id = this.id;
           		var splitid = id.split("_");
         
           		
           		var admin = splitid[1];
          
                 if(confirm("Are you sure you want to mark this user as Admin?")){
                     $.ajax({
                         type: "GET",
                         url: "admin.php",
                         data: 'id1=' + admin,
                         success: function(){ 
                         	
         				    
         				    $(el).closest('tr').fadeIn(800, function(){ 
         				     $(this).change();
         				      });
                          } 
                     });
                     }
                 return false;
                 });
                 });
                  
         // $( "#del" ).click(function() {
         //    $(this).closest('tr').remove();
         //    console.log(hi);
         // })
         
      </script>
   </head>
   <body>
      <h1 class="heading">Hello, Admin!</h1>
      <br><br>
      <div class=“form-group”>
         <input type="text" id='search' placeholder="Search Your Customer"><br><br>
         Below is a list of all the customer details:<br><br>
      </div>
      <?php
         // error_reporting(E_ALL);
         //  ini_set('display_errors', 1);
          $conn = new mysqli("localhost", "root", "root", "MiniProject");
         
         		if ($conn->connect_error) {
         		    die("Connection failed: " . $conn->connect_error);
         		} 
         		$query="SELECT * FROM CustomerDetails ";  
         		$result=$conn->query($query);
         		echo "<table id='myTable'  border='1' cellpadding='0.5px'>";
         		echo "<th class='tabhead'> ResID </th>";
         		echo "<th class='tabhead'> F-name </th>";
         		echo "<th class='tabhead'> L-name </th>";
         		echo "<th class='tabhead'> Phone </th>";
         		echo "<th class='tabhead'> Username </th>";
         		echo "<th class='tabhead'> Password </th>";
         		echo "<th class='tabhead'> Housing Loc </th>";
         		echo "<th class='tabhead'> Street </th>";
         		echo "<th class='tabhead'> City </th>";
         		echo "<th class='tabhead'> State </th>";
         		echo "<th class='tabhead'> ZIP </th>";
         		echo "<th class='tabhead'> Sec Housing </th>";
         		echo "<th class='tabhead'> Sec Street </th>";
         		echo "<th class='tabhead'> Sec City </th>";
         		echo "<th class='tabhead'> Sec State </th>";
         		echo "<th class='tabhead'> Sec Zip </th>";
         		echo "<th class='tabhead'> isAdmin </th>";
         		echo "<th class='tabhead'> View </th>";
         		echo "<th class='tabhead'> Delete </th>";
         		echo "<th class='tabhead'>  Make Admin </th>";
         		
         
         		echo "<tbody>";
         		while($r=$result->fetch_array(MYSQLI_ASSOC)) {
         		extract($r);
         		// echo '<pre>';print_r($r);exit;
         
         		echo"<tr>";
         		foreach($r as $key => $value)
         		{
         			
           			// echo $key; 
         
           			echo "<td width='70px' height='50px'>" .$value. "</td>";
           			$id= 'del_'.$r['ResID'];
           			$admin= $r['IsAdmin'];
         			
         
         		}
         		//$GLOBALS['del']= $r['ResID'];
         		echo "<td>" ."<input type='submit' name='view' value='View'>". "</td>";
         		  echo '<td><div><a href="#" id="'.$id.'" class="delbutton" title="Click To Delete">delete</a></div></td>';
         		echo '<td><div><a href="#" id="'.$id.'" class="admbutton" title="Change admin status">Make Admin</a></div></td>';
         		echo "</tr>";
         
         // if(isset($_POST['makeAdmin']))
         // {

         // }
         	// 	if( isset($POST['delete']) )
         	// {
         	// 	$id = $GLOBALS['del'];
         	// 	echo $id; exit();
         	// 	$conn = new mysqli("localhost", "root", "root", "MiniProject");
         
         	// 	if ($conn->connect_error) {
         	// 	    die("Connection failed: " . $conn->connect_error);
         	// 	} else {echo "success";}
         	  
         	//     $dele="SELECT * FROM CustomerDetails WHERE ResID='".$id."'";  
         	// 	$result=$conn->query($dele); 
         	// 	echo $result;
         
         	// 	//echo "<meta http-equiv='refresh' content='0;url=index.php'>";
         	// }
         		
         		}
         		echo "</tbody>";
         		echo "</table>";
         
         
         ?>
      <h3> View specific details (click on view button)</h3>
      Residential ID: &nbsp;&nbsp;
      <input type="text" id="resID" />
      <br><br>First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="fname" />
      <br><br>Last name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="lname" />
      <br><br>Phone no.: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="phno" />
      <br><br>Username:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="user" />
      <br><br>Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="pwd" /><br><br>
      <u>Primary Address:</u>
      <br><br>Housing Location:
      <input type="text" id="HsgLoc" />
      <br><br>Street Address: &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="StrtAdd" />
      <br><br>City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="City" />
      <br><br>State: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="State" />
      <br><br>ZIP code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="Zip" /><br><br>
      <u>Secondary Address</u>
      <br><br>Housing Location:
      <input type="text" id="HsgLoc1" />
      <br><br>Street Address: &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="StrtAdd1" />
      <br><br>City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="City1" />
      <br><br>State: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="State1" />
      <br><br>ZIP code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <input type="text" id="Zip1" />
      <script>
         $("#search").keyup(function () {
             var value = this.value.toLowerCase().trim();
         
             $("table tr").each(function (index) {
                 if (!index) return;
                 $(this).find("td").each(function () {
                     var id = $(this).text().toLowerCase().trim();
                     var not_found = (id.indexOf(value) == -1);
                     $(this).closest('tr').toggle(!not_found);
                     return not_found;
                 });
             });
         })
         
      </script>
      <script type="text/javascript">
         (function () {
            if (window.addEventListener) {
                window.addEventListener('load', run, false);
            } else if (window.attachEvent) {
                window.attachEvent('onload', run);
            }
         
            function run() {
                var t = document.getElementById('myTable');
                t.onclick = function (event) {
                    event = event || window.event;
                    var target = event.target || event.srcElement;
                    while (target && target.nodeName != 'TR') { // find TR
                        target = target.parentElement;
                    }
         
                     var cells = target.cells;
         
                     if (!cells.length || target.parentNode.nodeName == 'THEAD') {
                        return;
                    }
                    var f1 = document.getElementById('resID');
                    var f2 = document.getElementById('fname');
                    var f3 = document.getElementById('lname');
                    var f4 = document.getElementById('phno');
                    var f5 = document.getElementById('user');
                    var f6 = document.getElementById('pwd');
                    var f7 = document.getElementById('HsgLoc');
                    var f8 = document.getElementById('StrtAdd');
                    var f9 = document.getElementById('City');
                    var f10 = document.getElementById('State');
                    var f11 = document.getElementById('Zip');
                    var f12 = document.getElementById('HsgLoc1');
                    var f13 = document.getElementById('StrtAdd1');
                    var f14 = document.getElementById('City1');
                    var f15 = document.getElementById('State1');
                    var f16 = document.getElementById('Zip1');
                    f1.value = cells[0].innerHTML;
                    f2.value = cells[1].innerHTML;
                    f3.value = cells[2].innerHTML;
                    f4.value = cells[3].innerHTML;
                    f5.value = cells[4].innerHTML;
                    f6.value = cells[5].innerHTML;
                    f7.value = cells[6].innerHTML;
                    f8.value = cells[7].innerHTML;
                    f9.value = cells[8].innerHTML;
                    f10.value = cells[9].innerHTML;
                    f11.value = cells[10].innerHTML;
                    f12.value = cells[11].innerHTML;
                    f13.value = cells[12].innerHTML;
                    f14.value = cells[13].innerHTML;
                    f15.value = cells[14].innerHTML;
                    f16.value = cells[15].innerHTML;
                   
                    //console.log(target.nodeName, event);
                };
            }
         
         })();
      </script>
   </body>
</html>