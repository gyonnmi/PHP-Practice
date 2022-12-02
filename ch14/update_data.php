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

// 데이터 수정 SQL문
$sql = "update movie_director set name='홍길동' where id=9";
// movie_director 테이블에서 id=9를 찾아서 set name='홍길동'으로 update해라

if(mysqli_query($conn, $sql)) {
	echo "레코드가 성공적으로 업데이트 되었습니다.";
} else {
	echo "업데이트 실패: " . mysqli_error($conn);
}

// DB 접속 종료
mysqli_close($conn);
?>