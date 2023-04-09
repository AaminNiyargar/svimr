<?php 
include_once('admin/db.php');
$sql="insert into personal_info (name,father_name,mother_name,husband_name,gender,dob,place_of_birth,blood_group,present_address,phone_no,mobile_no) values('" . $_POST['name'] . "','" . $_POST['fname'] . "','" . $_POST['mname'] . "','" . $_POST['hname'] . "','" . $_POST['Gender'] . "','" . $_POST['DOb'] . "','" . $_POST['place'] . "','" . $_POST['blood'] . "','" . $_POST['pre_add'] . "','" . $_POST['phone'] . "','" . $_POST['mob'] . "')";
$query=mysqli_query($conn,$sql);

if($query){
    
    $personal_info_id=mysqli_insert_id($conn);
    
    
}
else{
    mysqli_error($conn);
}


$sql2="insert into general_info(post_id,applied_in,reference,specialization,priviously_applied,personal_info_id) values('" . $_POST['post_applied'] . "','" . $_POST['applied_in'] . "','" . $_POST['ref_from'] . "','" . $_POST['specialization'] . "','" . $_POST['prev_applied'] . "',$personal_info_id)";
$query2=mysqli_query($conn,$sql2);

if($query2){
    
   echo "inserted";
    
    
}
else{
    mysqli_error($conn);
}

for($a=0; $a<count($_POST['exmpass']);$a++){
$sql="insert into academic_info (examination_passed,subject,yop,grade,board,personal_info_id) values('" . $_POST['exmpass'][$a] . "','" . $_POST['sub'][$a] . "','" . $_POST['yop'][$a] . "','" . $_POST['Grade'][$a] . "','" . $_POST['Board'][$a] . "',$personal_info_id)";
mysqli_query($conn,$sql);

}
for($b=0; $b<count($_POST['inst_name']);$b++){
    $sql1="insert into professional_info (institution_name,post,duration,sector,stream,personal_info_id) values('" . $_POST['inst_name'][$b] . "','" . $_POST['post'][$b] . "','" . $_POST['duration'][$b] . "','" . $_POST['sector'][$b] . "','" . $_POST['stream'][$b] . "',$personal_info_id)";
    mysqli_query($conn,$sql1);
    
    }
        
    $sql3="insert into professional_info2(personal_info_id,exp_pg,exp_ug,r_d,d_r_d,rev_info) values($personal_info_id,'" . $_POST['exp_pg'] . "','" . $_POST['exp_ug'] . "','" . $_POST['res_dev'] . "','" . $_POST['det_res_dev'] . "','" . $_POST['other_info'] . "')";
    $query3=mysqli_query($conn,$sql3);   
    
    
    
    for($b=0; $b<count($_POST['post_held']);$b++){
        $sql1="insert into present_emp_info (post,doa,basic_sal,da_allowence,gross_sal,personal_info_id) values('" . $_POST['post_held'][$b] . "','" . $_POST['doa'][$b] . "','" . $_POST['duration'][$b] . "','" . $_POST['basic_sal'][$b] . "','" . $_POST['da_allow'][$b] . "',$personal_info_id)";
        mysqli_query($conn,$sql1);
        
        }
        $sql4="insert into present_emp_info2(personal_info_id,name,reson_leaving,exp_sal,req_period,realocate,ref) values($personal_info_id,'" . $_POST['pre_emp'] . "','" . $_POST['reason_leave'] . "','" . $_POST['exp_sal'] . "','" . $_POST['req_per'] . "','" . $_POST['reloc'] . "','" . $_POST['reference'] . "')";
    $query4=mysqli_query($conn,$sql4);  

echo $_POST['declared'];
    $sql5="insert into delcaration(date,place,declared,personal_info_id) values('" . $_POST['dod'] . "','" . $_POST['place_od'] . "','" . $_POST['declared'] . "',$personal_info_id)";
    $query5=mysqli_query($conn,$sql5);  


?>