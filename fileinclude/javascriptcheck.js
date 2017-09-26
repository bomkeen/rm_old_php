function confirm_action(theLink, msg1,msg2)
{
    // Confirmation is not required in the configuration file
    if (msg1 == '') {
        return true;
    }

    var is_confirmed = confirm(msg1 + ' :\n' + msg2);
    if (is_confirmed) {
        //theLink.href += '&is_js_confirmed=1';
    }

    return is_confirmed;
} // 

 function warning(Obj,msg){
            alert ("" + msg +"" );
            Obj.focus();						
            return false; 
 }

//---------check Empty
function IsEmpty(inputObj) { return ((inputObj.value == null) || (inputObj.value.length == 0)) }
//---------check length
function IsLength(inputObj,vLen) {
	var iLen = vLen;
    if (inputObj.value.length !=  iLen)
    { 
		return true;
	}else{
        return false;
	}
}

 //-----------check number
 function IsNumeric(sText)
{
   var ValidChars = "0123456789";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
   }


//----- check 207
 function valid_207(myform)
 {  
    frm = document.forms[myform]          
	if (frm.selectcenter[0].checked)
	{
        if (frm.zonecenter.options[frm.zonecenter.selectedIndex].value == 0 || frm.zonecenter.options[frm.zonecenter.selectedIndex].value == null){ return warning(frm.zonecenter,"โปรดเลือกศูนย์เขต") }
	}
	if (frm.selectcenter[1].checked)
	{
        if (frm.provincecenter.options[frm.provincecenter.selectedIndex].value == 0 || frm.provincecenter.options[frm.provincecenter.selectedIndex].value == null){ return warning(frm.provincecenter,"โปรดเลือกศูนย์จังหวัด") }
	}
	if (frm.selectskill[1].checked)
	{
        if (frm.skill.options[frm.skill.selectedIndex].value == 0 || frm.skill.options[frm.skill.selectedIndex].value == null){ return warning(frm.skill,"โปรดเลือกความเชี่ยวชาญ") }
	}
    return true;
  }

 function valid_202(myform)
 {  
    frm = document.forms[myform]          
    if(IsEmpty(frm.searchvalue)) return warning(frm.searchvalue,"โปรดใส่คำที่ต้องการค้นหา");  
	if (frm.time[1].checked)
	{
        if (frm.startday.options[frm.startday.selectedIndex].value == 0 || frm.startday.options[frm.startday.selectedIndex].value == null){ return warning(frm.startday,"โปรดระบุวันที่ก่อนการค้นหา") }
		if (frm.startmonth.options[frm.startmonth.selectedIndex].value == 0 || frm.startmonth.options[frm.startmonth.selectedIndex].value == null){ return warning(frm.startmonth,"โปรดระบุเดือนก่อนการค้นหา") }
		if (frm.startyear.options[frm.startyear.selectedIndex].value == 0 || frm.startyear.options[frm.startyear.selectedIndex].value == null){ return warning(frm.startyear,"โปรดระบปี พ.ศ.ก่อนการค้นหา") }
        if (frm.endday.options[frm.endday.selectedIndex].value == 0 || frm.endday.options[frm.endday.selectedIndex].value == null){ return warning(frm.endday,"โปรดระบุวันที่ก่อนการค้นหา") }
		if (frm.endmonth.options[frm.endmonth.selectedIndex].value == 0 || frm.endmonth.options[frm.endmonth.selectedIndex].value == null){ return warning(frm.endmonth,"โปรดระบุเดือนก่อนการค้นหา") }
		if (frm.endyear.options[frm.endyear.selectedIndex].value == 0 || frm.endyear.options[frm.endyear.selectedIndex].value == null){ return warning(frm.endyear,"โปรดระบปี พ.ศ.ก่อนการค้นหา") }
	}
    return true;
  }

   function valid_103(myform)
 {  
    frm = document.forms[myform]          
    if (frm.startday.options[frm.startday.selectedIndex].value == 0 || frm.startday.options[frm.startday.selectedIndex].value == null){ return warning(frm.startday,"โปรดระบุวันที่ก่อน") }
    if (frm.startmonth.options[frm.startmonth.selectedIndex].value == 0 || frm.startmonth.options[frm.startmonth.selectedIndex].value == null){ return warning(frm.startmonth,"โปรดระบุเดือนก่อน") }
	if (frm.startyear.options[frm.startyear.selectedIndex].value == 0 || frm.startyear.options[frm.startyear.selectedIndex].value == null){ return warning(frm.startyear,"โปรดระบปี พ.ศ.ก่อน") }
    if (frm.province.options[frm.province.selectedIndex].value == 0 || frm.province.options[frm.province.selectedIndex].value == null){ return warning(frm.province,"โปรดเลือกจังหวัด") }
    return true;
  }

  function valid_104(myform)
 {  
    frm = document.forms[myform]          
    if (frm.startday.options[frm.startday.selectedIndex].value == 0 || frm.startday.options[frm.startday.selectedIndex].value == null){ return warning(frm.startday,"โปรดระบุวันที่ก่อน") }
    if (frm.startmonth.options[frm.startmonth.selectedIndex].value == 0 || frm.startmonth.options[frm.startmonth.selectedIndex].value == null){ return warning(frm.startmonth,"โปรดระบุเดือนก่อน") }
	if (frm.startyear.options[frm.startyear.selectedIndex].value == 0 || frm.startyear.options[frm.startyear.selectedIndex].value == null){ return warning(frm.startyear,"โปรดระบปี พ.ศ.ก่อน") }
    return true;
  }

     function valid_105(myform)
 {  
    frm = document.forms[myform]          
    if (frm.startday.options[frm.startday.selectedIndex].value == 0 || frm.startday.options[frm.startday.selectedIndex].value == null){ return warning(frm.startday,"โปรดระบุวันที่ก่อน") }
    if (frm.startmonth.options[frm.startmonth.selectedIndex].value == 0 || frm.startmonth.options[frm.startmonth.selectedIndex].value == null){ return warning(frm.startmonth,"โปรดระบุเดือนก่อน") }
	if (frm.startyear.options[frm.startyear.selectedIndex].value == 0 || frm.startyear.options[frm.startyear.selectedIndex].value == null){ return warning(frm.startyear,"โปรดระบปี พ.ศ.ก่อน") }
    if (frm.province.options[frm.province.selectedIndex].value == 0 || frm.province.options[frm.province.selectedIndex].value == null){ return warning(frm.province,"โปรดเลือกจังหวัด") }
	if (frm.amphur.options[frm.amphur.selectedIndex].value == 0 || frm.amphur.options[frm.amphur.selectedIndex].value == null){ return warning(frm.amphur,"โปรดเลือกอำเภอ") }
    return true;
  }

   function valid_102(myform)
 {  
    frm = document.forms[myform]          
    if(IsEmpty(frm.startyear)) return warning(frm.startyear,"โปรดระบุ ปี พ.ศ. ที่ต้องการ");
	if (IsLength(frm.startyear,4)) return warning(frm.startyear,"โปรดระบุ ปี พ.ศ. ที่ต้องการ เป็นตัวเลข 4 หลัก"); 
    return true;
  }

function valid_107(myform)
 {  
    frm = document.forms[myform]    
    if (frm.province.options[frm.province.selectedIndex].value == 0 || frm.province.options[frm.province.selectedIndex].value == null){ return warning(frm.province,"โปรดเลือกจังหวัด") }
	if (frm.time[1].checked)
	 {
		   if (frm.startday.options[frm.startday.selectedIndex].value == 0 || frm.startday.options[frm.startday.selectedIndex].value == null){ return warning(frm.startday,"โปรดระบุวันที่ก่อน") }
			if (frm.startmonth.options[frm.startmonth.selectedIndex].value == 0 || frm.startmonth.options[frm.startmonth.selectedIndex].value == null){ return warning(frm.startmonth,"โปรดระบุเดือนก่อน") }
			if (frm.startyear.options[frm.startyear.selectedIndex].value == 0 || frm.startyear.options[frm.startyear.selectedIndex].value == null){ return warning(frm.startyear,"โปรดระบปี พ.ศ.ก่อน") }
			if (frm.endday.options[frm.endday.selectedIndex].value == 0 || frm.endday.options[frm.endday.selectedIndex].value == null){ return warning(frm.endday,"โปรดระบุวันที่ก่อนการค้นหา") }
			if (frm.endmonth.options[frm.endmonth.selectedIndex].value == 0 || frm.endmonth.options[frm.endmonth.selectedIndex].value == null){ return warning(frm.endmonth,"โปรดระบุเดือนก่อนการค้นหา") }
			if (frm.endyear.options[frm.endyear.selectedIndex].value == 0 || frm.endyear.options[frm.endyear.selectedIndex].value == null){ return warning(frm.endyear,"โปรดระบปี พ.ศ.ก่อนการค้นหา") }
	 }
    return true;
}