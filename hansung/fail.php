<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
  $na = $_POST['txtStuKorName'];
  $no = $_POST['txtSuhumNo'];
?>

<script>
var requiredfrom = "process.php";
if (document.referrer.indexOf(requiredfrom) == -1) {
	window.location="/error/403.html";
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
		<div id="wrap">
			<table width="100%">
				<tbody>
					<tr>
						<td style="width:190px">
							<img id="LogoIMG" width="190" height="50" src="./files/9240.gif" alt="logo">
						</td>
						<td style="text-align:left">
							<h3>2023학년도 신입생 입학전형 소집면접 대상자 확인</h3>
						</td>
					</tr>
				</tbody>
			</table>
			<div id="cont">
				<div class="cont_in">
					<!--조회결과-->
					<div id="Cpage">
						<p class="only_txt" style="text-align: center">
						</p>
						<h2>
							<font color="black">한성과학고등학교 2023학년도 신입생 입학전형</font>
						</h2><br>
						<h1>소집면접 대상자 발표</h1>
						<p></p>
						<hr>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_list">
							<tbody>
								<tr>
									<th>이름</th>
									<th>수험번호</th>
									<th>소집면접 대상자</th>
								</tr>
								<tr>
									<td><?php echo $na ?></td>
									<td><?php echo $no ?></td>
									<td>불합격</td>
								</tr>
							</tbody>
						</table>
						<hr>
						<p class="only_txt" style="text-align: left">
							<span class="fc_blue_02"><span style="color:blue">안타깝게도 제한된 모집인원으로 인하여<br>
									귀하의 우수한 능력에도 불구하고 소집면접 대상자로 선정되지 않았습니다.<br>
									지원해 주셔서 감사합니다.</span></span>
						</p>
						<hr>
						<p class="btn_bottom_center">
							<a href="home.php">
								<img src="./files/btn_search_again.gif" alt="다시 조회하기" onclick="javascript:history.back(-1);"></a>
							<span class="nbsp">
								<a href="/index.html">
									<img src="./files/btn_close.gif" alt="닫기"
										onclick="javascript:window.close();"></a></span>
						</p>
					</div>
					<!--조회결과-->
				</div>
			</div>
		</div>


</body>

</html>