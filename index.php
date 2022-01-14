<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lighthouse Reporter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" class="file" id="file" accept=".json">
        <button type="submit" class="Upload" id="upload" name="submit">Upload</button>
    </form>
     
   <div class="table-responsive">
       <h1>Information</h1>
       <br/>

       <table class="table table-bordered table-striped" id ="information-table">
           <tr>
               <th>Website Name</th>
               <th>Report time</th>
               <th>Accessibility</th>
               <th>Performance</th>
               <th>SEO</th>
               <th>PWA</th>
           </tr>

       </table>
   </div>   
   <script src="main.js"></script> 
</body>
</html>

<script>
        $(document).ready(function(){
            $.getJSON("www.flashbynight.com.json",function(data){
                var information = '';
                $.each(data,function(key,value){
                    information +='<tr>';
                    information +='<td>'+value.website+'<td>';
                    information +='<td>'+Now()+'<td>';
                    information +='<td>'+value.accessibility+'<td>';
                    information +='<td>'+value.performance+'<td>';
                    information +='<td>'+value.seo+'<td>';
                    information +='<td>'+value.pwa+'<td>';
                    information +='</tr>';
                });
                $('#information-table').append(infromation);
                  
            });

        });
</script>