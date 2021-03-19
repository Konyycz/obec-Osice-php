<?php include "_top.php"; ?>
<div class="container">
    <div class="page-body col-12 col-lg-8" style="margin-bottom: 30px;">
      <h6 class="sekce-nadpis">Osice > Obecní úřad > Úřední deska > Archiv</h6>
      <div class="uredni-deska">
        <h3 class="informace-nadpis">Úřední deska - archiv</h3>

        <div class="display-flex-row filtrovani-archiv">
          <div class="display-flex-column col-12 col-md-6 col-lg-2">
            <label class="combobox-label" for="year">Rok:</label>
            <select class="combobox" name="year" id="year">
              <option value="2021"></option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
            </select>
          </div>
            
          <div class="display-flex-column col-12 col-md-6 col-lg-2">
            <label class="combobox-label" for="month">Měsíc:</label>
            <select class="combobox" name="month" id="month">
              <option value="2021"></option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
            </select>
          </div>

          <div class="display-flex-column col-12 col-lg-5">
            <label class="combobox-label" for="category">Kategorie</label>
            <select class="combobox" name="category" id="category">
              <option value="a"></option>
              <option value="b">b</option>
              <option value="c">c</option>
            </select>
          </div>
          <button class="filtrovani-archiv-button">Zobrazit</button>
        </div>

        <div class="display-flex-column">
          <div class="karta uredni-deska-karta karta-zluty-bok">
            <a class="uredni-deska-nadpis" href="">Informace pro cestující s platností<br> od 19.10.2020</a>

            <div class="display-flex-row"> 
              <div class="display-flex-column col-12 col-md-6">
                <h6 class="uredni-deska-kestazeni">Ke stažení:</h6>
                <a class="uredni-deska-text" href="">informace-pdf.pdf</a>
                <a class="uredni-deska-text" href="">obrazek.jpg</a>
              </div>

              <div class="display-flex-column col-12 col-md-6" style="margin-top: 10px;">
                <p class="uredni-deska-vyveseno">Vyvěšeno od: 1.1.2020</p>
                <p class="uredni-deska-vyveseno">Vyvěsil: <strong>Ing. Karel Novák</strong></p>
                <p class="uredni-deska-vyveseno">Vyvěšeno do: 1.3.2020</p>
              </div>
            </div>
          </div>



          <div class="karta uredni-deska-karta karta-zluty-bok">
            <a class="uredni-deska-nadpis" href="">Informace pro cestující s platností<br> od 19.10.2020</a>
            
            
            <div class="display-flex-row"> 
              <div class="display-flex-column col-12 col-md-6">
                <h6 class="uredni-deska-kestazeni">Ke stažení:</h6>
                <a class="uredni-deska-text" href="">informace-pdf.pdf</a>
                <a class="uredni-deska-text" href="">obrazek.jpg</a>
              </div>

              <div class="display-flex-column col-12 col-md-6" style="margin-top: 10px;">
                <p class="uredni-deska-vyveseno">Vyvěšeno od: 1.1.2020</p>
                <p class="uredni-deska-vyveseno">Vyvěsil: <strong>Ing. Karel Novák</strong></p>
                <p class="uredni-deska-vyveseno">Vyvěšeno do: 1.3.2020</p>
              </div>
            </div>
          </div>

          <div class="karta uredni-deska-karta karta-zluty-bok">
            <a class="uredni-deska-nadpis" href="">Informace pro cestující s platností<br> od 19.10.2020</a>
            
            
            <div class="display-flex-row"> 
              <div class="display-flex-column col-12 col-md-6">
                <h6 class="uredni-deska-kestazeni">Ke stažení:</h6>
                <a class="uredni-deska-text" href="">informace-pdf.pdf</a>
                <a class="uredni-deska-text" href="">obrazek.jpg</a>
              </div>

              <div class="display-flex-column col-12 col-md-6" style="margin-top: 10px;">
                <p class="uredni-deska-vyveseno">Vyvěšeno od: 1.1.2020</p>
                <p class="uredni-deska-vyveseno">Vyvěsil: <strong>Ing. Karel Novák</strong></p>
                <p class="uredni-deska-vyveseno">Vyvěšeno do: 1.3.2020</p>
              </div>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>

  <?php include "_bottom.php"; ?>

<script>

  $(".menu-urad").addClass('main-menu-active');

</script>