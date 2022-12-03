<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<script>
	//form 아이디 추가하고 조회하기 버튼 img로 바꾸기. searchsubmit document.frmSearch.submit() 하기
function SearchSubmit(){
    var TRName_ = 'True';
    var TRSuhum_ = 'True';
    var TRSSN_ = 'False';
    
    //이름입력 확인
    if(TRName_!="False"){
        if(document.frmSearch.txtStuKorName.value == "" ){		
           alert('이름을 입력해 주세요');
	       document.frmSearch.txtStuKorName.focus();
           return false;
        }
    }
    //수험번호입력 확인
    if(TRSuhum_!="False"){
        if(document.frmSearch.txtSuhumNo.value == "" ){		
           alert('수험번호를 입력해 주세요');
	       document.frmSearch.txtSuhumNo.focus();
           return false;
        }
    }
	document.frmSearch.submit()
}

</script>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>
		합격자발표
	</title>
	
	<link rel="STYLESHEET" type="text/css" href="./files/UnivPassStyle.css">
</head>

<link rel="icon" href="./favicon.png">

<body class="vsc-initialized">
	<form method="post" name = "frmSearch" id = "frmSearch" action="process.php">
		<div id="wrap">
			<table width="100%">
				<tbody>
					<tr>
						<td style="width:190px">
							<img id="LogoIMG" width="190" height="50" src="./files/9240.gif" alt="logo">
						</td>
						<td style="text-align:left">
							<h3>2023학년도 한성과학고등학교 소집면접 대상자 확인</h3>
						</td>
					</tr>
				</tbody>
			</table>
			<div id="cont">
				<div class="cont_in">
					<hr>
					<div id="Ipage">
						<p class="only_txt" style="text-align: center">
						</p>
						<h2>
							<font color="black">2023학년도 한성과학고등학교</font>
						</h2><br>
						<h1>신입생 소집 면접 대상자 발표</h1>
						<p></p>
						<hr>
						<hr>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_list">
							<colgroup>
								<col width="150px">
								<col>
							</colgroup>

							<tbody>
								<tr id="TRName">
									<th>성&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;명</th>
									<td class="al_left"><input type="text" id="txtStuKorName" name="txtStuKorName"
											size="20" maxlength="20" class="in_gray" style="ime-mode: active"></td>
								</tr>

								<tr id="TRSuhum">
									<th>수험번호</th>
									<td class="al_left"><input type="text" id="txtSuhumNo" name="txtSuhumNo" size="20"
											maxlength="20" class="in_gray"></td>
								</tr>

							</tbody>
						</table>
						<hr>
						<p class="only_txt" style="text-align: left">
							성명, 수험번호 로그인 후에 확인 가능합니다.
						</p>
						<hr>
						<hr>
						<p class="btn_bottom_center">
							<img onclick="SearchSubmit();" src="./files/btn_search.gif" alt="조회하기">
						</p>
					</div>
					<!--로그인-->
					<!--조회결과-->
					
					<!--조회결과-->
				</div>
			</div>
		</div>
	</form>



</body>

</html>