<div class="container">


    <div class="display-flex-row menu-pc">

        <div class="col-4 main-menu display-flex-column menu-urad">
            <div class="menu-header">
                <h4 class="menu-nadpis">Obecní úřad</h4>
            </div>
            <div class="menu-body display-flex-column">
                <a class="menu-body-odkaz" href="">Kontakty</a>
                <a class="menu-body-odkaz" href="">Úřední deska</a>
                <a class="menu-body-odkaz" href="/obec-Osice-php/page_dokumenty.php">Dokumenty</a>
                <a class="menu-body-odkaz" href="">Povinná publicita</a>
                <a class="menu-body-odkaz" href="">Užitečné informace</a>
                <a class="menu-body-odkaz" href="">Poskytování informací</a>
            </div>
        </div>

        <div class="col-4 main-menu display-flex-column menu-obec">
            <div class="menu-header">
                <h4 class="menu-nadpis">Obec</h4>
            </div>
            <div class="menu-body display-flex-column">
                <a class="menu-body-odkaz" href="">Základní a mateřská škola</a>
                <a class="menu-body-odkaz" href="">Podnikatelé a firmy</a>
                <a class="menu-body-odkaz" href="">Svoz odpadů</a>
                <a class="menu-body-odkaz" href="">Jízdní řády</a>
                <a class="menu-body-odkaz" href="">O obci</a>
                <a class="menu-body-odkaz" href="">Pošta Partner</a>
            </div>
        </div>

        <div class="col-4 main-menu display-flex-column menu-cas">
            <div class="menu-header">
                <h4 class="menu-nadpis">Volný čas</h4>
            </div>
            <div class="menu-body display-flex-column">
                <a class="menu-body-odkaz" href="">Akce a události</a>
                <a class="menu-body-odkaz" href="">Pronájem obecních prostor</a>
                <a class="menu-body-odkaz" href="">Osická sedmička</a>
                <a class="menu-body-odkaz" href="">JSDH Osice</a>
                <a class="menu-body-odkaz" href="">Knihovna</a>
            </div>
        </div>

    </div>


    <div class="menu-mobile">
        <p class="menu-img">Menu <img src="./img/prvky/menu.png" alt="menu"/></p>
        <div class="display-flex-column menu-mobile-body">
            <div class="display-flex-column menu-mobile-body-inner">
                <p class="menu-mobile-nadpis">Obecní úřad</p>
                <a class="menu-mobile-odkaz" href="">Kontakty</a>
                <a class="menu-mobile-odkaz" href="">Úřední deska</a>
                <a class="menu-mobile-odkaz" href="">Dokumenty</a>
                <a class="menu-mobile-odkaz" href="">Povinná publicita</a>
                <a class="menu-mobile-odkaz" href="">Užitečné informace</a>
                <a class="menu-mobile-odkaz" href="">Poskytování informací</a>
            </div>
            <div class="display-flex-column menu-mobile-body-inner">
                <p class="menu-mobile-nadpis">Obec</p>
                <a class="menu-mobile-odkaz" href="">Základní a mateřská škola</a>
                <a class="menu-mobile-odkaz" href="">Podnikatelé a firmy</a>
                <a class="menu-mobile-odkaz" href="">Svoz odpadů</a>
                <a class="menu-mobile-odkaz" href="">Jízdní řády</a>
                <a class="menu-mobile-odkaz" href="">O obci</a>
                <a class="menu-mobile-odkaz" href="">Pošta Partner</a>
            </div>
            <div class="display-flex-column menu-mobile-body-inner">
                <p class="menu-mobile-nadpis">Volný čas</p>
                <a class="menu-mobile-odkaz" href="">Akce a události</a>
                <a class="menu-mobile-odkaz" href="">Pronájem obecních prostor</a>
                <a class="menu-mobile-odkaz" href="">Osická sedmička</a>
                <a class="menu-mobile-odkaz" href="">JSDH Osice</a>
                <a class="menu-mobile-odkaz" href="">Knihovna</a>
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