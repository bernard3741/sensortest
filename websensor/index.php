<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sensor Realtime</title>

    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#ceklong").load('ceklong.php');
                $("#ceklat").load('ceklat.php');
            }, 1000) ;
        });
    </script>
</head>
<body>
    <h1 style="text-align: center; margin-top: 50px">Menampilkan Sensor</h1>
   <div class="container " style="margin-top: 100px">
   <div style="display: flex;">
     <div class="card text-center" style="width: 50%">
            <div class="card-header" style="font-seize: 30px; font-weight: bold">
                Longitude
            </div>
            <div class="card-body" style="padding-top : 20px">
                <h1><span id="ceklong"></span></h1>       
            </div>
         <br>
     </div>
     <div class="card text-center" style="width: 50%">
           <div class="card-header" style="font-seize: 30px; font-weight: bold">
               Latitude
           </div>
            <div class="card-body" style="padding-top : 20px">
                <h1><span id="ceklat"></span></h1>       
         </div>
            <br>
     </div>
     
    </div> 
   
    
</body>
</html>