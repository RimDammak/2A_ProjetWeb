<?php
include '../controller/reponseC.php';
$reponseC = new ReponseC();
$id = $_GET["id"];
$reponse = $reponseC->recupererreponses($id);
?>




<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>

   <link rel="stylesheet" href="bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap-icons.css">
   <!-- Latest compiled and minified CSS -->

   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="instructor-profile.css">


   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

   <script src="https://cdn.ckeditor.com/ckeditor5/11.0.0/classic/ckeditor.js"></script>

</head>

<body>

   <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
         <a href="index.html" class="logo d-flex align-items-center">
           
            <span class="d-none d-lg-block">Site</span>
         </a>
      </div><!-- End Logo -->

      <!--  <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>-->
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto ">
         <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
               <a class="nav-link nav-icon search-bar-toggle " href="#">
                  <i class="bi bi-search"></i>
               </a>
            </li><!-- End Search Icon-->


            <li class="nav-item dropdown pe-3">

             

              
            </li><!-- End Profile Nav -->

         </ul>
      </nav><!-- End Icons Navigation -->

   </header><!-- End Header -->

   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">


         </li><!-- End Dashboard Nav -->
         <br><br>
         <li class="nav-item">


         </li><!-- End Forms Nav -->
         <br><br>
         <li class="nav-item">


         </li><!-- End Forms Nav -->


      </ul>

   </aside><!-- End Sidebar-->

   <main id="main" class="main">

      <div class="" style="width: 60rem;padding: 1rem 0rem 2rem 0rem; margin:0rem 0rem 1rem 0rem">
         <a class="add_course_button" href="">Reponses</a>
      </div>


      <section class="section dashboard">
         <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
               <div class="row">


                  <!-- Top Selling -->
                  <div class="col-9">


                     <div class="instructor-profile_courses_list">
                        <div class="course_align_v1">

                           <div class="course_align">

                              <form action="ModifRep.php?id= <?php echo $id ?>" method='POST' <table class="form-style" enctype="multipart/form-data">

                                
                                 <tr>
                                    <td>
                                       <label>
                                          Reponse <span class="required">*</span>
                                       </label>
                                    </td>
                                    <td>
                                       <input type="text" name="reponse" class="long" value="<?php echo $reponse['contenu_rep']; ?>" />
                                       <span class="error" id="errornom"></span>
                                    </td>
                                 </tr>


                                 

                                 
                        
                                 <tr>
                                    <td></td>
                                    <td>

                                       <div class="posbnt">
                                          <input class="btnf" type="submit" value="Modifier">
                                       </div>
                                       <div class="posbnt1">
                                          <input class="btnf" type="reset" value="Annuler">
                                       </div>

                                    </td>
                                 </tr>
                                 </table>
                              </form>








                           </div>


                        </div>

                        <div class="course_align">

                           <div class="course_v3">

                           </div>

                           <div class="course_button">


                           </div>


                        </div>





                     </div>





                  </div>

               </div>
            </div><!-- End Top Selling -->

         </div>
         </div><!-- End Left side columns -->


         </div>
      </section>
   </main><!-- End #main -->

   <!--
<main class=" card-body pb-0">
    <div class="instructor-profile_courses_list">
    <div style="color: black;font-size:4rem">sdjkvbhskdvbhsdbv</div>
    </div>

</main> -->




   <script src="../../assets/bootstrap/js/bootstrap.bundle.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


   <script>
      function cancel_hide(x) {
         $("#delete_button" + x).hide(0)
      }

      function delete_show(x) {
         $("#delete_button" + x).show(0)
      }
   </script>

</body>

</html>