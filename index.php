<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <style>
   /*請在這裹撰寫你的CSS*/ 

    body {
    text-align: center ; /* 設定容器的樣式，使按鈕居中顯示 */
    background-image: url('./images/5.jfif'); /*設定背景圖片*/
    background-size: cover;/*使圖片覆蓋整個背景*/
    background-position: center; /* 圖片置中 */
    background-repeat: no-repeat; /* 不重複顯示背景圖片 */
    background-attachment: fixed; /* 固定背景圖不隨捲動 */
    }

    /* 設定背景上文字的顏色和樣式，以確保在背景圖上清晰可見 */
    h1 {
        color: lightcoral;
        text-shadow: 1px 2px 1px rgba(0, 0, 0, 0.5); /* 添加陰影提高可讀性 */
    }

    table {
        width: 700px;
        height: 80px;
        /* border-collapse:collapse; 使邊框合併 */
        margin:auto;        
        /* background: rgb(<?rand(50,250);?>,<?rand(50,250);?>,<?rand(50,250);?>); */
        background-color: rgba(255, 255, 255, 0.8); /* 增加日曆的白色半透明背景 */
        border-radius: 8px;
    }

    th {
    font-size: 18px; /* 調整星期標題的字體大小 */
    padding: 15px 0; /* 調整星期標題的內邊距 */
    }

    td {
        width: 140px;
        height: 50px;
        font-weight: bold;
        padding: 10px 10px; /* 單元格內的邊距 */
        text-align:center; /* 文字居中 */
        border:2px solid #999; /* 邊框顏色 */
        border-radius: 25%;  /* 使日期框變圓形 */
        font-size: 22px;  /* 調整日期框字體大小 */
        transition: transform 0.3s ease, background-color 0.3s ease;  /*添加動畫效果*/
        cursor: pointer; /* 指標變為手形 */ 
    }
    .holiday {
        background: pink; /* 假日的背景顏色 */
        color: red; /* 假日的文字顏色 */      
      }
    .grey-text {
        color: #999; /* 非當月日期的文字顏色 */
    }
    .today {
        background: lightblue; /* 今天的背景顏色 */
        color: white; /* 今天的文字顏色 */
        font-weight:bolder; /* 加粗字體 */
        text-shadow: 1px 2px 1px rgba(0, 0, 0, 0.5);
    }
    .nav{
        width: 700px;
        margin:auto;
        background-color: rgba(255, 255, 255, 0.5); /* 加入白色半透明背景以強調選單 */
        border-radius: 8px;
        padding: 2px;
    }

    .nav td{
        font-size: 30px;
        border:10px;
        padding:10px 10px;
        text-decoration: none;
    }

    .today-button {
    text-align: center ; /* 設定容器的樣式，使按鈕居中顯示 */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

      /* 設定按鈕的樣式 */
    .today-link {
    padding: 8px 40px 8px; /* 按鈕的內邊距 */
    background-color: rgba(255, 199, 95, 0.8); 
    /*background: rgba(255, 150, 113, 0.5); 按鈕的背景顏色 */
    color: white; /* 按鈕的文字顏色 */
    text-decoration: none; /* 取消超鏈接的下劃線 */
    border-radius: 20px; /* 按鈕的圓角效果 */
    }

    .today-link:hover,
    .robot-arm .base:hover {
        background-color:lightcoral;
        transform: scale(1.1);
        
    }

    /* a {
      text-decoration: none;
      font-weight:bolder;
      color: #98D98E;
    } */

    /* 下一個月按鈕的基本樣式 */
    .nextMonth {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    text-decoration: none;
    font-weight: bold;
    /* transition: transform 0.3s ease, background-color 0.3s ease;  添加動畫效果 */
    }

    
    /* 滑鼠懸停在按鈕上的效果 */
    .nextMonth:hover {
    color: #68BE8D;
    transform: scale(1.5); /* 放大效果 */
    }

    .nextMonth a {
    color: #98D98E;
    text-decoration: none;
    }

    /* a:hover {
        padding: 15px 40px;
        color: #68BE8D;
    } */

    .sp-date {
    font-size: 12px; /* 特定日期的文字大小 */
    color: #FFA500; /* 特定日期的文字顏色（橙色） */
    font-weight: bold; /* 使文字加粗 */
    }

    .holiday-text {
    padding: bottom;
    font-size: 14px; /* 國定假日的文字大小 */
    color: #FF4500; /* 國定假日的文字顏色（橘紅色） */
    font-style: italic; /* 讓文字傾斜 */
    }

    /* 調整 << 和 >> 的樣式 */
    .nextYear {
        color: #fff;
        background:lightcoral;
        /* background: rgba(255, 199, 95, 0.8); */
        border-radius: 50%; /* 設置為圓框 */
        font-size: 24px; /* 調整大小 */
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        text-decoration: none;
        font-weight: bold;
    }

    .nextYear:hover {
    background-color: rgba(255, 150, 113, 0.5);
    }

    /* 移除底線效果 */
    .nextYear a {
        color: white;
        text-decoration: none;
    }

    /* 調整月份的字體大小 */
    .month {
        color: white;
        font-size: 30px;
        background-color: rgba(255, 150, 113, 0.5);
        border-radius: 20px;
        padding: 40px 20px;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        cursor: pointer; /* 指標變為手形 */ 
        border: none; /* 取消邊框 */
    }    

    .year {
        font-size: 36px; 
        color: lightgray; 
        font-weight: bold; 
        text-shadow: 2px 1px 1px rgba(0, 0, 0, 0.5);
    }
    
    /* 機器手臂的容器 */
    .robot-arm {
    position: fixed;
    top: 40%; /* 將機器手臂位置 */
    right: 470px;  /*從右側出現 */
    width: 120px;
    height: 220px;
    transform: translateY(-50%); /* 垂直居中 */
    display: flex;
    flex-direction: column;
    align-items: center;
    animation: move-arm 3s infinite ease-in-out; /* 添加晃動動畫 */
    
    }

    /* 機器手臂的基礎 */
    .robot-arm .base {
    width: 100px;
    height: 95px;
    background-color: rgba(255, 150, 113, 0.5);
    border-radius: 50%;
    position: relative;
    font-size: 22px;
    color: white; /* 今天的文字顏色 */
    font-weight:bolder; /* 加粗字體 */
    text-shadow: 1px 2px 1px rgba(0, 0, 0, 0.5);
    text-align: center;
    cursor: pointer;
    padding: 10px;
    display: inline-block;
}
#marquee-container {
      margin-top: 20px;
      font-size: 16px;
    }
    .base a {
      text-decoration: none;
      color: inherit;
    }

    /* 手臂的延展部分 */
    .robot-arm .arm {
    width: 50px;
    height: 65px;
    background-color: rgba(255, 150, 113, 0.5);
    border-radius: 10px;
    position: relative;
    top: -10px;
}


    /* 手臂的動畫 */
    @keyframes move-arm {
    0%, 100% {
        transform: translateY(-50%) rotate(0deg);
    }
    50% {
        transform: translateY(-50%) rotate(15deg); /* 手臂擺動角度 */
    }
}

    /*跑馬燈效果 */
    #marquee-container {
    margin: 20px auto;
    width: 70%; /* 調整跑馬燈寬度 */
    background-color: rgba(255, 255, 255, 0.8); /* 半透明背景 */
    border-radius: 10px;
    padding: 5px;
    box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.2); /* 添加陰影效果 */
    }

    marquee {
    color: lightcoral; /* 文字顏色 */
    font-size: 24px; /* 調整字體大小 */
    font-weight: bold; /* 加粗字體 */
    line-height: 1.5; /* 行高 */
}


</style>
</head>
<body>
<h1>.⁎ .⁂ .⁎˙ ⁑ * 萬  年  曆 * ⁑ ˙⁎. ⁂. ⁎.  </h1> 
 <!-- <h2> (๑◕ܫ◕๑)ฅ . ฅ (๑•̀ ω •́๑) ฅ ʕ•͡ᴥ•ʔ ✿●  </h2> -->

<?php
// 定義跑馬燈訊息
$marqueeMessages = [
    "✨種自己的花，愛自己的宇宙，在不完美的生活裡，找到閃亮亮的快樂✧(๑•̀ㅂ•́)و✧✨",
    "✿ 每個人的花期不同，不必焦慮有人比你提前擁有！ก็ʕ•͡ᴥ•ʔก้ ✿",
    "遺憾和失去，是我們要面臨的課題，告別比告白還要難！(๑•́︿•̀๑) ",
    "有人懂你奇奇怪怪，有人陪你可可愛愛 ╭(●╹∀╹●)╯╰(●•◡•●)╮",
    "他人對你的尊重，從來不是因為你的順從 ((=•오•=))(｡•ㅅ•｡)ﾉ ",
    "比起被圍觀，悄悄努力或許更踏實！٩(๑•̀ㅂ•́๑)۶",
    "用心生活，每天都是美好的一天！٩(˶╹ꇴ╹˶)و "
];

// 隨機選擇一則訊息
$randomMessage = $marqueeMessages[rand(0, count($marqueeMessages) - 1)];

// 判斷是否觸發按鈕點擊
if (isset($_GET['update'])) {
    // 設定固定的新訊息
    $randomMessage = $marqueeMessages[rand(0, count($marqueeMessages) - 1)];
} else {
    // 隨機選擇一則訊息
    $randomMessage = $marqueeMessages[rand(0, count($marqueeMessages) - 2)];
}
?>

<div id="marquee-container">
    <marquee behavior="scroll" direction="left">
        <?php echo $randomMessage; ?>
    </marquee>
</div>

<br> 
<?php
/*請在這裹撰寫你的萬年曆程式碼*/  
if(isset($_GET['month'])){
  $month=$_GET['month']; // 如果有指定月份，使用它
}else{
  $month=date("m"); // 否則使用當前月份
}

if (isset($_GET['year'])) {
  $year = $_GET['year'];
} else {
  $year = date("Y");
}

// 計算前一個月和前一年的月份
if($month-1<1){
  $prevMonth=12;
  $prevYear=$year-1;
}else{
  $prevMonth=$month-1;
  $prevYear=$year;
}

// 計算下一個月和後一年的月份
if($month+1>12){
  $nextMonth=1;
  $nextYear=$year+1;
}else{
  $nextMonth=$month+1;
  $nextYear=$year;
}

// 計算前一年與後一年
$prevYearMonth = $year - 1;
$nextYearMonth = $year + 1;

$spDate=[
'2024-11-07'=>"立冬",
'2024-06-10' => "端午節",
'2024-09-17' => "中秋節",
'2025-05-31' => "端午節",
'2025-10-06' => "中秋節",
'2026-06-19' => "端午節",
'2026-09-25' => "中秋節",
'2024-11-22'=>"小雪"
];

$holidays = [
'01-01' => "元旦",
'02-10' => "農曆新年",
'04-04' => "兒童節",
'04-05' => "清明節",
'05-01' => "勞動節",
'10-10' => "國慶日",
];

?>

<?php
// 生肖對應陣列
$zodiacs = ["🐭", "🐮", "🐯", "🐰", "🐉", "🐍", "🐴", "🐏", "🐵", "🐓", "🐶", "🐷"];

// 根據年份計算生肖
$zodiacIndex = ($year - 4) % 12;
$zodiacName = $zodiacs[$zodiacIndex];
?>

<div class='nav'>
    <table style="width:100%">
        <tr>
            <!-- 左方下拉式月份選取 -->
            <td rowspan="2">
                <form action="index.php" method="get">
                <input type="hidden" name="year" value="<?= $year; ?>">
                <select name="month" class="month" onchange="this.form.submit()">
                    <?php for ($m = 1; $m <= 12; $m++): ?>
                        <option value="<?= $m; ?>" <?= $month == $m ? 'selected' : ''; ?>>
                            <?= $m; ?> 月
                        </option>
                    <?php endfor; ?>
                </select>
                </form>
            </td>

            <td class="nextYear">
                <a href="index.php?year=<?=$prevYearMonth;?>&month=<?=$month;?>">◄◄</a>                              
            </td>
            <td class="year"
            onclick="alert('⁎˙*✿*.⁎˙ (๑◕ܫ◕๑)ฅ | 感恩的心 (˶╹ꇴ╹˶)♡ 年年開心 | ✧*｡٩(ˊᗜˋ*)و✧*｡ .⁎˙* ✿--查詢年份，請按確定鍵後，點擊【 ◄◄ 】or【 ►► 】--✿')" 
            style="font-size: 38px;">
                <?php echo "{$year}年 {$zodiacName}"; ?>
            </td>
            <td class="nextYear">
                <a href="index.php?year=<?=$nextYearMonth;?>&month=<?=$month;?>">►►</a>    
            </td>
        </tr>

        <tr>
        <td class="nextMonth">
            <a href="index.php?year=<?=$prevYear;?>&month=<?=$prevMonth;?>">◄</a>
        </td>
        <td class="today-button">
            <a href="index.php?year=<?php echo date('Y'); ?>&month=<?php echo date('m'); ?>" class="today-link">
            T♥DAY
            </a>        
        </td>
        <td class="nextMonth">
            <a href="index.php?year=<?=$nextYear;?>&month=<?=$nextMonth;?>">►</a>
        </td>
    </tr>
    
    </table>       
</div>

<table>
<tr>
    <!-- <td></td> -->
    <th style='color:red'>✿ SUN 日</th>
    <th>MON &nbsp; 一</th>
    <th>TUE &nbsp; 二</th>
    <th>WED &nbsp; 三</th>
    <th>THU &nbsp; 四</th>
    <th>FRI &nbsp; 五</th>
    <th style='color:red'>SAT 六 ✿</th>
</tr>

<div class="robot-arm">
        <div class="base">
            <a href="?update=true">
                來碗<br>🐔soup<br>ヽ(⚲□⚲)ﾉﾟ
        </div>
        <div class="arm"></div>
    </div>
<?php

 // 計算當月的第一天
$firstDay="{$year}-{$month}-1"; 
/* $firstDay=date("Y-m-1"); */
$firstDayTime=strtotime($firstDay); // 將第一天轉換成時間戳
$firstDayWeek=date("w",$firstDayTime); // 獲取第一天是星期幾

// 逐行顯示每一天
for($i=0;$i<6;$i++){
    echo "<tr>"; 
    // echo "<td>";
    // echo $i+1; //顯示週數
    // echo "</td>";
    for($j=0;$j<7;$j++){
        //echo "<td class='holiday'>";
        // 計算這個格子中的日期
        $cell=$i*7+$j -$firstDayWeek;
        $theDayTime=strtotime("$cell days".$firstDay);

        //所需樣式css判斷（假日、非當月等）
        $theMonth=(date("m",$theDayTime)==date("m",$firstDayTime))?'':'grey-text';
        $isToday=(date("Y-m-d",$theDayTime)==date("Y-m-d"))?'today':'';
        $w=date("w",$theDayTime);
        $isHoliday=($w==0 || $w==6)?'holiday':''; // 假日（星期六和星期天）
        
        //顯示日期
        echo "<td class='$isHoliday $theMonth $isToday'>";
        echo date("d",$theDayTime); 

        //如果有特定日期程式撰寫
        if(isset($spDate[date("Y-m-d",$theDayTime)])){
            echo "<br><span class='sp-date'>{$spDate[date("Y-m-d",$theDayTime)]}</span>";
        }

        //國定假日程式撰寫(如果想要改成不同顏色，要再上面新增CSS判斷)
        //目前是農曆的節日要再另外設計
        if(isset($holidays[date("m-d",$theDayTime)])){
            echo "<br><span class='holiday-text'>{$holidays[date("m-d",$theDayTime)]}</span>";
        }
        echo "</td>";
        
    }
    echo "</tr>"; // 結束一行
}

?>

</table>

</body>
</html>