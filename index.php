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
        background-image: url('./images/1.jfif'); /*設定背景圖片*/
        background-size: cover;/*使圖片覆蓋整個背景*/
        background-position: center; /* 圖片置中 */
        background-repeat: no-repeat; /* 不重複顯示背景圖片 */
        background-attachment: fixed; /* 固定背景圖不隨捲動 */
        font-family: Arial, sans-serif; /* 設置整體字體樣式 */
    }
    
    h2 { /* 最上方抬頭 */
        color: lightcoral;
        text-shadow: 1px 2px 1px rgba(0, 0, 0, 0.5); /* 添加陰影提高可讀性 */
    }

    table { /* 目前 頭一區 / 身體星期標題一區 */
        width: 735px;
        height: 90px;
        /* border-collapse:collapse; 使邊框合併 */
        margin:auto;        
        /* background: rgb(<?rand(50,250);?>,<?rand(50,250);?>,<?rand(50,250);?>); */
        background-color: rgba(255, 255, 255, 0.9); /* 增加日曆的白色半透明背景 */
        border-radius: 8px;
    }

    th { /* 星期標題 */
        font-size: 18px; /* 字體大小 */
        padding: 15px 0; /* 內邊距 */
    }

    td { /* table 裡面 */
        width: 140px;
        height: 55px;
        font-weight: bold;
        padding: 10px 10px; /* 單元格內的邊距 */
        text-align:center; /* 文字居中 */
        border:2px solid #999; /* 邊框顏色 */
        border-radius: 25%;  /* 使日期框變圓形 */
        font-size: 22px;  /* 調整日期框字體大小 */
        transition: transform 0.3s ease, background-color 0.3s ease;  /*添加動畫效果*/
        cursor: pointer; /* 指標變為手形 */ 
    }

    td:hover { /*滑鼠滑至日期位置效果設置 */
        border: 2px solid crimson;
        color: crimson;
        border-radius: 20px;
        transform: scale(1.05);
    }

    .holiday { /* 假日(當月) */
        background: pink; 
        color: red;       
    }
      
    .grey-text { /* 非 當月日期 */
        color: #999; 
    }

    .today { /* 日曆中 當日 */
        background: lightblue; 
        color: white; 
        font-weight:bolder; /* 加粗字體 */
        text-shadow: 1px 2px 1px rgba(0, 0, 0, 0.5);
        font-size:1.5em;  /* em 字拉大的效果 */
    }

    .nav { /* 機器人 頭區 */
        width: 735px;
        margin:auto;
        background-color: rgba(255, 255, 255, 0.5); /* 加入白色半透明背景以強調選單 */
        border-radius: 8px;
        padding: 2px;
    }

    .nav td { /* 頭區的每個格子 */
        font-size: 30px;
        border:10px;
        padding:10px 10px;
        text-decoration: none;
    }

    .today-button { /* 頭區 的嘴巴 */
        text-align: center ; /* 設定容器的樣式，使按鈕居中顯示 */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .today-link { /* 頭區 的嘴巴按鈕 */
        padding: 8px 40px 8px; /* 按鈕的內邊距 */
        background-color: rgba(255, 199, 95, 0.8); 
        /*background: rgba(255, 150, 113, 0.5); */
        color: white; /* 按鈕的文字顏色 */
        text-decoration: none; /* 取消超鏈接的下劃線 */
        border-radius: 20px; /* 按鈕的圓角效果 */
    }

    .today-link:hover,
    .robot-arm .base:hover {
        background-color:lightcoral;
        transform: scale(1.1);
    }

    .nextMonth { /* 頭區 的腮紅(下一個月 ►) */
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
    
    .nextMonth:hover { /* 滑鼠懸停在按鈕上的效果 */
        color: #68BE8D;
        transform: scale(1.5); /* 放大效果 */
    }

    .nextMonth a { /* 頭區 的腮紅(下一個月 ►)按鈕  */
        color: #98D98E;
        text-decoration: none;
    }

    .sp-date { /* 特別日期.農曆的國定假日 */
        font-size: 12px; /* 文字大小 */
        color: chocolate; 
        font-weight: bold; /* 使文字加粗 */
    }

    .holiday-text { /* 國定假日 */
        padding: bottom;
        font-size: 14px; /* 國定假日的文字大小 */
        color: crimson; 
        /*font-style: italic;  讓文字傾斜 */
        font-weight: bold; /* 使文字加粗 */
    }

    .nextYear { /* 頭區 的眼睛(下一年 ►►)  */
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
        border-radius: 50px;
    }
    
    .nextYear a { /* 頭區 的眼睛(下一年 ►►)按鈕  */
        color: white;
        text-decoration: none; /* 移除底線效果 */
    }

    .month { /* 頭區 的月份下拉選單  */
        color: white;
        font-size: 33px;
        background-color: rgba(255, 150, 113, 0.5);
        border-radius: 20px;
        padding: 42px 20px;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        cursor: pointer; /* 指標變為手形 */ 
        border: none; /* 取消邊框 */
    }    

    .year { /* 頭區 中心(年份/生肖) */
        font-size: 36px; 
        color: lightgray; 
        font-weight: bold; 
        text-shadow: 2px 1px 1px rgba(0, 0, 0, 0.5);
    }
        
    .robot-arm { /* 機器手臂的容器 */
        position: fixed;
        /* top: 40%; 將機器手臂位置40% */
        bottom: -200px;
        right: 280px;  /*從右側出現460px */
        width: 120px;
        height: 220px;
        transform: translateY(-50%); /* 垂直居中 */
        display: flex;
        flex-direction: column;
        align-items: center;
        animation: move-arm 3s infinite ease-in-out; /* 添加晃動動畫 */
        }
    
    .robot-arm .base { /* 機器手臂的頭 */
        width: 100px;
        height: 95px;
        background-color: rgba(255, 150, 113, 0.5);
        border-radius: 50%;
        position: relative;
        font-size: 22px;
        color: white; 
        font-weight:bolder; /* 加粗字體 */
        text-shadow: 1px 2px 1px rgba(0, 0, 0, 0.5);
        text-align: center;
        cursor: pointer;
        padding: 10px;
        display: inline-block;
    }
    
    #marquee-container { /* 晃動動畫區 */
        margin-top: 20px;
        font-size: 16px;
    }

    .base a { /* 機器手臂的頭 按鈕 */
        text-decoration: none;
        color: inherit;
    }

    .robot-arm .arm { /* 手臂的延展部分 */
        width: 50px;
        height: 65px;
        background-color: rgba(255, 150, 113, 0.5);
        border-radius: 10px;
        position: relative;
        top: -10px;
    }
    
    @keyframes move-arm { /* 手臂的動畫 */
        0%, 100% {
            transform: translateY(-50%) rotate(0deg);
        }
        50% {
            transform: translateY(-50%) rotate(15deg); /* 手臂擺動角度 */
        }
    }
    
    #marquee-container { /* 跑馬燈效果區 */
        margin: 20px auto;
        width: 70%; 
        background-color: rgba(255, 255, 255, 0.8); /* 半透明背景 */
        border-radius: 10px;
        padding: 5px;
        box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.2); /* 添加陰影效果 */
    }

    marquee { /* 跑馬燈效果 框內區 */
        color: lightcoral; 
        font-size: 24px; /* 調整字體大小 */
        font-weight: bold; /* 加粗字體 */
        line-height: 1.5; /* 行高 */
    }
    
    .current-time { /* 最下方 設置台灣目前時間 */
        font-size: 22px;
        text-align: center;
        margin: 30px;
        color: darkslateblue;
    }

    .current-time:hover { /* 滑鼠懸停在按鈕上的效果 */
        color: darkblue;
    }

    a { /* 取消a標籤的底線 */
        text-decoration: none;
    }

    .left-image { /*最左邊 小圖區 */
        /* position: absolute;  固定在畫面左側 */
        position: fixed; /* 固定位置 */
        bottom: 120px;  /* 距離底部 90px */
        left: 325px; /* 距離左側 10px */
        /* top: 50%; 垂直置中 */
        /*left: 0;  靠左對齊 */
        /*transform: translateY(-50%); 調整垂直置中效果 */
        /*z-index: 1;  確保圖片位於其他元素之上 */
    }

    .left-image img { /*最左邊 小圖設定  */
        width: 250px; 
        height: auto; /* 保持圖片比例 */
        border: none; /* 去除邊框 */
        /*border-radius: 10px;  如果需要圓角，視需求調整 */
        /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);  添加輕微陰影增強效果 */
        /* animation: swing 2s infinite ease-in-out; */
    }

    @keyframes swing { /* 小圖動畫 */
        0% {
            transform: rotate(-5deg);
        }
        50% {
            transform: rotate(5deg);
        }
        100% {
            transform: rotate(-5deg);
        }
    }

    .selected-image {        
        /* position: absolute;  固定在畫面左側 */
        position: fixed; /* 固定位置 */
        bottom: -10px;  /* 距離底部 90px */
        left: 25px; /* 距離左側 10px */
        /* top: 50%; 垂直置中 */
        /*left: 0;  靠左對齊 */
        /*transform: translateY(-50%); 調整垂直置中效果 */
        z-index: 10; /* 確保圖片位於其他元素之上 */
}

    .selected-image img {
        width: 300px; 
        height: auto; /* 保持圖片比例 */
        border: none; /* 去除邊框 */
        /*border-radius: 10px;  如果需要圓角，視需求調整 */
        /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);  添加輕微陰影增強效果 */
        animation: swing 2s infinite ease-in-out;
    }

    /* 1月的圖像位置 */
    .selected-image.month-1 img {
        width: 300px;
        position: fixed; /* 固定位置 */
        bottom: -10px;  /* 距離底部 90px */
        left: 10px; /* 距離左側 10px */
    }

    /* 2月的圖像位置 */
    .selected-image.month-2 img {
        width: 350px;
        position: fixed; /* 固定位置 */
        bottom: 10px;  /* 距離底部 90px */
        left: -30px; /* 距離左側 10px */
    }

    /* 3月的圖像位置 */
    .selected-image.month-3 img {
        width: 250px;
        position: fixed; /* 固定位置 */
        bottom: 20px;  /* 距離底部 90px */
        left: 20px; /* 距離左側 10px */
    }

    /* 4月的圖像位置 */
    .selected-image.month-4 img {
        width: 300px;
        position: fixed; /* 固定位置 */
        bottom: 10px;  /* 距離底部 90px */
        left: 25px; /* 距離左側 10px */
    }

    /* 5月的圖像位置 */
    .selected-image.month-5 img {
        width: 315px;
        position: fixed; /* 固定位置 */
        bottom: -13px;  /* 距離底部 90px */
        left: 25px; /* 距離左側 10px */
    }

    /* 6月的圖像位置 */
    .selected-image.month-6 img {
        width: 315px;
        position: fixed; /* 固定位置 */
        bottom: 20px;  /* 距離底部 90px */
        left: 40px; /* 距離左側 10px */
    }

    /* 7月的圖像位置 */
    .selected-image.month-7 img {
        width: 300px;
        position: fixed; /* 固定位置 */
        bottom: 20px;  /* 距離底部 90px */
        left: 20px; /* 距離左側 10px */
    }

    /* 8月的圖像位置 */
    .selected-image.month-8 img {
        width: 300px;
        position: fixed; /* 固定位置 */
        bottom: 20px;  /* 距離底部 90px */
        left: 10px; /* 距離左側 10px */
    }

    /* 9月的圖像位置 */
    .selected-image.month-9 img {
        width: 350px;
        position: fixed; /* 固定位置 */
        bottom: -5px;  /* 距離底部 90px */
        left: -30px; /* 距離左側 10px */
    }

    /* 10月的圖像位置 */
    .selected-image.month-10 img {
        width: 230px;
        position: fixed; /* 固定位置 */
        bottom: 25px;  /* 距離底部 90px */
        left: 30px; /* 距離左側 10px */
    }
    
    /* 11月的圖像位置 */
    .selected-image.month-11 img {
        width: 250px;
        position: fixed; /* 固定位置 */
        bottom: 25px;  /* 距離底部 90px */
        left: 25px; /* 距離左側 10px */
    }

    /* 12月的圖像位置 */
    .selected-image.month-12 img {
        width: 300px;
        position: fixed; /* 固定位置 */
        bottom: 15px;  /* 距離底部 90px */
        left: 15px; /* 距離左側 10px */
    }

    /* 回首頁 */
    a#home{
    width: 80px;
    height: 40px;
    font-size: 15px; /*rem*/
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: 0;
    padding: 0;
    position: fixed;
    background-color: white;
    color: black;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px #ccc;
    top: 15px;
    left: 15px;
    border-radius: 15px;
    z-index:999;
    }

    a#home:hover{
    background-color: lightcoral;
    color:white;
    }

    .date-box {
            border: 1px solid #ccc;
            padding: 20px;
            display: inline-block;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .date-box .gregorian {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .date-box .additional {
            font-size: 1.2em;
            color: #555;
        }

</style>
</head>
<body>
<h2>.⁎ .⁂ .⁎˙ ⁑ * 萬  年  曆  Perpetual calendar * ⁑ ˙⁎. ⁂. ⁎.  </h2> 
 <!-- <h2> (๑◕ܫ◕๑)ฅ . ฅ (๑•̀ ω •́๑) ฅ ʕ•͡ᴥ•ʔ ✿●  </h2> -->
 <a id="home" href="../index.html">回目錄</a>
 
<?php
// 定義跑馬燈訊息
$marqueeMessages = [
    "✨種自己的花，愛自己的宇宙，在不完美的生活裡，找到閃亮亮的快樂✧(๑•̀ㅂ•́)و✧✨",
    "✿ 每個人的花期不同，不必焦慮有人比你提前擁有！ก็ʕ•͡ᴥ•ʔก้ ✿",
    "遺憾和失去，是我們要面臨的課題，告別比告白還要難！(๑•́︿•̀๑) ",
    "有人懂你奇奇怪怪，有人陪你可可愛愛 ╭(●╹∀╹●)╯╰(●•◡•●)╮",
    "比起被圍觀，悄悄努力或許更踏實！٩(๑•̀ㅂ•́๑)۶",
    "用心生活，每天都是美好的一天！٩(˶╹ꇴ╹˶)و ",
    "凡是發生皆有利於你，一切都是最好的安排！٩(๑•̀ㅂ•́๑)۶",
    "你不用一開始就很厲害，但要開始才有辦法很厲害 ＼＼\\٩( 'ω' )و //／／",
    "當你真心渴望某件事，整個宇宙都會聯合起來幫助你完成 ヾ(´︶`*)ﾉ♬",
    "聰明是一種天賦，而善良是一種選擇 （๑ • ‿ • ๑ ）",
    "別在乎別人做什麼；做得比自己好，每天突破自己的紀錄，你就是一位成功者！ ᕦ(ò_óˇ)ᕤ",
    "不要為成功而努力，要為做一個有價值的人而努力，人只有在覺得「自己有價值」時，才會感受到「貢獻感」，才能夠擁有勇氣！ (๑╹◡╹๑)",
    "如果你想得到從未擁有的東西，你就得去做從未做過的事 ヽ(・×・´)ゞ",
    "成功，不是你所站的位置，而是你要去的方向 ┌|◎o◎|┘",
    "一個真正快樂的人，是那種即使繞道而行也不忘享受風景的人 (((o(*ﾟ▽ﾟ*)o)))",
    "知人者智，自知者明；勝人者有力，自勝者強 (´⊙ω⊙`)",
    "堅持把簡單的事情做好就是不簡單，堅持把平凡的事情做好就是不平凡，做到極致，就是非凡 (ง๑ •̀_•́)ง",
    "勇氣是控制恐懼心理，而不是心裡毫無恐懼 ∑(ι´Дン)ノ",
    "世界上對勇氣的最大考驗，是忍受失敗而不喪失信心!! ฅ(๑*д*๑)ฅ",
    "只有你學會把自己已有的成績都歸零，才能騰出空間去接納更多的新東西，如此才能使自己不斷的超越自己 (╯✧∇✧)╯",
    "每個人都有潛在的能量，只是很容易被習慣所掩蓋，被時間所迷離，被惰性所消磨 (๑¯∀¯๑)",
    "人生的價值，並不是用時間，而是用深度去衡量的 (´◉‿◉｀)",
    "簡單生活，知足常樂，才是幸福的真諦 ヾ(´︶`*)ﾉ♬",
    "如果不嘗試，你永遠不會知道結果 If you don't try, you'll never know. (•ㅂ•)/",
    "生活中沒有什麼比真誠的微笑更能打動人心 (◍•ᴗ•◍)ゝ",
    "做許多事情的捷徑就是一次只做一件事 ⋉(● ∸ ●)⋊",
    "千里之行，始於足下；不怕路長，只怕志短 (*°ω°*ฅ)*",
    "別讓過去的悲催，或者未來的憂慮，毀掉當下的快樂 ಠ_ಠ",
    "決定我們成為什麼樣人的，不是我們的能力，而是我們的選擇 (｡･㉨･｡)",
    "世界上最棒和最美好的事物是看不見也摸不著的，必須要用心去感受 (♡˙︶˙♡)",
    "永遠保持開放的心態和一顆富有同情心的心 (◕ܫ◕)",
    "對短期事物採取殘酷的誠實，對長期事物則保持樂觀和信心 ( ◕‿‿◕ )",
    "人生就像騎單車，要保持平衡，就必須一直向前 ε=ε=ヾ(;ﾟдﾟ)/",
    "成功的花，人們只驚羨她現時的明艷，然而當初她的芽兒，卻浸透了奮鬥的淚泉 (❀╹◡╹)",
    "每一次創傷都是一次成熟，每一次失去都是一次獲得 (´-ι_-｀)",
    "即使我們走得再慢，也比站在原地更接近目標 (๑´ㅁ`)",
    "用平和的心態面對一切，才能從容不迫 (=´ω`=)",
    "勇敢不是沒有恐懼，而是帶著恐懼依然前行 ( ºΔº )",
    "與其抱怨，不如改變；與其等待，不如行動 (｡•ㅅ•｡)ﾉ ",
    "學會感恩，生活才會更加豐富和美好 (´▽`ʃ♡ƪ)",
    "總有一天，你會站在最亮的地方，活成自己曾經渴望的模樣 *｡٩(ˊωˋ*)و✧*｡",
    "心存希望，幸福就會降臨你；心存夢想，機遇就會籠罩你 (•‾⌣‾•)",
    "微笑是我們心靈的最真誠傾訴，是在困難面前最好的良藥 (｡◕∀◕｡)",
    "當你再也沒有什麼可以失去的時候，就是你開始得到的時候 ✧◝(⁰▿⁰)◜✧",
    "世界上最可貴的兩個詞，一個叫認真，一個叫堅持，認真的人改變了自己，堅持的人改變了命運 (*°ω°*ฅ)*",
    "不要質疑你的付出，這些都是一種累積一種沉澱，它們會默默鋪路，只為讓你成為更優秀的人 (￫ܫ￩)",
    "不給自己設限，則人生中就沒有限制你施展的藩籬 /ᐠ .ᆺ. ᐟ\ﾉ",
    "一個人的態度，決定他的高度 ⎝(◕u◕)⎠",
    "不強求自己與世無爭，而是希望在看透了人生無常後，依然能熱愛生活，享受生活 (´・ω・)つ旦",
    "人生最重要的不是得到多少或失去多少，而是好好善待自己，善待自己的人生 ▼・ᴥ・▼",
    "人生的高度，不是你看清多少事，而是你看輕多少事；心靈的寬度，不是你認識多少人，而是你包容多少人 (ㆆᴗㆆ)",
    "每一天都是一個新的開始，每一天都是一段全新的旅程。追逐一切未知，創造無限可能 (✪ω✪)",
    "人生觀決定了一個人的人生追求，世界觀決定了一個人的思想境界，價值觀決定了一個人的行為準則 (ﾉ◕ヮ◕)ﾉ*:･ﾟ✧",
    "不是因為生活太現實，而對生活失望。而是知道生活太現實，所以更要用心的活下去，給自己一個擁抱 ヽ(´ ︶ `)ノ",
    "學會改變生活，學會品味滄桑，方可無悔青春，無憾歲月的消逝 (›´ω`‹ )",
    "找到一個真正的朋友，那是幸運；能維繫一段真正的友誼，那是幸福 ♡(*´∀｀*)人(*´∀｀*)♡",
    "朋友是那個連你自己都不相信自己時，依然相信著你的那個人 ₍₍ ◝('ω'◝) ⁾⁾ ₍₍ (◟'ω')◟ ⁾⁾",
    "相互了解是朋友，相互理解是知己 ╮/(＞▽<)人(>▽＜)\╭",
    "不必太糾結於當下，也不必太憂慮未來，當你經歷過一些事情，眼前的風景已跟從前不一樣 ฅ^•ﻌ•^ฅ",
    "一切偉大的行動和思想，都有一個微不足道的開始 ((=•오•=))",
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


<?php
/*請在這裹撰寫你的萬年曆程式碼*/  
date_default_timezone_set("Asia/Taipei"); // 設置為台灣時區

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
'2024-11-07'=>"🍲 立冬",
'2024-06-10' => "🐲 端午節 🚩",
'2024-09-17' => "🥮 中秋節 🌕",
'2024-10-11' => "重陽節",
'2024-11-22'=>"🍲 立冬",
'2024-11-22'=>"⛄ 小雪",
'2024-12-06'=>"☃️ 大雪",
'2024-12-21'=>"🥣 冬至",
'2024-12-25'=>"🎅行憲紀念🎄",
'2025-01-27'=>"📅 彈性放假",
'2025-01-28'=>"🧧 除夕",
'2025-01-29'=>"農曆新年🧨",
'2025-01-30'=>"農曆新年🧨",
'2025-01-31'=>"農曆新年🧨",
'2025-02-01'=>"農曆新年🧨",
'2025-02-02'=>"農曆新年🧨",
'2025-02-08'=>"🙈 補班",
'2025-05-31' => "🐲 端午節 🚩",
'2025-10-06' => "🥮 中秋節 🌕",
'2026-06-19' => "🐲 端午節 🚩",
'2026-09-25' => "🥮 中秋節 🌕",
];

$holidays = [
'01-01' => "🙌 元旦",
'02-28' => "228 紀念日",
'04-04' => "🎠 兒童節",
'04-05' => "💐 清明節",
'05-01' => "💼 勞動節",
'10-10' => "🎉 國慶日",
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
            onclick="alert('⁎˙*✿*.⁎˙ (๑◕ܫ◕๑)ฅ | 感恩的心 (˶╹ꇴ╹˶)♡ 年年開心 | ✧*｡٩(ˊᗜˋ*)و✧*｡ .⁎˙* ✿--查詢年份，請按確定鍵後，點擊【 ◄◄ 】or【 ►► 】查詢~謝謝--✿')" 
            style="font-size: 36px;">
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
// 設定當前年份和月份
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
$month = isset($_GET['month']) ? $_GET['month'] : date('n');

// 定義每月對應的小圖
$smallImages = [
    1 => "23.png",
    2 => "1-1.png",
    3 => "2.png",
    4 => "30.webp",
    5 => "65.png",
    6 => "48.png",
    7 => "53.png",
    8 => "42.png",
    9 => "66.png",
    10 => "22.png",
    11 => "bg-1.png",
    12 => "36.png",
];

// 獲取當前月份的小圖
$selectedSmallImage = isset($smallImages[$month]) ? $smallImages[$month] : $smallImages[1];

?>

<div class="selected-image <?php echo "month-" . $month; ?>">
    <img src="images/<?php echo $selectedSmallImage; ?>" alt="當前月份小圖">
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

<?php
date_default_timezone_set("Asia/Taipei"); // 設置台灣時區
$currentTime = date("Y-m-d -l- H:i:s"); // 取得目前日期與時間
?>

<!-- 顯示當前台灣時間 -->
<div class="current-time">
    ٩(˶╹ꇴ╹˶)و 台灣日期：<?php echo $currentTime; ?> | 點選 (๑◕ܫ◕๑)ฅ | 獲取目前時間 ♪♪  
</div>

<div class="left-image">
    <!-- <img src="./images/65.png" alt="左圖1" /> -->
    <img src="./images/11.png" alt="左圖2" />
</div>

<?php
// 包含中國農曆轉換的函數庫
function solarToLunar($year, $month, $day) {
    // 簡單模擬的函數 (可用完整的農曆轉換庫，如 chinese-calendar/php)
    $lunar_date = "{$year}-{$month}-{$day} 的農曆";
    return $lunar_date;
}

// 定義特殊節日
$special_days = [
    '2024-01-01' => '元旦',
    '2024-02-10' => '春節',
    '2024-02-14' => '情人節',
    '2024-04-04' => '清明節',
    '2024-12-25' => '聖誕節',
];

// 取得當前日期
$today = date('Y-m-d');
$year = date('Y');
$month = date('m');
$day = date('d');

// 判斷是否為特殊節日
if (array_key_exists($today, $special_days)) {
    $display = $special_days[$today];
} else {
    // 轉換為農曆
    $display = solarToLunar($year, $month, $day);
}
?>

<div class="date-box">
        <div class="gregorian">國曆：<?php echo $today; ?></div>
        <div class="additional"><?php echo $display; ?></div>
    </div>



</body>
</html>