<!DOCTYPE html>
<?php

$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
$iphone = (strpos($agent, 'iphone')) ? true : false;
$ipad = (strpos($agent, 'ipad')) ? true : false;
$android = (strpos($agent, 'android')) ? true : false;
if($iphone || $ipad || $android)
{
 echo "<script>window.location.href='/m/index.php'</script>";//这里也可以是网址
}
if($android){
 echo "<script>window.location.href='/m/index.php'</script>";//这里也可以是网址
}
?>

<html>

<head>

  <meta charset="UTF-8">
  <meta name="theme-color" content="#e9f1e9">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>高考鸭!高考倒计时</title>
  <!-- Bootstrap -->
  <link href="https://unpkg.zhimg.com/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @font-face {
      font-family: "lazy";
      src: url(./font/font.ttf);
    }
    @font-face {
      font-family: "youshe";
      src: url(./font/youshe.ttf);
    }
    body {
      background: url("https://img.eyabc.cn/images/2022/12/03/mbf8s8.jpg") 0 / cover fixed;
      z-index: 1;
    }
    body::after {
      position: fixed;
      left: 0;
      top: 0;
      content: '';
      width: 100%;
      height: 100%;
      background-color:rgba( 0 0 0 / .5);
      z-index: -1;
    }   
    h2,h3,p,span{
      color: #fff;
      text-shadow: 0 0 5px rgba(0 0 0 / .3)
    }
    h2 {
      font-size: 48px;
      margin-bottom: 50px;
      font-family: "lazy";
    }
    h3 {
      font-family: "youshe";
      font-size: 64px;
      display: inline-block;
    }
    .time {
      font-size: 32px;
      margin-right: 15px;
    }
    #saying-text {
      color: #f5f5f5;
      font-size: 20px;
    }
    #p {
      margin-bottom: 50px;
    }
    
    .time:last-child {
      margin: 0;
    }
    .container {
      text-align: center;
      position: absolute;
      left: 50%;
      top: 48%;
      transform: translate(-50%,-50%);
    }
    @media screen and (max-width: 800px) {
      h2 {
        font-size: 30px;
      }
      h3 {
        font-size: 36px;
      }
      .time {
        font-size: 22px;
        margin-right: 10px;
      }
      #saying-text {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>
 
  <div class="container">
    <div class="glass">
      <div class="main-content">
          <h2 class="text-center" id="h">高考倒计时</h2>
          <h3 class="text-center" id="p"></h3>
          <p class="text-center" style="display: none" id="saying">“<i><span id="saying-text"></span></i>”</p><br>
          <div id="2333">
                    <div class="footer">
        <p>
</div>
    <div><span>鸣谢:本网站由</span><a href="https://lab.eovl.cn">小鱼Lab</a><span>提供网站托管服务</span></div>
    <a href="https://mytrainnet.xyz/" target="_blank" one-link-mark="yes">摄影吧！</a><b>|</b><span>Website By </span><a href="https://ifalse.onll.cn/" target="_blank" one-link-mark="yes">神秘布偶猫</a><span>&</span><a href="http://wpa.qq.com/msgrd?v=3&uin=2426059596&site=qq&menu=yes">LongSir</a><b>|</b><span>
    <div><span>BackGround:-信阳下行场跨线桥- 拍摄By:</span><a href="https://wz2m.cn">旺子</a></div>
    <div><span>仓库开源：</span><a href="https://github.com/WJHXD1B/gaokao-clock/">Github</a><b> | </b><a href="https://gitee.com/zhan-zha/gaokao-clock/">Gitee</a></div>
</div>
        <!--</p>-->
    </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <div class="footer">
        <p>
            
        </p>
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://unpkg.zhimg.com/jquery@3.5.0/dist/jquery.min.js"></script>

  <script>
    var oSpan = document.getElementById("p");

    function tow(n) {
      return n >= 0 && n < 10 ? '0' + n : '' + n;
    }
    function getDate() {
      var oDate = new Date();//获取日期对象
      var oldTime = oDate.getTime();//现在距离1970年的毫秒数
      var newDate = new Date('2023/6/7 00:00:00');
      var newTime = newDate.getTime();//2023年高考离1970年的毫秒数
      var second = Math.floor((newTime - oldTime) / 1000);//未来时间距离现在的秒数
      var day = Math.floor(second / 86400);//整数部分代表的是天；一天有24*60*60=86400秒 ；
      second = second % 86400;//余数代表剩下的秒数；
      var hour = Math.floor(second / 3600);//整数部分代表小时；
      second %= 3600; //余数代表 剩下的秒数；
      var minute = Math.floor(second / 60);
      second %= 60;
      // document.getElementById("day").innerHTML = tow(day) + '<span class="time">天</span>';
      var str = tow(day) + '<span class="time"> 天</span>'
        + tow(hour) + '<span class="time"> 时</span>'
        + tow(minute) + '<span class="time"> 分</span>'
        + tow(second) + '<span class="time"> 秒</span>';
      oSpan.innerHTML = str;
    }
    getDate();
    setInterval(getDate, 500);

    var saying_list = ["人在旅途，难免会遇到荆棘和坎坷，但风雨过后，一定会有美丽的彩虹。",
      "要想改变命运，首先改变自己。",
      "思路决定出路，气度决定高度，细节决定成败，性格决定命运。",
      "没有退路的时候，正是潜力发挥最大的时候。",
      "时间是个常数，但也是个变数。勤奋的人无穷多，懒惰的人无穷少。",
      "时光就像一辆畜力车，它的速度取决于我们手中的鞭子。",
      "智者创造机会，强者把握机会，弱者坐等机会。",
      "有人在光明中注视着阴影，有人在阴影中眺望着光明。",
      "不好等待机会，而要创造机会。",
      "炫耀是需要观众的，而炫耀恰恰让我们失去观众。",
      "最可怕的敌人，就是没有坚强的信念。",
      "在人生的道路上，即使一切都失去了，只要一息尚存，你就没有丝毫理由绝望。因为失去的一切，又可能在新的层次上复得。",
      "我一直觉得，忧愁是好的，孤独也是好的，他们让我慢慢成长，变成一个与众不同的混蛋。",
      "那些再也没法弥补的遗憾，你只能配着酒和曾经围绕在那个故事旁边的人，偶尔说一说。",
      "路是自己选的，后悔的话，也只能往自己的肚子里咽。",
      "这一秒不放弃，下一秒就有希望！坚持下去就会成功！",
      "生命不在长而在于好，只要每一次尽力的演示，都值得鼓励与喝采。",
      "我们因为拥有青春而幸福快乐，不要给自己留下太多的遗憾，不要等到失去的时候才懂得珍惜。",
      "人生应该有所追求，但暂时得不到并不会阻碍日常生活的幸福，因此，拥有一颗平常心，是人生必不可少的润滑液剂。",
      "逆境总是有的，人生总要进击。愿你不要屈从于命运的安排，坚韧不拔，锲而不舍！做永远的生活强者！",
      "功到自然成，成功之前难免有失败，然而只要能克服困难，坚持不懈地努力，那么，成功就在眼前。",
      "胜利贵在坚持，要取得胜利就要坚持不懈地努力，饱尝了许多次的失败之后才能成功。",
      "生命不在长而在于好，只要每一次尽力的演示，都值得鼓励与喝彩。",
      "知识给人重量，成就给人光彩，大多数人只是看到了光彩，而不去称量重量。",
      "每一个成功者都有一个开始。勇于开始，才能找到成功的路。",
      "终点回到原点享受那走不完的路。",
      "活着的目的不在于永远活着，而在于永远活出自己。",
      "读书要有感受，要有审美感，对他人的金玉良言，要能融会贯通，并使之付诸实现。",
      "梦想一旦被付诸行动，就会变得神圣。",
      "既然选择了，就要勇敢走下去，不管前方有多少困难，都应该义无反顾，一直向前。",
      "坚韧是成功的一大要素，只要在门上敲得够久、够大声，终会把人唤醒的。",
      "抬得起头，无论身处逆境还是顺境中，都要保持一种乐观进取的心态。",
      "如果你希望成功，以恒心为良友，以经验为参谋，以小心为兄弟，以希望为哨兵。",
      "当你感到悲哀痛苦时，最好是去学些什么东西。学习会使你永远立于不败之地。",
      "前有阻碍，奋力把它冲开，运用炙热的激情，转动心中的期待，血在澎湃，吃苦流汗算什么。",
      "用爱生活，你会使自己幸福！用爱工作，你会使很多人幸福！",
      "每个人都有潜在的能量，只是很容易被习惯所粉饰，被时光所迷离，被惰性所消磨。",
      "有些事情，不谈是个结，谈开了是个疤。",
      "就算再想哭，也要微笑的说一句：你大爷的！",
      "一个人，要是不逼自己一把，根本不知道自己有多优秀。",
      "一个人有钱没钱不一定，但如果这个人没有了梦想，这个人穷定了。",
      "人生在世，不出一番好议论，不留一番好事业，终日饱食暖衣，不所用心，何自别于禽兽。",
      "不求与人相比，但求超越自己，要哭就哭出激动的泪水，要笑就笑出成长的性格。",
      "逆境磨练人、逆境是老师、逆境之苦可变甜。",
      "觉得自己做的到和不做的到，其实只在一念之间。",
      "没有人陪你走一辈子，所以你要适应孤独，没有人会帮你一辈子，所以你要奋斗一生。",
      "不论你在什麽时候结束，重要的是结束之後就不要悔恨。",
      "困难与折磨对于人来说，是一把打向坯料的锤，打掉的应是脆弱的铁屑，锻成的将是锋利的钢刀。",
      "如果心胸不似海，又怎能有海一样的事业。",
      "我们什么都没有，唯一的本钱就是青春。梦想让我与众不同，奋斗让我改变命运！",
      "自信的人，懂得“天生我才必有用”的道理，依靠着必胜的信心，在艰苦的搏击中，驶向成功的彼岸。",
      "十数载寒窗蛰伏，只等这一天破茧而出；无数人殷情期待，只为这一刻羽化成蝶。",
      "如果我们投一辈子石块，即使闭着眼睛，也肯定有一次击中成功。",
      "命运掌握在自己手里，命运的好坏由自己去创造。",
      "今天的成功是因为昨天的积累，明天的成功则依赖于今天的努力。成功需要一个过程。",
      "成功的道路上，肯定会有失败；对于失败，我们要正确地看待和对待，不怕失败者，则必成功；怕失败者，则一无是处，会更失败。",
      "抽出时间去学习，凡事从小做起，不怕单调和重复，长期的积累坚持，想不成功，也难。",
      "一分耕耘，一分收获。",
      "这条路，尽管洒满泪水，却不是一条废弃之路。",
      "世上最美的，莫过于从泪水中挣脱出来的那个微笑。",
      "我不是蠢人，从此我要靠自己的双脚前行，永远抛弃那自怜自贱的拐杖。",
      "世上没有绝望的处境，只有对处境绝望的人。",
      "志在山顶的人，不会贪念山腰的风景。",
      "我不去想是否能够成功，既然选择了远方，便只顾风雨兼程！",
      "用爱生活，你会使自己幸福！用爱工作，你会使很多人幸福！",
      "只做第一个我，不做第二个谁。",
      "要让事情改变，先改变自己；要让事情变得更好，先让自己变得更强。",
      "别人不会在意你的一切，只有自己成就自己，才能在别人面前抬得起头。",
      "面对机会，你要勇敢，输也罢、赢也罢，都是一种经历，是一笔花钱买不来的财富。",
      "时光匆匆流逝过，平平淡淡才是真。忍耐任由风雨过，守得云开见月明。",
      "天下没有不可能的事，只要你有信心、有勇气，腔子里有热血，灵魂里有真爱。",
      "犯错，就诚实地认错。狡辨诿过只会害了你自己。",
      "总是在最初的青春挥霍着岁月的生命，总是在最后的时光忆起最初的懈怠，时光一去不返，生命耗费不再，愿你能够珍爱生命，珍惜时间！",
      "古之立大事者，不惟有超世之材，亦必有坚忍不拨之志。",
      "寄言燕雀莫相唣，自有云霄万里高。",
      "每天提醒自己，不要忘记梦想。",
      "面对不公平的东西，不要抱怨，你的不公平可能恰恰是别人的公平。所以，你不如去努力的奋斗，争取你自己最合适的公平。",
      "成功不是做你喜欢做的事，而是做你应该做的事。",
      "如果不会飞翔，理想的翅膀反倒成了生活的累赘。",
      "你的努力，也许有人会讥讽；你的执着，也许不会有人读懂。在别人眼里你也许是小丑，在自己心中你就是国王！",
      "我们最大的悲哀，是迷茫地走在路上，看不到前面的希望；我们最坏的习惯，是苟安于当下生活，不知道明天的方向。",
      "生命就是一场变幻莫测的颠簸，谁也无法左右，但是却是能左右自己的心。爱走了，还是有下一场的花开，真心付出就无怨无悔，曾经的美好也是买不到的回忆。",
      "人生是需要奋斗的，只有你奋斗了，失败后才会问心无愧；人生是单行路，只有奋斗了，才会有光明的前途；人生中有许多的竞争对手，正因有这么多的竞争对手，所以我们更得奋斗！",
      "时光是个宝，随时都在跑，任你去追逐，逝去又无踪，若要紧跟随，珍惜每一秒，发奋又图强，人生好荣光。",
      "机遇是难求的，失去了就不会再来，把握好现有的机会，努力进取，那么你将会得到不菲的收获。",
      "那些在困难面前能够坚持到底、努力奋进的人最终能够战胜一切困难，取得最后的成功。",
      "环境和条件不是学习的决定因素，只有人的内因最重要，不能借口学习条件不好而不努力学习。",
      "只顾眼前的利益，得到的只是短暂的欢愉；目标高远，但也要面对现实。把理想和现实结合起来，才有可能成功。",
      "人们总是在努力珍惜未得到的，而遗忘了所拥有的。",
      "我不去想是否能够成功，既然选择了远方，便只顾风雨兼程！",
      "前有阻碍，奋力把它冲开，运用炙热的激情，转动心中的期待，血在澎湃，吃苦流汗算什么。",
      "这个社会是存在不公平的，不要抱怨，因为没有用！人总是在反省中进步的！",
      "我们什么都没有，唯一的本钱就是青春。梦想让我与众不同，奋斗让我改变命运！",
      "永远不要埋怨你已经发生的事情，要么就改变它，要么就安静的接受它。",
      "打磨着你的锐气，消耗着你的梦想，然后才能把一个足够圆滑的自己交给社会。",
      "如果你坚信石头会开花，那么开花的不仅仅是石头。",
      "不要把负能量看做是消极，仇恨。其实它的作用是激励，它其实是现实。",
      "成功便是站起比倒下多一次。",
      "成功就是你被击落到失望的深渊之后反弹得有多高。",
      "没人扶你的时候，自己站直，路还长，背影要美。	"
      "像狗一样的学，像绅士一样的玩。"];

    function sayings() {
      return saying_list[Math.floor(Math.random() * 100)]
    }

    $("#saying-text").html(sayings());
    $("#saying").fadeIn();
    setInterval(function () {
      $("#saying").fadeOut("slow", function () {
        $("#saying-text").html(sayings());
        $("#saying").fadeIn();
      });
    }, 10000);

  </script>
</body>

</html>