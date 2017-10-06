/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function(){
	
	var addUserForm = $("#addUser");
	
	var validator = addUserForm.validate({
		
		rules:{
			fname :{ required : true },
			email : { required : true, remote : { url : baseURL + "checkEmailExists", type :"post"} },
			password : { required : true },
			cpassword : {required : true, equalTo: "#password"},
			mobile : { required : true, digits : true },
			role : { required : true, selected : true}
		},
		messages:{
			fname :{ required : "這是必填欄位。" },
			email : { required : "這是必填欄位。", remote : "用戶名稱已被取用。" },
			password : { required : "這是必填欄位。" },
			cpassword : {required : "這是必填欄位。", equalTo: "兩次輸入的密碼不相同，請重新輸入。" },
			mobile : { required : "這是必填欄位。", digits : "此欄位不能輸入數字以外的字符。" },
			role : { required : "這是必填欄位。", selected : "請選擇其中一項。" }			
		}
	});
});
