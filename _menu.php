<div class="container">


    <div class="display-flex-row menu-pc">

        <div class="col-4 main-menu display-flex-column menu-urad">
            <div class="menu-header">
                <h4 class="menu-nadpis">Obecní úřad</h4>
            </div>
            <div class="menu-body display-flex-column">
                <a class="menu-body-odkaz <?php if ($url1=="kontakty"){echo "menu-active-blue";} ?>" href="/kontakty/">Kontakty</a>
                <a class="menu-body-odkaz <?php if ($url1=="uredni-deska"){echo "menu-active-blue";} ?>" href="/uredni-deska/">Úřední deska</a>
                <a class="menu-body-odkaz <?php if ($url1=="dokumenty"){echo "menu-active-blue";} ?>" href="/dokumenty/">Dokumenty</a>
                <a class="menu-body-odkaz" href="/povinna-publicita/">Povinná publicita</a>
                <a class="menu-body-odkaz <?php if ($url1=="uzitecne-informace"){echo "menu-active-blue";} ?>" href="/uzitecne-informace/">Užitečné informace</a>
                <a class="menu-body-odkaz" href="/poskytovani-informaci/">Poskytování informací</a>
            </div>
        </div>

        <div class="col-4 main-menu display-flex-column menu-obec">
            <div class="menu-header">
                <h4 class="menu-nadpis">Obec</h4>
            </div>
            <div class="menu-body display-flex-column">
                <a class="menu-body-odkaz" href="/zakladni-materska-skola/">Základní a mateřská škola</a>
                <a class="menu-body-odkaz <?php if ($url1=="podnikatele-firmy"){echo "menu-active-blue";} ?>" href="/podnikatele-firmy/">Podnikatelé a firmy</a>
                <a class="menu-body-odkaz" href="/svoz-odpadu/">Svoz odpadů</a>
                <a class="menu-body-odkaz <?php if ($url1=="jizdni-rady"){echo "menu-active-blue";} ?>" href="/jizdni-rady/">Jízdní řády</a>
                <a class="menu-body-odkaz" href="/o-obci/">O obci</a>
                <a class="menu-body-odkaz" href="/posta-partner/">Pošta Partner</a>
            </div>
        </div>

        <div class="col-4 main-menu display-flex-column menu-cas">
            <div class="menu-header">
                <h4 class="menu-nadpis">Volný čas</h4>
            </div>
            <div class="menu-body display-flex-column">
                <a class="menu-body-odkaz <?php if ($url1=="akce-udalosti"){echo "menu-active-blue";} ?>" href="/akce-udalosti/">Akce a události</a>
                <a class="menu-body-odkaz <?php if ($url1=="pronajem-obecnich-prostor"){echo "menu-active-blue";} ?>" href="/pronajem-obecnich-prostor/">Pronájem obecních prostor</a>
                <a class="menu-body-odkaz <?php if ($url1=="osicka-sedmicka"){echo "menu-active-blue";} ?>" href="/osicka-sedmicka/">Osická sedmička</a>
                <a class="menu-body-odkaz" href="/jsdh-osice/">JSDH Osice</a>
                <a class="menu-body-odkaz" href="/knihovna/">Knihovna</a>
            </div>
        </div>

    </div>


    <div class="menu-mobile">
        <button onClick="menuHandler()" class="menu-img">Menu <div class="menu-img-menu"></div></button>
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

