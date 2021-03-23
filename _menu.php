<div class="container">


    <div class="display-flex-row menu-pc">

        <div class="col-4 main-menu display-flex-column menu-urad">
            <div class="menu-header">
                <h4 class="menu-nadpis">Obecní úřad</h4>
            </div>
            <div class="menu-body display-flex-column">
                <a class="menu-body-odkaz" href="/kontakty/">Kontakty</a>
                <a class="menu-body-odkaz" href="/uredni-deska/">Úřední deska</a>
                <a class="menu-body-odkaz" href="/dokumenty/">Dokumenty</a>
                <a class="menu-body-odkaz" href="/povinna-publicita/">Povinná publicita</a>
                <a class="menu-body-odkaz" href="/uzitecne-informace/">Užitečné informace</a>
                <a class="menu-body-odkaz" href="/poskytovani-informaci/">Poskytování informací</a>
            </div>
        </div>

        <div class="col-4 main-menu display-flex-column menu-obec">
            <div class="menu-header">
                <h4 class="menu-nadpis">Obec</h4>
            </div>
            <div class="menu-body display-flex-column">
                <a class="menu-body-odkaz" href="/zakladni-materska-skola/">Základní a mateřská škola</a>
                <a class="menu-body-odkaz" href="/podnikatele-firmy/">Podnikatelé a firmy</a>
                <a class="menu-body-odkaz" href="/svoz-odpadu/">Svoz odpadů</a>
                <a class="menu-body-odkaz" href="/jizdni-rady/">Jízdní řády</a>
                <a class="menu-body-odkaz" href="/o-obci/">O obci</a>
                <a class="menu-body-odkaz" href="/posta-partner/">Pošta Partner</a>
            </div>
        </div>

        <div class="col-4 main-menu display-flex-column menu-cas">
            <div class="menu-header">
                <h4 class="menu-nadpis">Volný čas</h4>
            </div>
            <div class="menu-body display-flex-column">
                <a class="menu-body-odkaz" href="/akce-udalosti/">Akce a události</a>
                <a class="menu-body-odkaz" href="/pronajem-obecnich-prostor/">Pronájem obecních prostor</a>
                <a class="menu-body-odkaz" href="/osicka-sedmicka/">Osická sedmička</a>
                <a class="menu-body-odkaz" href="/jsdh-osice/">JSDH Osice</a>
                <a class="menu-body-odkaz" href="/knihovna/">Knihovna</a>
            </div>
        </div>

    </div>


    <div class="menu-mobile">
        <p class="menu-img">Menu <img src="/img/prvky/menu.png" alt="menu"/></p>
        <div class="display-flex-column menu-mobile-body">
            <div class="display-flex-column menu-mobile-body-inner">
                <p class="menu-mobile-nadpis">Obecní úřad</p>
                <a class="menu-mobile-odkaz" href="/kontakty/">Kontakty</a>
                <a class="menu-mobile-odkaz" href="/uredni-deska/">Úřední deska</a>
                <a class="menu-mobile-odkaz" href="/dokumenty/">Dokumenty</a>
                <a class="menu-mobile-odkaz" href="/povinna-publicita/">Povinná publicita</a>
                <a class="menu-mobile-odkaz" href="/uzitecne-informace/">Užitečné informace</a>
                <a class="menu-mobile-odkaz" href="/poskytovani-informaci/">Poskytování informací</a>
            </div>
            <div class="display-flex-column menu-mobile-body-inner">
                <p class="menu-mobile-nadpis">Obec</p>
                <a class="menu-mobile-odkaz" href="/zakladni-materska-skola/">Základní a mateřská škola</a>
                <a class="menu-mobile-odkaz" href="/podnikatele-firmy/">Podnikatelé a firmy</a>
                <a class="menu-mobile-odkaz" href="/svoz-odpadu/">Svoz odpadů</a>
                <a class="menu-mobile-odkaz" href="/jizdni-rady/">Jízdní řády</a>
                <a class="menu-mobile-odkaz" href="/o-obci/">O obci</a>
                <a class="menu-mobile-odkaz" href="/posta-partner/">Pošta Partner</a>
            </div>
            <div class="display-flex-column menu-mobile-body-inner">
                <p class="menu-mobile-nadpis">Volný čas</p>
                <a class="menu-mobile-odkaz" href="/akce-udalosti/">Akce a události</a>
                <a class="menu-mobile-odkaz" href="/pronajem-obecnich-prostor/">Pronájem obecních prostor</a>
                <a class="menu-mobile-odkaz" href="/osicka-sedmicka/">Osická sedmička</a>
                <a class="menu-mobile-odkaz" href="/jsdh-osice/">JSDH Osice</a>
                <a class="menu-mobile-odkaz" href="/knihovna/">Knihovna</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(window).scroll(function(){
      const scroll_value = $(window).scrollTop();
      if (scroll_value > 529) {
        if (scroll_value > (document.body.scrollHeight - 1150)) return;

        const value = $(window).scrollTop() - 380;
        $(".main-menu-active").css({"marginTop": value + "px"});
      } else {
        $(".main-menu-active").css({"marginTop": "0px"});
      }
    });
</script>