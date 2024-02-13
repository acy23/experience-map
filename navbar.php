<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience Ajans</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Your existing styles here */

        /* Updated Navbar styles */
        .nav {
            background-color: #15132B;
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .nav div.container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav div.logo a {
            text-decoration: none;
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
        }

        .navlinks {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navlinks li {
            margin-right: 20px;
        }

        .navlinks li a {
            text-decoration: none;
            color: #fff;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .navlinks li a:hover {
            color: #dad2bc;
        }

        .navTrigger {
            display: none;
            cursor: pointer;
            font-size: 20px;
        }
		/* Kullanıcı bilgisi için yeni stiller ekleyin */
			.user-info {
				display: flex;
				align-items: center;
			}

			.user-details {
				display: flex;
				align-items: center;
			}

			.user-avatar img {
				width: 55px; /* Sabit genişlik */
				height: 55px; /* Sabit yükseklik */
				border-radius: 50%; /* Daire şeklinde yapın */
			}

			.user-text {
				margin-left: 10px;
			}

			.user-name {
				color: #fff;
				font-size: 1.2rem;
				font-weight: bold;
			}

			.user-role {
				color: #aaa; /* Veya istediğiniz renk */
				font-size: 0.9rem;
			}


        @media screen and (max-width: 768px) {
            .navlinks {
                display: none;
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: #fff;
            }

            .navlinks.show_list {
                display: flex;
            }

            .navlinks li {
                margin: 0;
                text-align: center;
                padding: 15px;
                border-bottom: 1px solid #444;
            }

            .navTrigger {
                display: block;
            }

			
        }
    </style>
</head>
<body>

    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="index.php">Experience Ajans</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                   
                    <li><a href="addemployee.php"><i class="fas fa-user-plus"></i> Çalışan Ekle</a></li>
                    <!-- <li><a href="rapor-gonder.php"><i class="fas fa-file-alt"></i> Rapor Gönder</a></li> -->
					<button type="button" class="btn btn-outline-success" style="font-size: 15px;" onclick="downloadExcel()">
                        <i class="fas fa-download"></i> Rapor İndir
                    </button>
                    
                </ul>
            </div>
			
			<div class="user-info">
					<div class="user-details">
						<span class="user-avatar"><img src="assets/images/avatar.png" alt="Kullanıcı Avatarı"></span>
						<div class="user-text">
							<span class="user-name"><?php echo $_SESSION["username"] ?></span>
							<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
						</div>
					</div>
				<span class="navTrigger">
					<i class="fas fa-bars"></i>
				</span>
            </div>
        </div>
    </nav>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $('.navTrigger').click(function () {
            $(this).toggleClass('active');
            $("#mainListDiv").toggleClass("show_list");
        });

        $(window).scroll(function () {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
</body>
</html>
