<?php
	require_once __DIR__ . '/vendor/autoload.php';
	
$tableend = "</tbody>
</table>";


$body_1='
	<style>
		body{

			//font-family: "garuda";

			  font-family: "freemono"; //คือ TH salaban แปลงชื่อเนื่องจาก function เดิม ดักการเพิ่มของไฟล์ font ซึ่งแก้แล้วไม่ได้


			  /* http://fordev22.com */
       		/* https://www.facebook.com/fordev22/ */

			
		}
	</style>';
$fordev22 ='
<style>
     

div{
       
    }
table {
  
   
  border-collapse: collapse;
  width: 100%;
}

td, th {
    font-size: 18px;
  border: 1px solid #AED6F1;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #AED6F1;
}

</style>


<img width="250"  src="logo_fordev22_2.png" style="vertical-align: middle;
  width: 250px;">
<h1>Php mPdf (Print Pdf) By fordev22.com</h1>
<div class="alert alert-info">
    <strong> mPdf</strong>
    ภาษา ไทย และ Eng</div>
<p></p>
<div class="table-responsive">
<table>
    <thead>
    <tr>
        <th><b>Website</b> </th>
        <th>Name</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    
    <tr>
        <td>fordev22.com</td>
        <td>Mr.fordev22</td>
        <td>ไทย
        </td>
    </tr>

    <tr>
        <td>fordev22.com</td>
        <td>Mr.fordev22</td>
        <td><a href="">Japan</a>
        </td>
    </tr>

    <tr>
        <td>fordev22.com</td>
        <td>Mr.fordev22</td>
        <td>China
        </td>
    </tr>

    <tr>
        <td>fordev22.com</td>
        <td>Mr.fordev22</td>
        <td>Brasil
        </td>
    </tr>
    </tbody>


   
</table>
<div><h3>Develop By fordev22</h3></div>
</div>

';
	
$mpdf = new mPDF();


	


//$mpdf->WriteHTML($tableh);

//$mpdf->WriteHTML($tablebody);

//$mpdf->WriteHTML($tableend);
$mpdf->WriteHTML($body_1);
$mpdf->WriteHTML($fordev22);
$mpdf->Output();
/* http://fordev22.com */
/* https://www.facebook.com/fordev22/ */
//https://monkeywebstudio.com/%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C-pdf-%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2-mpdf/
?>