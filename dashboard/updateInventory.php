<?php 	require('../database.php'); 
session_start();
	
	if (!isset ($_SESSION['loggedIn']) || $_SESSION["userType"] == 0){
		header("location:./index.php");
		exit();	
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Update Inventory</title>
    <?php  include_once "../templates/includes.php"; ?>
<script>
         $(function() {
            $( ".spinner" ).spinner({

            });
 
         });
      </script>
     
      
      
</head>

<body>

   <?php 
	$query="SELECT item_id, name, description, price, stock FROM Items";
	$results = mysqli_query($conn, $query);


	?>
    
    <?php foreach($results as $res) :?>
   <table id="_editable_table">

    	<tr id="<?php echo $res['item_id'] ?>">
		
        	<td> <?php echo $res['name'];?></td><br>
            <td> <?php echo $res['description'];?></td><br>
            <td> <?php echo $res['price'];?></td><br>
         	<td class="editable-col" contenteditable="true" col-index='0'> <?php echo $res['stock'];?></td>
       
      	</tr>
   </table>
        <br><br>
    <?php endforeach;?>

        

    
   <button type="submit">Update</button>

    
    <?php 
	
	$columns = array(
    0 =>'item_id', 
  );
  $error = true;
  $colVal = '';
  $colIndex = $rowId = 0;
  
  $msg = array('status' => !$error, 'msg' => 'Failed! updation in mysql');

  if(isset($_POST)){
    if(isset($_POST['item_id']) && !empty($_POST['item_id'])) {
      $colVal = $_POST['item_id'];
      $error = false;
      
    } else {
      $error = true;
    }
    if(isset($_POST['stock'])) {
      $colIndex = $_POST['stock'];
      $error = false;
    } else {
      $error = true;
    }
    
  		echo $colVal;
        $sql = "UPDATE items SET stock = '".$colIndex."' WHERE item_id='".$colVal."'";
        $status = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        //$msg = array('status' => !$error, 'msg' => 'Success! updation in mysql');
    }
  
  
  // send data as json format
  echo json_encode($msg);
	
	
	
	
	
	
	?>
    
    
    
    
    
    
    
    
    
    
    <script type="text/javascript">
$(document).ready(function(){
  $('td.editable-col').on('focusout', function() {
    data = {};
    data['item_id'] = $(this).parent('tr').attr('id');
    data['stock'] = $(this).text();

    $.ajax({   
          
          type: "POST",  
          url: "./updateInventory.php",  
          cache:false,  
          data: data,
          dataType: "json",       
          success: function(response)  
          {   
            //$("#loading").hide();
            if(response.status) {
              $("#msg").removeClass('alert-danger');
              $("#msg").addClass('alert-success').html(response.msg);
            } else {
              $("#msg").removeClass('alert-success');
              $("#msg").addClass('alert-danger').html(response.msg);
            }
          }   
        });
  });
});

</script>
</body>
</html>