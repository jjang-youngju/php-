<?php include $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<!DOCTYPE html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="index.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <title>게시판만들어보기</title> 
</head> 
    <body>
        <div class="container">
            <div class="header">
              <div class="logo">logoimage</div>
            </div>
            <div class="section">
              <div class="nav">menu</div>
              <div class="content">
                그룹 및 룸관리 > 룸관리
                <div class="bt">
                    <input type="button" value="✔전체선택" id="checkAll" class="chk" onclick="checkAll(this.checked);">
                    <input type="button" value="삭제">
                    <input type="button" value="추가">
                </div>
                <div class="select">
                    <select name="" id="">
                        <option value="">룸이름</option>
                        <option value="">주관자</option>
                        <option value="">최대사용자</option>
                        <option value="">참여자인원</option>
                    </select>
                    <input class="search" type="text" placeholder="검색어를 입력하세요">
                    <input type="button" value="검색">
                    <input type="button" value="전체보기">
                </div>
                <div class="view">
                    <select name="" id="">
                        <option value="">5개씩보기</option>
                        <option value="" selected>10개씩보기</option>
                        <option value="">15개씩보기</option>
                        <option value="">20개씩보기</option>
                        <option value="">50개씩보기</option>
                    </select>
                    <select name="" id="">
                        <option value="">:::선택해주세요:::</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                        <option value="">13</option>
                        <option value="">14</option>
                        <option value="">15</option>
                        <option value="">16</option>
                        <option value="">17</option>
                        <option value="">18</option>
                    </select>
                </div>
                <table class="content-table">
                  <thead>
                    <tr>
                        <th style="width:50px;">선택</th>
                        <th style="width:50px;">번호</th>
                        <th style="width:200px;">룸이름</th>
                        <th style="width:100px;">주관자</th>
                        <th style="width:100px;">타입</th>
                        <th style="width:150px;">최대인원수</th>
                        <th style="width:100px;">접속자수</th>
                        <th style="width:300px;">등록일</th>
                        <th style="width:300px;">마지막접속일</th>
                    </tr>
                  </thead>
                    <?php
                    $sql = mq('SELECT * FROM room_management ORDER BY room_number DESC');
                    while($board = $sql->fetch_array())
                    {
                        
                ?>
                  <tbody>
                    <tr>
                        <td><input type="checkbox" name="check[]" id="chk" class="chk" value="<?php $board['room_number'] ?>"></td>
                        <td><?php echo $board['room_number']; ?></td>
                        <td><?php echo $board['room_name']; ?></td>
                        <td><?php echo $board['room_manager']; ?></td>
                        <td><?php echo $board['room_type']; ?></td>
                        <td><?php echo $board['room_max']; ?></td>
                        <td><?php echo $board['room_participants']; ?></td>
                        <td><?php echo $board['room_open']; ?></td>
                        <td><?php echo $board['room_last']; ?></td>
                    </tr>
                  </tbody>
                  <?php }?>
                </table>
              </div>
            </div>
            <div class="footer">footer</div>
          </div>
          <script>
            $(function(){
                $("#checkAll").click(function(){
                    if($("input:checkbox[id=chk]").is(":checked")==true){
                        $("input[id=chk]:checkbox").prop("checked",false);
                    }else{
                        $("input[id=chk]:checkbox").prop("checked",true);
                    }
                })
            })
          </script>
    </body>
    </html>