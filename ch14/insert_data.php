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

// 데이터 추가 SQL문
$sql = "insert into movie_director (id, name, birthday) values (9, '제임스 카메론', '1954-08-16')";

if(mysqli_query($conn, $sql)) {
	echo "새 레코드가 정상적으로 생성되었습니다.";
} else {
	echo "생성 실패: " . mysqli_error($conn);
}

// DB 접속 종료
mysqli_close($conn);
?>