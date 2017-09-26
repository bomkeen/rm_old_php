<?ob_start()?>
<?php

			require_once "../phpexcel/class.writeexcel_workbook.inc.php";
            require_once "../phpexcel/class.writeexcel_worksheet.inc.php";
            $token = md5(uniqid(rand(), true)); 
            $fname= "$token.xls";
            $workbook =& new writeexcel_workbook($fname);

            $worksheet =& $workbook->addworksheet("Print Out");
            $worksheet->set_margin_right(0.50);
            $worksheet->set_margin_bottom(1.10);

            ## Set Format  ##
            $xlscelldesc_header =& $workbook->addformat();
            $xlscelldesc_header->set_font('Angsana New');
            $xlscelldesc_header->set_size(14);
            $xlscelldesc_header->set_color('black');
            $xlscelldesc_header->set_bold(1);
            $xlscelldesc_header->set_text_v_align(1);
            $xlscelldesc_header->set_merge(1);

            $xlsCellDesc =& $workbook->addformat();
            $xlsCellDesc->set_font('Angsana New');
            $xlsCellDesc->set_size(14);
            $xlsCellDesc->set_color('black');
            $xlsCellDesc->set_bold(1);
            $xlsCellDesc->set_align('left');
            $xlsCellDesc->set_text_v_align(1);
            ## End of Set Format ##

            ## Set Column Width & Height  กำหนดความกว้างของ Cell
            //$worksheet->set_column('A:B', 2);
            //$worksheet->set_column('B:C', 4);
            //$worksheet->set_column('C:D',10);
            //$worksheet->set_column('D:E', 10);
            //$worksheet->set_column('E:F', 10);
            //$worksheet->set_column('F:G', 12);
            $celldesc_h = 16.50;

            ## Writing Data  เพิ่มข้อมูลลงใน Cellง
            $worksheet->write_blank(A1,$xlscelldesc_header);
            $worksheet->write(B1,รายงานความเสี่ยงที่ถูกรายงานรายบุคคล);
            $worksheet->write_blank(C1,$xlscelldesc_header);
            $worksheet->write_blank(D1,$xlscelldesc_header);
            $worksheet->write_blank(E1,$xlscelldesc_header);
            $worksheet->write_blank(F1,$xlscelldesc_header);
            $worksheet->write_blank(G1,$xlscelldesc_header);
			$worksheet->write_blank(H1,$xlscelldesc_header);
		    $worksheet->write_blank(I1,$xlscelldesc_header);
			$worksheet->write_blank(J1,$xlscelldesc_header);
			$worksheet->write_blank(K1,$xlscelldesc_header);
			$worksheet->write_blank(L1,$xlscelldesc_header);
			$worksheet->write_blank(M1,$xlscelldesc_header);
			$worksheet->write_blank(N1,$xlscelldesc_header); 
			$worksheet->write_blank(O1,$xlscelldesc_header);
			$worksheet->write_blank(P1,$xlscelldesc_header);
			$worksheet->write_blank(Q1,$xlscelldesc_header);
			$worksheet->write_blank(R1,$xlscelldesc_header);
           
			# กำหนดความสูงของ Cell
            $worksheet->set_row(1, $celldesc_h); 
            $worksheet->set_row(2, $celldesc_h);
            $worksheet->set_row(3, $celldesc_h);
            $worksheet->set_row(4, $celldesc_h);
            $worksheet->set_row(5, $celldesc_h);
            
            $worksheet->write(B3,ลำดับ ); 
            $worksheet->write(C3,วันที่ );
            $worksheet->write(D3,Pro_risk_name);
			$worksheet->write(E3,Prorisk_Detail_name);
			$worksheet->write(F3,Prorisk_sub_Detail_name);
			$worksheet->write(G3,Clinic);
			$worksheet->write(H3,Severity);
			$worksheet->write(I3,รายละเอียด);
			$worksheet->write(J3,จำนวน);
			$worksheet->write(K3,หน่วยงานที่รายงาน);
			$worksheet->write(L3,จุดที่เกิดปัญหา);
			$worksheet->write(M3,Method);
			$worksheet->write(N3,สถานะการติดตาม);
			$worksheet->write(O3,ผู้รายงาน);
			$worksheet->write(P3,System_name);
			$worksheet->write(Q3,ที่มาของความเสี่ยง);
			$worksheet->write(R3,วิธีการทบทวน);

			$worksheet->write(S3,ลักษณะการเกิด);
			$worksheet->write(T3,รายละเอียดการทบทวน);
			$worksheet->write(U3,วันที่แก้ไขล่าสุด);
			$worksheet->write(V3,วันที่ทบทวน);
			$worksheet->write(W3,ผู้แก้ไขความเสี่ยง);
			$worksheet->write(X3,Severity_date);
			
			       
            $xlsRow = 4;

            # ตรงนี้คือดึงข้อมูลจาก mysql มาใส่ใน Cell
			include '../function/connect.php';
			if (!$connect=mysql_connect($hostname,$user,$password)){echo 'Could not connect to mysql'; exit;}
			$result=mysql_db_query($dbname,"SELECT 
			r.`date`
			,pr.pro_risk_name
			,pd.prorisk_detail_name
			,prorisk_sub_detail_name
			,c.clinic_name
			,r.severity
			,r.detail_prob
			,r.numlevel
			,cm.ward as ward
			,cr.ward as wardedit_name
			,r.method
			,f.follow_name
			,p.namedepart as person_name
			,sy.system_name
			,sc.source_code_name
			,rw.review_name
			,rb.reborn_name
			,r.detail_review
			,r.edit_date
			,r.reborn_date
			,p1.namedepart AS edit_name
			,r.severity_date
 FROM
register_risk r
left outer join proriskdetail pd on pd.id=r.prorisk_detail_id
left outer join pro_risk pr on pr.pro_risk_id=pd.pro_risk_id
left outer join prorisk_sub_detail ps on ps.id=r.prorisk_sub_detail_id
left outer join clinic_risk c on c.clinic_id = r.clinic_id
left outer join code_complaint cm on cm.ward_id= r.ward_id
left outer join code_complaint cr on cr.ward_id= r.wardedit_id
left outer join tracking_code_fix f on f.follow_id=r.follow_id
left outer join pd_depart p on p.id=r.person_id
left outer join pd_depart p1 on p1.id=r.person_edit
left outer join review rw on rw.review_id = r.review_id
left outer join system sy on sy.system_id = r.system_id
left outer join reborn rb on rb.reborn_id = r.reborn_id
left outer join source_code sc on sc.source_code_id = r.source_code_id
 where  r.`date` between '$startdate'and'$enddate' and r.ward_id like '$ward_id' and r.wardedit_id like '$wardedit_id' and r.person_id like '$person_id'  ") 
or die ('data retrieval broke - '.mysql_error());
                while(list($r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10,$r11,$r12,$r13,$r14,$r15,$r16,$r17,$r18,$r19,$r20,$r21,$r22)=mysql_fetch_row($result)) {
                    ++$i;
                        $worksheet->set_row($xlsRow, 19.80);
                        $worksheet->write("B$xlsRow", iconv('UTF-8','TIS-620',$i), $xlsCellDesc);
                        $worksheet->write("C$xlsRow", iconv('UTF-8','TIS-620',$r1), $xlsCellDesc); 
						$worksheet->write("D$xlsRow", iconv('TIS-620','TIS-620',$r2), $xlsCellDesc);
					   	$worksheet->write("E$xlsRow", iconv('TIS-620','TIS-620',$r3), $xlsCellDesc);
						$worksheet->write("F$xlsRow", iconv('TIS-620','TIS-620',$r4), $xlsCellDesc);
						$worksheet->write("G$xlsRow", iconv('TIS-620','TIS-620',$r5), $xlsCellDesc);
						$worksheet->write("H$xlsRow", iconv('TIS-620','TIS-620',$r6), $xlsCellDesc);
						$worksheet->write("I$xlsRow", iconv('TIS-620','TIS-620',$r7), $xlsCellDesc);
						$worksheet->write("J$xlsRow", iconv('TIS-620','TIS-620',$r8), $xlsCellDesc);
						$worksheet->write("K$xlsRow", iconv('TIS-620','TIS-620',$r9), $xlsCellDesc);
						$worksheet->write("L$xlsRow", iconv('TIS-620','TIS-620',$r10), $xlsCellDesc);
						$worksheet->write("M$xlsRow", iconv('TIS-620','TIS-620',$r11), $xlsCellDesc);
						$worksheet->write("N$xlsRow", iconv('TIS-620','TIS-620',$r12), $xlsCellDesc);
						$worksheet->write("O$xlsRow", iconv('TIS-620','TIS-620',$r13), $xlsCellDesc);
						$worksheet->write("P$xlsRow", iconv('TIS-620','TIS-620',$r14), $xlsCellDesc);
						$worksheet->write("Q$xlsRow", iconv('TIS-620','TIS-620',$r15), $xlsCellDesc);
						$worksheet->write("R$xlsRow", iconv('TIS-620','TIS-620',$r16), $xlsCellDesc);

						$worksheet->write("S$xlsRow", iconv('TIS-620','TIS-620',$r17), $xlsCellDesc);
						$worksheet->write("T$xlsRow", iconv('TIS-620','TIS-620',$r18), $xlsCellDesc);
						$worksheet->write("U$xlsRow", iconv('TIS-620','TIS-620',$r19), $xlsCellDesc);
						$worksheet->write("V$xlsRow", iconv('UTF-8','TIS-620',$r20), $xlsCellDesc);
						$worksheet->write("W$xlsRow", iconv('TIS-620','TIS-620',$r21), $xlsCellDesc);
						$worksheet->write("X$xlsRow", iconv('UTF-8','TIS-620',$r22), $xlsCellDesc);

                      
                $xlsRow++;
                }

            # เสร็จแล้วก็ส่งไฟล์ไปยัง Browser ครับแค่นี้ก็เสร็จแล้ว
            $workbook->close();
              
				header("Pragma: public");
                header("Expires: 0");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
                header("Content-Type: application/force-download");
                header("Content-Type: application/octet-stream");
                header("Content-Type: application/download");
                header("Content-Disposition: attachment; filename=".basename("ความเสี่ยงที่ผู้loginเป็นผู้รยางาน.xls").";");
                header("Content-Transfer-Encoding: binary ");
                header("Content-Length: ".filesize($fname));
                readfile($fname); 
                unlink($fname);
                exit();

?>