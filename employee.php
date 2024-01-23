<?php 
  include("database.php");
  session_start();
  //echo $_SESSION["user_email"];
  if (!isset($_SESSION["user_email"])) {
    header("Location: login.php");
    exit();
  }

  $employeeData = null;  // Variable to store employee data

  if (isset($_GET['id'])) {
      // Sanitize and validate the id parameter
      $id = $mysqli->real_escape_string($_GET['id']);
  
      // Perform your database query with the id parameter
      $query = "SELECT * FROM employees WHERE id = '$id'";
      $result = $mysqli->query($query);
  
      // Check if the query was successful and fetch the data
      if ($result && $result->num_rows > 0) {
          $employeeData = $result->fetch_assoc();
      } else {
          // Handle query error or no data found
          echo json_encode(['error' => $mysqli->error]);
      }
  } else {
      // No id parameter provided
      echo json_encode(['error' => 'No id parameter provided']);
      header("Location: index.php");
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Experience Ajans Çalışan Uygulaması - Profil</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <!-- SVG Türkiye Haritası -->
    <link href="css/svg-turkiye-haritasi.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .gradient-custom {
        /* fallback for old browsers */
        background: #f6d365;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
  </head>
  <body>
    <header>
        <div style="padding: 0 20px 20px 20px;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Experience Ajans</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <!-- Keep comments -->
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Anasayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Çalışan ekle</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Çıkış yap</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0" style="width: fit-content;">
                    <div class="col-md-4 gradient-custom text-center text-white"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <img src="assets/images/user.png"
                        alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                    <h5><?php echo $employeeData['first_name'] ?></h5>
                    <p>Yazılım Mühendisi</p>
                    <i class="far fa-edit mb-5"></i>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body p-4">
                        <h6>Çalışan Bilgisi</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <h6>Ad</h6>
                                <p class="text-muted"><?php echo $employeeData['first_name'] ?></p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Soyad</h6>
                                <p class="text-muted"><?php echo $employeeData['last_name'] ?></p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Telefon Numarası</h6>
                                <p class="text-muted"><?php echo $employeeData['phone_number'] ?></p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Şehir</h6>
                                <p class="text-muted"><?php echo $employeeData['city'] ?></p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>İşe Başlangıç Tarihi</h6>
                                <p class="text-muted"><?php echo $employeeData['hire_date'] ?></p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Full/Part</h6>
                                <p class="text-muted"><?php echo $employeeData['work_type'] ?></p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Toplam Çalışma Günü</h6>
                                <p class="text-muted"><?php echo $employeeData['total_worked_day'] ?></p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>12.00-21.00 Arası Çalışma</h6>
                                <p class="text-muted"><?php echo $employeeData['is_twelve_nine_work'] == 1 ? 'Evet' : 'Hayır'; ?></p>
                            </div>
                        </div>
                        <h6>Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1" style="overflow-wrap: break-word;">
                            <div style="margin-left: 15px;">
                                <p class="text-muted" style="">
                                    <?php echo $employeeData['information'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS (Popper.js is required for some Bootstrap components) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            var id = 2; // Replace with the actual id you want to fetch

            // Make an AJAX request to get employee data with the id parameter
            $.ajax({
                url: 'getEmployeeById.php',
                method: 'GET',
                data: { id: id }, // Pass id as a parameter
                dataType: 'json',
                success: function (data) {
                    // Update the HTML with employee data
                    updateEmployeeData(data);
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching employee data:', error);
                }
            });

            // Function to update HTML with employee data
            function updateEmployeeData(data) {
                var employeeDataContainer = $('#employee-data-container');

                // Clear existing content
                employeeDataContainer.empty();

                // Loop through the employee data and append it to the container
                data.forEach(function (employee) {
                    var html = `
                        <h6>Email</h6>
                        <p class="text-muted">${employee.first_name}</p>
                        <h6>Phone</h6>
                        <p class="text-muted">${employee.phone_number}</p>
                        <h6>Projects</h6>
                        <p class="text-muted">${employee.city}</p>
                        <!-- Add more fields as needed -->
                    `;

                    // Append the HTML to the container
                    employeeDataContainer.append(html);
                });
            }
        });
    </script>

  </body>


</html>