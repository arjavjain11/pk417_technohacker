<?php
session_start();
$conn= new mysqli("localhost","root","","farmersite");
if(!isset($_SESSION['expert_email'])){
	header("location:signin.php");
   }else{
   	$expert_email = $_SESSION['expert_email'];
    $q = "select * from experts where expert_email = '$expert_email'";
    $run = mysqli_query($conn,$q);
    $row = mysqli_fetch_row($run);
    $username = $row[1];
    $userid = $row[0];
    $userimage = $row[5];
    $q = "select * from farmer_query";
    $run = mysqli_query($conn,$q);
    $row = mysqli_num_rows($run);
    $queries = $row;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="backend/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="backend/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .user-panel img {
      height: 0;
      width: 0;
    }

    .user-panel .imginfo {
      height: 50px;
      width: 50px;
    }

    .modal-header {
      border-bottom: none;
    }

    textarea {
      border: 1px solid #999999;
      width: 100%;
    }

    .query_form p {
      margin-botton: 0;
    }
    [class*=sidebar-dark-] {
    background-color: #3d3855;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="expert_dash.php" class="nav-link">Expert panel</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>

      <!-- SEARCH FORM -->
      <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->

      <h3 style="font-size: 20px; color: #fff; text-transform:  uppercase;"></h3>


      <!-- Sidebar -->
      <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="row">
            <div class="col-6 text-center">
              <?php  if($userimage == '' ){ ?>
              <img src="images/<?php echo $userimage; ?>" class="imginfo" style="border-radius: 50%;">

              <?php }else{

          }  ?>
            </div>
            <div class="col-6 d-flex">
              <h5 style="color: #fff; font-size:20px; text-transform: capitalize; align-items:center;"
                class="d-flex text-center"><?php echo $username; 
                 ?></h5>
            </div>
          </div>



        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Expert Panel                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

            </li>

            <!-- <li class="nav-item">
              <a href="home.php?farmer_input=<?php echo $userid;?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p></p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="expert_dash.php?expert_profile=<?php echo $userid;?>" class="nav-link">

                <i class="far fa-circle nav-icon"></i>
                <p>Edit Profile</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="expert_dash.php?expert_password=<?php echo $userid;?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Change password</p>
              </a>
            </li>
            <li class="nav-item mt-3">
              <a class="nav-link bg-danger text-center ml-5 mr-5" style="border-radius: 5px; text-transform:capitalize;" href="#"
                role="button" data-toggle="modal" data-target="#farm_query">query from farmer <span class="badge badge-light"><?php
                 
                  echo $queries;
                ?></span></a>
            </li>

            <li class="nav-item mt-3">
              <a class="nav-link bg-primary text-center ml-5 mr-5" style="border-radius: 5px;" href="logout.php"
                role="button">logout</a>
            </li>


          </ul>
        </nav>
      </div>

    </aside>




    <div class="content-wrapper">

      <?php

    if(isset($_GET['expert_profile'])){
      include("expert_profile.php");
          } 

          if(isset($_GET['expert_password'])){
            include("expert_password.php");
                }

                 


          ?>
    </div>







    <footer class="main-footer">
      <strong>Technohackers</strong>

      <div class="float-right d-none d-sm-inline-block">
        Farmers Helper
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <!-- Modal -->

  <!-- jQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>



  <script src="backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

  <script src="backend/dist/js/adminlte.js"></script>

  <script src="backend/dist/js/demo.js"></script>

  <script>
    var langs = [
      ['English', ['en-AU', 'Australia'],
        ['en-CA', 'Canada'],
        ['en-IN', 'India'],
        ['en-NZ', 'New Zealand'],
        ['en-ZA', 'South Africa'],
        ['en-GB', 'United Kingdom'],
        ['en-US', 'United States']
      ],
      ['Hindi', ['hi']],
      ['Bengali', ['bn']],
      ['Malayam', ['ml']],
      ['Bihari', ['bh']],
      ['Gujarati', ['gu']],
      ['Marathi', ['mr']],
      ['Punjabi', ['pa']],
      ['Tamil', ['ta']],
      ['Telegu', ['te']]
    ];

    for (var i = 0; i < langs.length; i++) {
      select_language.options[i] = new Option(langs[i][0], i);
    }
    select_language.selectedIndex = 6;
    updateCountry();
    select_dialect.selectedIndex = 6;
    //showInfo('info_start');

    function updateCountry() {
      for (var i = select_dialect.options.length - 1; i >= 0; i--) {
        select_dialect.remove(i);
      }
      var list = langs[select_language.selectedIndex];
      for (var i = 1; i < list.length; i++) {
        select_dialect.options.add(new Option(list[i][1], list[i][0]));
      }
      select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
    }

    var create_email = false;
    var final_transcript = '';
    var recognizing = false;
    var ignore_onend;
    var start_timestamp;
    if (!('webkitSpeechRecognition' in window)) {
      //upgrade();
    } else {
      start_button.style.display = 'inline-block';
      var recognition = new webkitSpeechRecognition();
      recognition.interimResults = true;

      recognition.onstart = function () {
        recognizing = true;
        //showInfo('info_speak_now');
        start_img.src = 'mic-animate.gif';
      };

      // recognition.onerror = function(event) {
      //   if (event.error == 'no-speech') {
      //     start_img.src = 'mic.gif';
      //     showInfo('info_no_speech');
      //     ignore_onend = true;
      //   }
      //   if (event.error == 'audio-capture') {
      //     start_img.src = 'mic.gif';
      //     showInfo('info_no_microphone');
      //     ignore_onend = true;
      //   }
      //   if (event.error == 'not-allowed') {
      //     if (event.timeStamp - start_timestamp < 100) {
      //      // showInfo('info_blocked');
      //     } else {
      //      // showInfo('info_denied');
      //     }
      //     ignore_onend = true;
      //   }
      // };

      recognition.onend = function () {
        recognizing = false;
        if (ignore_onend) {
          return;
        }
        start_img.src = 'mic.gif';
        if (!final_transcript) {
          //showInfo('info_start');
          return;
        }
        // showInfo('');
        if (window.getSelection) {
          window.getSelection().removeAllRanges();
          var range = document.createRange();
          range.selectNode(document.getElementById('final_span'));
          window.getSelection().addRange(range);
        }
        if (create_email) {
          create_email = false;
          createEmail();
        }
      };

      recognition.onresult = function (event) {
        var interim_transcript = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
          if (event.results[i].isFinal) {
            final_transcript += event.results[i][0].transcript;
          } else {
            interim_transcript += event.results[i][0].transcript;
          }
        }
        final_transcript = capitalize(final_transcript);
        final_span.innerHTML = linebreak(final_transcript);
       // interim_span.innerHTML = linebreak(interim_transcript);
        if (final_transcript || interim_transcript) {
          showButtons('inline-block');
        }
      };
    }

    // function upgrade() {
    //   start_button.style.visibility = 'hidden';
    //   showInfo('info_upgrade');
    // }

    var two_line = /\n\n/g;
    var one_line = /\n/g;

    function linebreak(s) {
      return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
    }

    var first_char = /\S/;

    function capitalize(s) {
      return s.replace(first_char, function (m) {
        return m.toUpperCase();
      });
    }



    function startButton(event) {
      if (recognizing) {
        recognition.stop();
        return;
      }
      final_transcript = '';
      recognition.lang = select_dialect.value;
      recognition.start();
      ignore_onend = false;
      final_span.innerHTML = '';
      //interim_span.innerHTML = '';
      start_img.src = 'mic-slash.gif';
      // showInfo('info_allow');
      showButtons('none');
      start_timestamp = event.timeStamp;
    }

    // function showInfo(s) {
    //   if (s) {
    //     for (var child = info.firstChild; child; child = child.nextSibling) {
    //       if (child.style) {
    //         child.style.display = child.id == s ? 'inline' : 'none';
    //       }
    //     }
    //     info.style.visibility = 'visible';
    //   } else {
    //     info.style.visibility = 'hidden';
    //   }
    // }

    var current_style;

    function showButtons(style) {
      if (style == current_style) {
        return;
      }
      current_style = style;

    }
    var error_q;
    $("#submit_query").click(function () {
      console.log('hi');
      var error_q = "";
      var query1 = $("#final_span").val();
      var formData = {
            'userquery': query1
            
        };

     console.log(formData);
      if (query1 == "") {
        $("#final_span").css('border-color', 'red !important');
        $("#final_span").css('border-width', '50px !important');
        error_q = error_q + 'name';
        alert('error_q');    
      }else {
        if (error_q == "") {

$.ajax({
  type: 'POST',
  url: 'query_submit.php',
  // dataType: "json",
  data: "helo",  
 
  success: function (data) {
    console.log(data);
    alert('done');
    // if (data.status == 201) {
    //   window.dataLayer = window.dataLayer || [];
    //   window.dataLayer.push({ 'event': 'query_submit' });
    //   window.dataLayer = window.dataLayer || [];
    //   window.dataLayer.push({
    //     'event': 'contact-us',
    //     'name': name,
        
    //   });
    // } else if (data.status == 601) {
    //   console.log(data.error);
    //   // alert("problem with query");
    // } else {
    // }
  }
});
} else {
 alert('There are error in the form. Please check your submissions');
}

      }
     

    });
  </script>
  <?php



?>
</body>

</html>
<?php } ?>