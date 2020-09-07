<!DOCTYPE html>

<?php
  require_once("common.php");
?>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hallmark Tourism - Gallery</title>
<?php
  common_CSS();
?>
</head>


<body class="body-wrapper ">
  <div class="main-wrapper">

    <!-- HEADER Start -->    
    <?php
      common_Header();
    ?>
    <!-- HEADER End -->



    <!-- PAGE TITLE -->
    <section class="pageTitle" style="background-image:url(assets/img/newpageHeader/page_title_bg_03.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="titleTable">
              <div class="titleTableInner">
                <div class="pageTitleInfo">
                  <h1>Gallery</h1>
                  <div class="under-border"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION FILTER-->
    <section class="mainContentSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="filter-container isotopeFilters">
              <ul class="list-inline filter">
                <li class="active"><a href="#" data-filter="*">all places</a></li>
                <li><a href="#" data-filter=".india">India</a></li>
                <li><a href="#" data-filter=".africa">South africa</a></li>
                <li><a href="#" data-filter=".america">america</a></li>
                <li><a href="#" data-filter=".asia">asia</a></li>
                <li><a href="#" data-filter=".europe">europe</a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="row isotopeContainer" id="container">
        
          <div class="col-sm-3 isotopeSelector india">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/India_Kerala.jpg" alt="Kerala">
                <h4>Kerala <br> India </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/India_Kerala.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector india">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/India_Kashmir.jpg" alt="Kashmir">
                <h4>Kashmir <br> India </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/India_Kashmir.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector india">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/India_Rajasthan.jpg" alt="Rajasthan">
                <h4>Rajasthan <br> India </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/India_Rajasthan.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector india">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/India_Goa.jpg" alt="Goa">
                <h4>Goa <br> India </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/India_Goa.jpg"></a>
                </div>
              </figure>
            </article>
          </div>





          <div class="col-sm-3 isotopeSelector europe">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Europe_Paris.jpg" alt="Paris">
                <h4>Paris <br> Eurpoe </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Europe_Paris.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector europe">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Europe_London.jpg" alt="London">
                <h4>London <br> Eurpoe </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Europe_London.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector europe">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Europe_Porto.jpg" alt="Porto">
                <h4>Porto <br> Eurpoe </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Europe_Porto.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector europe">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Europe_Rome.jpg" alt="Rome">
                <h4>Rome <br> Eurpoe </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Europe_Rome.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector america">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/America_NewYork.jpg" alt="New York">
                <h4>New York <br> America </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/America_NewYork.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector america">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/America_LosAngels.jpg" alt="Los Angels">
                <h4>Los Angels <br> America </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/America_LosAngels.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector america">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/America_SanFrancisco.jpg" alt="San Francisco">
                <h4>San Francisco <br> America </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/America_SanFrancisco.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector america">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/America_Washington.jpg" alt="Washington">
                <h4>Washington <br> America </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/America_Washington.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector africa">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Africa_Johannesburg.jpg" alt="Johannesburg">
                <h4>Johannesburg <br> Africa </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Africa_Johannesburg.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector africa">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Africa_CapeTown.jpg" alt="Cape Town">
                <h4>Cape Town <br> Africa </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Africa_CapeTown.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector africa">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Africa_SunCity.jpg" alt="Sun City">
                <h4>Sun City <br> Africa </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Africa_SunCity.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector africa">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Africa_Knysna.jpg" alt="Knysna">
                <h4>Knysna <br> Africa </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Africa_Knysna.jpg"></a>
                </div>
              </figure>
            </article>
          </div>


          <div class="col-sm-3 isotopeSelector asia">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Asia_Singapore.jpg" alt="Singapore">
                <h4>Singapore <br> Asia </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Asia_Singapore.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector asia">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Asia_Dubai.jpg" alt="Dubai">
                <h4>Dubai <br> Asia </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Asia_Dubai.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector asia">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Asia_Indonesia.jpg" alt="Indonesia">
                <h4>Indonesia <br> Asia </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Asia_Indonesia.jpg"></a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-3 isotopeSelector asia">
            <article class="">
              <figure>
                <img src="assets/img/newGallery/Asia_Thailand.jpg" alt="Thailand">
                <h4>Thailand <br> Asia </h4>
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a class="fancybox-pop" rel="portfolio-1" href="assets/img/newGallery/Asia_Thailand.jpg"></a>
                </div>
              </figure>
            </article>
          </div>




        </div>
      </div>
    </section>


<!-- FOOTER Start -->

<?php
  common_Footer();
  common_JS();
?>

<!-- FOOTER End -->


</div>

</body>

</html>

