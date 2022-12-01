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

$sql = "select * from movie_director";
$result = mysqli_query($conn, $sql);

// 만약에 검색 항목에 값이 있다면(0개 이상이라면)
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_array($result)) {
		echo "id: " . $row['id']. " - name: " . $row['name']. " - birthday: " . $row['birthday']. "<br/>";
	}
} else {
	echo "저장된 데이터가 없습니다.";
}

// DB 접속 종료
mysqli_close($conn);
?>