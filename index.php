<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form>

<input type="text" id="name" name="name">
<input type="text" id="email" name="email">

<button id="submit" type="button" onclick="postData();">submit </button>



</form>



<table>
<thead>
<tr>
<th>S/N </th>
<th> Name </th>
<th>Email </th>


</tr>

</thead>



<tbody>

<tr>
    <?php $conn = new PDO("mysql:host=localhost;dbname=myschool", "root", "");
    
    $sel = $conn->prepare("select * from regajax");
    $sel->execute();
    $i=1;

   while($row = $sel->fetch(PDO::FETCH_ASSOC)){




   
    
    
    
    ?>

    <td> <?php echo $i++; ?></td>
    <td> <?php echo $row['name']; ?></td>
    <td> <?php echo $row['email']; ?></td>




</tr>
<?php }?>


</tbody>



</table>









<script src="jquery/dist/jquery.min.js">



</script>


<script>
    function postData(){

        var name = $("#name").val();
        var email = $("#email").val();

        var formData = {
            name: name,
            email: email
        }

        $.ajax({
            url: "processform.php",
            type: "post",
            data: formData,
            success: function(data){

            }
        })


    }



</script>
    
</body>

</html>