<HTML>
<HEAD>
  <TITLE>파일 업로드 테스트</TITLE>
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY bgcolor="#FFFFFF" text="#000000">
<FONT size="4">파일 업로드 테스트</FONT>
<FORM name="form1" method="post" action="view.php" enctype="multipart/form-data">
  첨부파일:<INPUT type="file" name="uploadfile"><BR>
  제목:<INPUT type="text" name="title"><BR><BR>
  내용:<INPUT type="text" name="content"><BR><BR>
  작성자:<INPUT type="text" name="name"><BR><BR>
  <INPUT type="submit" value="파일업로드">
  <INPUT type="hidden" name="MAX_FILE_SIZE" value="100000">
</FORM>
</BODY>
</HTML>