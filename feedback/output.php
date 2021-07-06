<?php 
    include('connection.php');
    $admin="Admin";
  if(strcmp($_SESSION['user'],$admin)==0){
	 
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IT-3Year</title>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        
	</head>
   <body >
   <center>
   <table class="table table-bordered" ><br>
   <tr><td rowspan="2"><img src="download.jpg"/></td>
   <td align="center"><font face="algerian" size="10"> Velammal Institute Of Technology</font> <br><font color="#e6e600" align="center">Affliated to Anna University,Approved by AICTE,New Delhi <br> "Velammal Knowledge Park",Chennai-Kolkata Highway,Panchetti,Thiruvallur-601204.</font></center></td></tr></table>
   <table class="table table-striped table-hover" border="4" cellpadding="3">
<tr><thead><th ALIGN="CENTER">FACULTY NAME</th><th ALIGN="CENTER">SUBJECT NAME</th><th ALIGN="CENTER">Q1</th><th ALIGN="CENTER">Q2</th><th ALIGN="CENTER">Q3</th><th ALIGN="CENTER">Q4</th><th ALIGN="CENTER">Q5</th><th ALIGN="CENTER">OVERALL RATING(Out of 5)</th></TR></thead>
<h4 align="center">First Term Consolidated Students Feedback Report for the Academic year 2021-2022</h4>
<h4 align="center">ASSESSMENT-I</h4>


<H6 align="left">Department/Year/Sec/Sem:IT/III/A/6</h6>


      
 
<?php  
$total=0;
             $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Malar' and criteria='q1'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r1=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Malar' and criteria='q2'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r2=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Malar' and criteria='q3'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r3=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Malar' and criteria='q4'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r4=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Malar' and criteria='q5'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r5=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Malar' ";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $total=$row['aver'];
			 }
?>

			   			 <tbody><tr><td>Mrs.Malar</td><td >Computational Intelligence</TD><TD><?php echo $r1; ?><TD><?php echo $r2; ?><TD><?php echo $r3; ?><TD><?php echo $r4; ?><TD><?php echo $r5; ?><TD><?php echo $total; ?></TR>

<?php

  
             $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Sudharson' and criteria='q1'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r1=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Sudharson' and criteria='q2'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r2=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Sudharson' and criteria='q3'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r3=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Sudharson' and criteria='q4'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r4=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Sudharson' and criteria='q5'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r5=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Sudharson' ";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $total=$row['aver'];
			 }
?>		
        <tr><td>Mr.Sudharson</td><td>Computer Graphics </TD><TD><?php echo $r1; ?><TD><?php echo $r2; ?><TD><?php echo $r3; ?><TD><?php echo $r4; ?><TD><?php echo $r5; ?><TD><?php echo $total; ?></TR>	
<?php

  
             $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Jagadish' and criteria='q1'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r1=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Jagadish' and criteria='q2'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r2=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Jagadish' and criteria='q3'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r3=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Jagadish' and criteria='q4'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r4=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Jagadish' and criteria='q5'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r5=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Jagadish' ";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $total=$row['aver'];
			 }
?>		
        <tr><td>Mr.Jagadish</td><td>Database Management System</TD><TD><?php echo $r1; ?><TD><?php echo $r2; ?><TD><?php echo $r3; ?><TD><?php echo $r4; ?><TD><?php echo $r5; ?><TD><?php echo $total; ?></TR>	
<?php

  
             $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Shanmuga Priya' and criteria='q1'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r1=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Shanmuga Priya' and criteria='q2'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r2=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Shanmuga Priya' and criteria='q3'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r3=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Shanmuga Priya' and criteria='q4'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r4=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Shanmuga Priya' and criteria='q5'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r5=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mrs.Shanmuga Priya' ";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $total=$row['aver'];
			 }
?>		
        <tr><td>Mrs.Shanmuga Priya</td><td>Software Testing</TD><TD><?php echo $r1; ?><TD><?php echo $r2; ?><TD><?php echo $r3; ?><TD><?php echo $r4; ?><TD><?php echo $r5; ?><TD><?php echo $total; ?></TR>	
<?php

  
             $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Deivendran' and criteria='q1'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r1=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Deivendran' and criteria='q2'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r2=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Deivendran' and criteria='q3'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r3=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Deivendran' and criteria='q4'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r4=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Deivendran' and criteria='q5'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r5=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Deivendran' ";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $total=$row['aver'];
			 }
?>		
        <tr><td>Mr.Deivendran</td><td>Object Oreinted Design And Analysis</TD><TD><?php echo $r1; ?><TD><?php echo $r2; ?><TD><?php echo $r3; ?><TD><?php echo $r4; ?><TD><?php echo $r5; ?><TD><?php echo $total; ?></TR>	
<?php

  
             $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Udhaya Shangar' and criteria='q1'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r1=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Udhaya Shangar' and criteria='q2'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r2=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Udhaya Shangar' and criteria='q3'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r3=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Udhaya Shangar' and criteria='q4'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r4=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Udhaya Shangar' and criteria='q5'";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $r5=$row['aver'];
			 }
			 $query="SELECT round(avg(rating),2) AS aver from it3 where faculty_name='Mr.Udhaya Shangar' ";
			 $result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
             $num_row= mysqli_num_rows($result);
             $row=mysqli_fetch_array($result);
			 if($num_row >=1){
				 $total=$row['aver'];
			 }
?>		
        <tr><td>Mr.Udhaya Shangar</td><td>Mobile Communication</TD><TD><?php echo $r1; ?></td><TD><?php echo $r2; ?></td><Td><?php echo $r3; ?><TD><?php echo $r4; ?><TD><?php echo $r5; ?></TD><td><?php echo $total; ?></td></TR>	
 </tbody></table>
<table ><b>
<TR><TD ALIGN="CENTER"><B>QNO</TD></tr>
<tr><td><b>Q1</td><td>EXPLAINS THE CONCEPT CLEARLY </td><td><b><tr><td><b>Q2</td><td>RELATES THEORETICAL COURSE CONCEPTS WITH REAL WORLD APPLICATIONS </td>	</tr>
<tr><td><b>Q3</td><td>HAS BEEN ABLE TO INCREASE MY KNOWLEDGE ON SUBJECT </td><tr><td><b>Q4</td><td>HELPING STUDENTS IN PROVIDING STUDY MATERIALS(LECTURE NOTES,QUESTION BANKS WITH ANSWER ETC)</td></tr>
<tr><td><b>Q5</td><td>CONDUCTING REGULAR SLIP TESTS</td></tr>


</table></b><p><h6 align="center">Designed and Maintained by Department of INFORMATION TECHNOLOGY</H6>
<BR>
<input type="submit" value="Print" onClick="window.print()" style="height:30px; width:100px; font-face:'Comic Sans MS'; font-size: larger; color: white; background-color: rgb(77, 144, 254); border: #808080" /> 
<a href="logout.php"><button type="submit" id="logout" class="btn btn-primary">Logout</button></a>
</body>
</html>
<?php
  }else
  {
	  header("location:login.php");
  }
?>