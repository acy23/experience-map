<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        footer {
            background-color: #15132B;
            color: white;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .box {
            flex: 1;
            max-width: 300px;
            margin: 10px;
            padding: 20px;
            text-align: left;
            background-color: #1F1D38;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .box img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 15px;
        }

        .copyright {
            margin-top: 10px;
            padding: 5px;
            background-color: #15132B;
            text-align: center;
            color: white;
            position: relative;
           
        }

        .heart-icon {
            color: #FF5454;
            margin-right: 5px;
        }

        p {
        margin-top :20px;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    </style>
</head>
<body>

    

    <footer>
        <div class="box"> 
            <img src="assets/images/teknosa.png" >
            <p>Çalışan sayısı: </p>
            <p id="teknosaCount">Yükleniyor...</p>
            
        </div>
        <div class="box">
        <img src="assets/images/mediam.png" style="padding-bottom: 12px;">
            <p>Çalışan sayısı: </p>
            <p id="mediamarktCount">Yükleniyor...</p>
            
        </div>
        <div class="box">
        <img src="assets/images/logo.png" >
          
            
        </div>
    </footer>

    <div class="copyright">
        
        <p>&copy; 2024 <a href="https://ermadagroup.com" target="_blank"><i class="fas fa-heart heart-icon"></a>Red Software</i> Tüm Hakları Saklıdır.</p>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<script>
      function updateEmployeeCount(storeId, url) {
        $.ajax({
          url: url,
          dataType: 'json',
          success: function(data) {
            $('#' + storeId + 'Count').text(data.count);
          },
          error: function(error) {
            console.error('Error fetching employee count:', error);
            $('#' + storeId + 'Count').text('Error');
          }
        });
      }

      updateEmployeeCount('teknosa', 'getEmployeesInTeknosa.php');
      updateEmployeeCount('mediamarkt', 'getEmployeesInMediaMarkt.php');

    </script>

</html>
