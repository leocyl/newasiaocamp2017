/**
 * File : editUser.js 
 * 
 * This file contain the validation of edit user form
 * 
 * @author Kishor Mali
 */
$(document).ready(function(){
	
	var editUserForm = $("#editUser");
	
	var validator = editUserForm.validate({
		
		rules:{
			fname :{ required : true },
			email : { required : true, remote : { url : baseURL + "checkEmailExists", type :"post", data : { userId : function(){ return $("#userId").val(); } } } },
			cpassword : {equalTo: "#password"},
			mobile : { required : true, digits : true },
			role : { required : true, selected : true}
		},
		messages:{
			fname :{ required : "這是必填欄位。" },
			email : { required : "這是必填欄位。", remote : "用戶名稱已被取用。" },
			cpassword : {equalTo: "兩次輸入的密碼不相同，請重新輸入。" },
			mobile : { required : "這是必填欄位。", digits : "此欄位不能輸入數字以外的字符。" },
			role : { required : "這是必填欄位。", selected : "請選擇其中一項。" }			
		}
	});
});