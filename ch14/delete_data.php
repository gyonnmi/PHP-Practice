<?php

// DB 정보
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "rizy";

// DB 연결
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

//연결 오류 발생 시
if(!$conn) {
	die("연결 실패: " . mysqli_connect_error());
}

// 데이터 삭제 SQL문
$sql = "delete from movie_director where name='홍길동'";
// movie_director 테이블에서 where name='홍길동'을 찾아서 delete해라

if(mysqli_query($conn, $sql)) {
	echo "레코드가 성공적으로 삭제 되었습니다.";
} else {
	echo "삭제 실패: " . mysqli_error($conn);
}

// DB 접속 종료
mysqli_close($conn);
?>