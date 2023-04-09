<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./css /style.css">
    <title>Svim</title>
    <style type="text/css">
    #regiration_form fieldset:not(:first-of-type) {
      display: none;
    }
    .b1{
    float: left; height: 100px; width: 100%; margin-top: 20px;
}
.next{
    margin-top: 30px;
    float: right;
    margin-right: 30px;
}
.previous{
    margin-top: 30px;
    float: left;
    margin-left: 30px;
}

    </style>
     

</head>
<body>
    
<div class="container-fluid">
        <div class="row header">
            <div class="col-sm-2 site-logo text-center ">
                <img src="./img/logo.jpg" alt="logo">
            </div>
            <div class="col-sm-10 site-name">
                <h1 class="text-center">Shri Vaishnav Institute of Management, Indore(M.P.)</h1>
                <pre class="text-center">Approved by AICTE, New Delhi, Affiliated to DAVV, Indore and RGPV, Bhopal (M.P.)
UGC-NAAC Accredited ‘A’ Grade Institute
Scheme No.71, Gumasta Nagar, Indore-452009
Madhya Pradesh, India</pre>
                <div class="text-center">

                    <a href="./admin/index.php" class="btn btn-primary p-2 m-2 ">Admin Login</a>
                </div>

            </div>
             
        </div>
</div>

<!-- close all div -->
            <h1 class="text-center mt-3 mb-3" style="color: Red
            ;">[Application Form]</h1>
<div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
      </div>


      <form id="regiration_form" novalidate action="function.php"  method="post">
     <fieldset>
            <div class="container">
            <hr>
            <h3 class="text-center" style="color: blue;"><u>1.General Information</u></h3>
            <hr>
        <div class="recruter-details">
            
                <label><b>Post Applied For:</b></label>
                <select name="post_applied" id="post" required>
                    <option value="">Select Post</option>
                   <?php
                   echo "hello";
                        include_once('admin/db.php');
                        
                   $sql="select * from post_applied";
                   $query=mysqli_query($conn,$sql);
                   while($row=mysqli_fetch_assoc($query)){
                    ?>
                    <option value="<?php echo $row['id'] ;?>"><?php echo $row['post_name']; ?> </option>
                    <?php  }  ?>
                </select>
                <br>
                <br>
                <label><b>Applied in[Name of our Institute/College/School]:</b></label>
                <input type="text" name="applied_in" style="width
                :70%">
                </div>
               
                <div>
                <b>Reference From:</b>  
                <label style="margin-left: 20px;"><b>Job Portal</b></label>
                    <input class="form-check-input" type="checkbox" value="job portel" name="ref_from" id="flexCheckDefault"style="margin-left: 10px;">
                    <label style="margin-left: 30px;"><b>News Papper </b></label>
                    <input class="form-check-input" type="checkbox" value="news papper" name="ref_from"  id="flexCheckDefault" style="margin-left: 10px;">
                    <label style="margin-left: 30px;"><b>Other</b></label>
                    <input class="form-check-input" type="checkbox" value="other" name="ref_from" checked id="flexCheckDefault" style="margin-left: 10px;">
                </div>
               
                <div class="recruter-details">
                    <label><b>Specialization:</b></label>
                    <input type="text" name="specialization" style="width: 80%;">
                </div>
                <div>
                <p>Have you applied previously for any position in our group Institute ?</p>
                <label style="margin-left: 20px;"><b>Yes</b></label>
                <input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" id="yesCheck"
                    style="margin-left: 10px;">
                <label style="margin-left: 30px;"><b>No</b></label>
                <input class="form-check-input"  type="radio" onclick="javascript:yesnoCheck();"  id="noCheck" checked 
                    style="margin-left: 10px;">
                <div class="recruter-details" id="ifYes" style="display:none">
                    <label><b>If yes,give details:</b></label>
                    <input type="text" name="prev_applied" style="width:80%;">
                </div>
                <div id="ifNo"></div>

            </div>
          
        </div>
              </div>     
<div class="b1">
      <input type="button" name="next" class="next btn btn-outline-info" value="Next" class="next" />
                   </div>


    </fieldset> 



   <fieldset>
  <div class="container">
  <hr>
            <h3 class="text-center" style="color: blue;"><u>2.Personal Information</u></h3>
            <hr>
                    <div class="recruter-details">
                        <label><b>Full Name(In Block Letters):</b></label>
                        <input type="text" name="name" style="width: 80%;">
                        <label><b>Father Name:</b></label>
                        <input type="text" name="fname" style="width: 85%;">
                        <label><b>Mother Name:</b></label>
                        <input type="text" name="mname" style="width: 85%;">
                        <label><b>Husband Name:</b></label>
                        <input type="text" name="hname" style="width: 80%;">
                    </div>
                        <div>
                            <b>Gender:</b>  
                            <label style="margin-left: 20px;"><b>Male</b></label>
                                <input class="form-check-input" type="radio" value="male" checked name="Gender" id="flexCheckDefault"style="margin-left: 10px;">
                                <label style="margin-left: 30px;"><b>Female </b></label>
                                <input class="form-check-input" type="radio" name="Gender" value="female" id="flexCheckDefault" style="margin-left: 10px;">

                                
                               
                            </div>
                            <div style="margin-top: 10px;">
                                <label for="birthday"><b>DOB:</b></label>
                                <input type="date" id="DOB" name="DOb" style="margin-left: 30px;">
                            </div>
                            <div class="recruter-details">
                                
                                <label><b>place of Birth:</b></label>
                                <input type="text" name="place">
                                <label><b>Blood Group:</b></label>
                                <input type="text" name="blood">
                                

                            </div>
                            <div class="form-group mt-1 mb-1">
                                <label for="exampleFormControlTextarea1"><b>Present Address:</b></label>
                                <textarea class="form-control mt-2"name="pre_add" id="exampleFormControlTextarea1" rows="6" ></textarea>
                              </div>
                              <div class="recruter-details" style="margin-bottom: 100px;">
                                
                                <label><b>Phone No:</b></label>
                                <input type="text" name="phone">
                                <label><b>Mobile No:</b></label>
                                <input type="text" name="mob">
                                

                            </div>
                       </div>
                       <div class="b1">
                            <input type="button" name="previous" class="previous btn btn-outline-warning" class="previous"value="Previous" />
                            <input type="button" name="next" class="next btn btn-outline-info"class="next"value="Next"  />
                        </div>
                         
  </fieldset>  
  
  <fieldset>


    <div>
         <div class="container">
        
            <hr>
            <h3 class="text-center" style="color: blue;"><u>3.Academic Information</u></h3>
            <hr>
            <div class="input-field">
                <table class="table table-bodered" id="table-field">
                    <tr>
                        <th>Examination(s) Passed</th>
                        <th>Subject/Branch/Discipline</th>
                        <th>Year of passing</th>
                        <th>Class/Division/Grade obtained</th>
                        <th>Name of Board/University</th>
                        <th>Add/Remove</th>

                    </tr>
               

                    <tr>
                        <td><input class="form-control" type="text" name="exmpass[]" required=""></td>
                        <td><input class="form-control" type="text" name="sub[]" required=""></td>
                        <td><input class="form-control" type="text" name="yop[]" required=""></td>
                        <td><input class="form-control" type="text" name="Grade[]" required=""></td>
                        <td><input class="form-control" type="text" name="Board[]" required=""></td>
                        <td><input class="btn btn-warning" type="button" name="add" id="add" value="Add"></td>
                    </tr>
                </table>
                
            </div>
        
        
      </table>
    </div>
    </div>


  

   
    <div class="b1">
        <input type="button" name="previous" class="previous btn btn-outline-warning" class="previous"value="Previous" />
        <input type="button" name="next" class="next btn btn-outline-info"class="next"value="Next"  />
    </div>
</fieldset>


  <fieldset>

    
    <div>
        
    <div class="container">
        
            <hr>
            <h3 class="text-center" style="color: blue;"><u>4.Professional Information</u></h3>
            <hr>
            <div class="input-field">
                <table class="table table-bodered" id="table-field1">
                    <tr>
                        <th>Name of the Institution/Industry</th>
                        <th>Post Held</th>
                        <th>Duration</th>
                        <th>Sector(if in Industry)</th>
                        <th>Stream(if in Academic)</th>
                        <th>Add/Remove</th>

                    </tr>
                    

                    <tr>
                        <td><input class="form-control" type="text" name="inst_name[]" required=""></td>
                        <td><input class="form-control" type="text" name="post[]" required=""></td>
                        <td><input class="form-control" type="text" name="duration[]" required=""></td>
                        <td><input class="form-control" type="text" name="sector[]" required=""></td>
                        <td><input class="form-control" type="text" name="stream[]" required=""></td>
                        <td><input class="btn btn-warning" type="button" name="add" id="add1" value="Add"></td>
                    </tr>
                </table>
                
            </div>
        
        

        </table>
    </div>
<div class="container">
<div class="recruter-details">

    <label><b>Total Teaching Experience in P.G. Cources(in years)</b></label>
                        <input type="text" name="exp_pg" style="width: 15%;">
    <label><b>Total Teaching Experience in U.G. Cources(in years)</b></label>
    
                        <input type="text" name="exp_ug" style="width: 15%;">                
</div>
<div class="recruter-details">
    <label><b>Details of Research & Development work ,Publication ,Patents,Total Industrial Experience (in years)</b></label>
    <input type="text" name="res_dev" style="width: 15%;">

</div>
<div class="recruter-details">
    <label><b>Details of Research & Development work ,Publication ,Patents:</b></label>
    <textarea class="form-control mt-2" name="det_res_dev" id="exampleFormControlTextarea1" rows="6" ></textarea>
    

</div>

<div class="recruter-details">
    <label><b>Any other relevent information enclosed:</b></label>
    <textarea class="form-control mt-2" name="other_info" id="exampleFormControlTextarea1" rows="6" ></textarea>
    

</div>
    </div>

</div>
<div class="b1">
    <input type="button" name="previous" class="previous btn btn-outline-warning" class="previous"value="Previous" />
    <input type="button" name="next" class="next btn btn-outline-info"class="next"value="Next"  />
</div>


  </fieldset>  

  
  <fieldset>
    <div>
       
        <div class="container">
        
            <hr>
            <h3 class="text-center" style="color: blue;"><u>5.Present Employment Status</u></h3>
            <hr>
            <div class="input-field">
                <table class="table table-bodered" id="table-field2">
                    <tr>
                        <th>Post Held</th>
                        <th>Date of Appoinment</th>
                        <th>Basic Salary</th>
                        <th>DA & Other Allowances</th>
                        <th>Gross Salary</th>
                        <th>Add/Remove</th>

                    </tr>
                    

                    <tr>
                        <td><input class="form-control" type="text" name="post_held[]" required=""></td>
                        <td><input class="form-control" type="text" name="doa[]" required=""></td>
                        <td><input class="form-control" type="text" name="basic_sal[]" required=""></td>
                        <td><input class="form-control" type="text" name="da_allow[]" required=""></td>
                        <td><input class="form-control" type="text" name="gross_sal[]" required=""></td>
                        <td><input class="btn btn-warning" type="button" name="add" id="add2" value="Add"></td>
                    </tr>
                </table>
                
            </div>
        
        

        </table>
    
    </div>
<div class="container">

<div class="recruter-details">
    <label><b>Name of Present Employer (with full address):</b></label>
    <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="6" name="pre_emp" ></textarea>
</div>

<div class="recruter-details">
    <label><b>Reason of leaving present job:</b></label>
    <input type="text" name="reason_leave" style="width: 65%;">

</div>


<div class="recruter-details">
    <label><b>Expected Salary:</b></label>
    <input type="text" name="exp_sal" style="width: 65%;">

</div>
<div class="recruter-details">
    <label><b>Required Period to join the services:</b></label>
    <input type="text" name="req_per" style="width: 65%;">

</div>
<div>
    <b>Are you ready for relocate to Indore: </b>
    <label><b>Yes </b></label>
    <input class="form-check-input" type="radio" checked value="Yes" id="flexCheckDefault"style="margin-left: 10px;" name="reloc">
    <label style="margin-left: 30px;"><b>No</b></label>
    <input class="form-check-input" type="radio" value="No" id="flexCheckDefault" style="margin-left: 10px;"name="reloc">

</div>
<div class="recruter-details">
    <label><b>References(Name,Address and Contact Number of Person,not related to you):</b></label>
    <textarea class="form-control mt-2" name="reference" id="exampleFormControlTextarea1" rows="6" ></textarea>
    
</div>

</div>
</div>
<div class="b1">
    <input type="button" name="previous" class="previous btn btn-outline-warning" class="previous"value="Previous" />
    <input type="button" name="next" class="next btn btn-outline-info"class="next"value="Next"  />
</div>
  </fieldset>



  <fieldset>
<div class="container">
    <hr>
    <h1 class="text-center" style="color: red;"><u>Declaration</u></h1>
    <hr>
    <input class="form-check-input" value="dec"type="checkbox" id="flexCheckDefault" name="declared" style="margin-left: 10px;">
    <b> I hereby declare that the entries made by me in the form are true and correct to the best of my knowledge</b>
    <div class="mt-3">
        <label for="birthday"><b>Date:</b></label>
                                <input type="date" id="DOB" name="dod" style="margin-left: 30px;">
    </div>
    <div class="recruter-details">
        <label><b>Place:</b></label>
        <input type="text" name="place_od" style="width: 65%;">
    
    </div>




</div>


<div class="b1">
    <input type="button" name="previous" class="previous btn btn-outline-warning" class="previous"value="Previous" />
    
   
    <input type="submit" name="submit" class="submit btn btn-success" style="margin-top: 30px;float: right;margin-right: 30px;" value="Submit" />
</div> 
  </fieldset>
                         



</form>
<script>$(document).ready(function(){
    var current = 1,current_step,next_step,steps;
    steps = $("fieldset").length;
    $(".next").click(function(){
      current_step = $(this).closest("fieldset");
      next_step = $(this).closest("fieldset").next();
      next_step.show();
      current_step.hide();
      setProgressBar(++current);
    });
    $(".previous").click(function(){
      current_step = $(this).closest("fieldset");
      next_step = $(this).closest("fieldset").prev();
      next_step.show();
      current_step.hide();
      setProgressBar(--current);
    });
    setProgressBar(current);
    // Change progress bar action
    function setProgressBar(curStep){
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $(".progress-bar")
        .css("width",percent+"%")
        .html(percent+"%");   
    }
  });</script>


<script type="text/javascript">
    $(document).ready(function(){
        var html ='<tr><td><input class="form-control" type="text" name="exmpass[]" required=""></td><td><input class="form-control" type="text" name="sub[]" required=""></td><td><input class="form-control" type="text" name="yop[]" required=""></td><td><input class="form-control" type="text" name="Grade[]" required=""></td> <td><input class="form-control" type="text" name="Board[]" required=""></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="remove"></td></tr>'

        var x=1;
        $("#add").click(function(){
            $("#table-field").append(html);
        });
        $("#table-field").on('click','#remove',function(){
            $(this).closest('tr').remove();

        });


    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var html1 ='<tr><td><input class="form-control" type="text" name="inst_name[]" required=""></td><td><input class="form-control" type="text" name="post[]" required=""></td><td><input class="form-control" type="text" name="duration[]" required=""></td><td><input class="form-control" type="text" name="sector[]" required=""></td> <td><input class="form-control" type="text" name="stream[]" required=""></td><td><input class="btn btn-danger" type="button" name="remove" id="remove1" value="remove"></td></tr>'

        var y=1;
        $("#add1").click(function(){
            $("#table-field1").append(html1);
        });
        $("#table-field1").on('click','#remove1',function(){
            $(this).closest('tr').remove();

        });


    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var html1 ='<tr><td><input class="form-control" type="text" name="post[]" required=""></td><td><input class="form-control" type="text" name="doa[]" required=""></td><td><input class="form-control" type="text" name="basic_sal[]" required=""></td><td><input class="form-control" type="text" name="da_allow[]" required=""></td> <td><input class="form-control" type="text" name="gross_sal[]" required=""></td><td><input class="btn btn-danger" type="button" name="remove" id="remove2" value="remove"></td></tr>'

        var y=1;
        $("#add2").click(function(){
            $("#table-field2").append(html1);
        });
        $("#table-field2").on('click','#remove2',function(){
            $(this).closest('tr').remove();

        });


    });
</script>
<script type="text/javascript">
    window.onload = function() {
       document.getElementById('ifYes').style.display = 'none';
       document.getElementById('ifNo').style.display = 'none';
   }
   function yesnoCheck() {
       if (document.getElementById('yesCheck').checked) {
           document.getElementById('ifYes').style.display = 'block';
           document.getElementById('ifNo').style.display = 'none';
          
       } 
       else if(document.getElementById('noCheck').checked) {
           document.getElementById('ifNo').style.display = 'block';
           document.getElementById('ifYes').style.display = 'none';
          
      }
   }
  
   </script>
  


 







    
</body>
</html>