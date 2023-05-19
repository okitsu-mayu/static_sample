<body>
  <button type="button" class="btn js-btn">
    <span class="btn-line"></span>
  </button>
  <nav>
    <ul class="menu">
        <?php if($lang == "en"){ ?>
            <!-- 英語版メニュー -->
            <li class="menu-list"><a href="/static_sample">TOP</a></li>
            <li class="menu-list"><a href="sample1">sample1</a></li>
            <li class="menu-list"><Button type="button" onclick="setLanguage('ja')">日本語</Button></li>
        <?php }else{ ?>
            <!-- 日本語版メニュー -->
            <li class="menu-list"><a href="/static_sample">トップ</a></li>
            <li class="menu-list"><a href="sample1">サンプル1</a></li>
            <li class="menu-list"><a href="sample2">サンプル2</a></li>
            <li class="menu-list"><Button type="button" onclick="setLanguage('en')">English</Button></li>
        <?php }?>
    </ul>
  </nav>