<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
        <link rel='stylesheet' type='text/css' href='css/menu.css' />
        <script src='js/jquery.min.js'></script>
        <script type='text/javascript' src='js/menu_jquery.js'></script>
    </head>
    <body>
    <CENTER>
        <A HREF="body.php" target="center">
            <IMG SRC="img/logo.gif" WIDTH="200" HEIGHT="80" BORDER="0">
        </A>
    </CENTER>
    <div id='cssmenu'>
        <ul>
            <li class='active'><a href='risk_add/risk_add.php' target="center"><span>รายงานความเสี่ยง</a></li>
            <!--<li class='active'><a href='risk_view_calendar.php' target="center"><span>Calendar Viwe</span></a></li>-->
            <li class='has-sub'><a href='#' target="center"><span>Chart report</span></a>
                <ul>
                    <li class='active'><a href='./all_report/all_dep.php' target="center"><span>แยกตามแผนกที่เกิด</span></a> </li>
                    <li class='active'><a href='./all_report/all_dep_add.php' target="center"><span>แยกตามแผนกที่รายงาน</span></a> </li>
                </ul>


            </li>
            <li class='has-sub'><a href='#' target="#"><span>แก้ไขความเสี่ยง</span></a>
                <ul>
                    <li class='active'><a href='./sd/dep_must_review.php' target="center"><span>ความเสี่ยงแผนก</span></a> </li>
                    <li class='active'><a href='./sd/team_must_review.php' target="center"><span>ความเสี่ยงทีม</span></a> </li>
                </ul>
            </li>
            <li class='has-sub'><a href='' target="center"><span>ระบบรายงาน</span></a>
                <ul>	
                    <li 
                        class='active'><a href='./sd/custom_report.php' target="center"><span>Custom report</span></a>
                    </li>
                    <li 
                        class='active'><a href='./sd/person_risk.php' target="center"><span>ความเสี่ยงที่ผู้ Login รายงาน</span></a>
                    </li>
                    <li 
                        class='active'><a href='./sd/person_in_dep.php' target="center"><span>บุคคลในแผนกเป็นผู้รายงาน</span></a>
                    </li>
                    <li 
                        class='active'><a href='./sd/dep_risk.php' target="center"><span>ความเสี่ยงของแผนก</span></a>
                    </li>
                    <li 
                        class='active'><a href='./sd/team_risk.php' target="center"><span>ความเสี่ยงของทีม</span></a>
                    </li>
                    <li 
                        class='active'><a href='./sd/matrix.php' target="center"><span>Matrix Report</span></a>
                    </li>


                </ul>
            <li class='has-sub'><a href='#' target="#"><span>รายงานผู้บริหารความเสี่ยง</span></a>
                <ul>
                <!-- <li class='active'><a href='./manager_risk/d1_d2_sum.php' target="center"><span>��§ҹ��ػ����Ţ</span></a> </li> -->
                    <li class='active'><a href='./manager/manager_all.php' target="center"><span>ความเสี่ยงทั้งหมด</span></a> </li>
                    <li class='active'><a href='./manager_risk/d1_d2_clinic.php' target="center"><span>รายงานคลินิค</span></a> </li>
                    <li class='active'><a href='./manager_risk/d1_d2_risk_pro.php' target="center"><span>รายงานโปรแกรมความเสี่ยง</span></a> </li>
                    <li class='active'><a href='./manager_risk/d1_d2_system.php' target="center"><span>รายงานระบบ</span></a> </li>
                    <li class='active'><a href='./manager_risk/d1_d2_source_code.php' target="center"><span>รายงานแหล่งที่มา</span></a> </li>
                    <li class='active'><a href='./manager_risk/d1_d2_ward.php' target="center"><span>หน่วยงานรายงาน</span></a> </li>
                    <li class='active'><a href='./manager_risk/d1_d2_wardedit.php' target="center"><span>หน่วยงานแก้ไข</span></a> </li>
                    <li class='active'><a href='./manager_risk/d1_d2_review.php' target="center"><span>รายงานการทบทวน</span></a> </li>
                    <li class='active'><a href='./manager_risk/d1_d2_reborn.php' target="center"><span>ลักษณะการเกิด</span></a> </li>
                    <li class='active'><a href='./manager_risk/d1_d2_follow.php' target="center"><span>ลักษณะการติดตาม</span></a> </li>
                    <li 
                        class='active'><a href='./manager_risk/risk_boss.php' target="center"><span>รายงานคลินิคเฝ้าระวัง</span></a>
                    </li>

                </ul>
            </li>

            </li>
            <li class='has-sub'><a href='#' target="#"><span>ข้อมูลพื้นฐาน</span></a>
                <ul>
                    <li class='active'><a href='user.php' target="center"><span>ข้อมูลผู้ใช้งาน</span></a> </li>
                </ul>
                <ul>
                    <li class='active'><a href='AdminDepartment.php' target="center"><span>รายชื่อแผนก</span></a> </li>
                </ul>
            </li>
            <li class='active'><a href='./index.php' target="#"><span>Logout</span></a></li>
        </ul>
    </div>

</body>

</html>