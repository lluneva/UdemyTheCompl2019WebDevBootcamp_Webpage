<section id="head-image-section" class="section-normal">

  <div class="row">
    <div class="col-sm-4 head-image">
      <img class="main-pic-index d-none d-sm-block" src="images\strawberry (1).png" alt="strawberries">
    </div>

    <div class="col-md-8 head-image-textbox">
      <a href="?page=index">
        <h4 class="head-pic-text "> Latvijā audzētas zemenes<h4>
      </a>
      <button type="button" class="btn btn-secondary btn-md applyForNewsletterMediumBtn" data-toggle="modal"
        data-target="#applyNewsModal"> <i class="fas fa-envelope"></i>
        Piesakies jaunumiem savā e-pastā</button>
    </div>
  </div>

</section>


<section id="values" class="section-normal">

  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 value-box">
      <i class="fas fa-leaf"></i>
      <p> Labas </p>
      <span> Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </span>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 value-box">
      <i class="fas fa-users"></i>
      <p> Garšīgas</p>
      <span> Doloribus ab ipsum odit, pariatur dignissimos nam!
      </span>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 value-box">
      <i class="fas fa-people-carry"></i>
      <p> Svaigas </p>
      <span> Doloribus ab ipsum odit, pariatur dignissimos nam!
      </span>
    </div>
  </div>
</section>

<section id="testimonials" class="section-normal section-colored-bg">

  <div class="row">
    <div class="col-sm-12 testimonials-section d-none d-sm-block">
      <h2 class="section-title-colored-bg"> mūsu klienti runā </h2>

      <div id="testimonialsCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">

        <div class="carousel-inner ">
          <div class="carousel-item active">

            <h3 class="testimonial-text">"Quae reprehenderit voluptate nihil mollitia delectus."</h3>
            <img class="testimonial-img" src="images\woman-img.jpg" alt="">
            <em>Kristīne, Rīga</em>

          </div>
          <div class="carousel-item ">

            <h3 class="testimonial-text">"Lorem ipsum dolor sit. Quae reprehenderit voluptate nihil mollitia delectus"</h3>
            <img class="testimonial-img" src="images\testimonials-img1.jpeg" alt="">
            <em>Jana, Rīga</em>

          </div>
          <div class="carousel-item ">

            <h3 class="testimonial-text">"Quae reprehenderit voluptate nihil mollitia delectus."</h3>
            <img class="testimonial-img" src="images\man-image.jpg" alt="">
            <em>Jānis Bērziņš</em>
          </div>
          <div class="carousel-item ">

            <h3 class="testimonial-text">"Lorem ipsum rerum! Itaque."</h3>
            <img class="testimonial-img" src="images\minion.jpg" alt="">
            <em>Guna, Rīga</em>

          </div>
          <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>



</section>


<section id="newsletter" class="section-normal">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 applyForNewsletter">
        <h2 class="section-title-white-bg">piesakies mūsu jaunumiem par: </h2>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 newsletter-topic-box"  data-toggle="tooltip" data-placement="bottom" title="Tā kā zemeņu sezonā piegāde ir superatkarīga no laiak apstākļiem - jaunākās ziņas e-pastā">
        <img class="newsletter-icon  newsletterTopicsTooltip" src="
          images\calendar.png">
        <p class="newsletterTopicListItem">tuvākajiem piegādes laikiem</p>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 newsletter-topic-box" data-toggle="tooltip" data-placement="bottom" title="Tā kā zemeņu sezonā cenas mainās visai strauji, tad ir izdevīgi to saņemt uzreiz e-pastā!">
        <img class="newsletter-icon" src="images\price-tag.png">
        <p class="newsletterTopicListItem newsletterTopicsTooltip" >aktuālajām
          cenām</p>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 newsletter-topic-box">
        <img class="newsletter-icon" src="images\newspaper.png">
        <p class="newsletterTopicListItem">dažādi saimniecības jaunumi</p>
      </div>
    </div>

  </div>





  <button type="button" class="btn btn-secondary btn-md applyForNewsletterMediumBtn" data-toggle="modal" data-target="#applyNewsModal">
    <i class="fas fa-envelope"></i>
    Pieteikties</button>

  <!-- Modal -->
  <div class="modal fade" id="applyNewsModal" tabindex="-1" role="dialog" aria-labelledby="applyNewsModalLabel"
    aria-hidden="true">
    <div class="container modal-dialog " role="document">
      <div class="modal-content">
        <form method="POST" accept-charset="UTF-8" class="clientForm" name="newsletterForm" action="post.php" onsubmit="return validateForm()">
          <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <div class="form-group">
            <p class="validation-box" id="form-text"> </p>
            <label for="email">E-pasta adrese</label>
            <input type="email" class="form-control input-lg" name="form_email" id="email_Input" placeholder="Ievadi savu e-pasta adresi"
              required>
            <p class="validation-box email-text"> </p>
          </div>

          <div class="form-group">
            <label for="name">Mēs labprāt zinātu kā Tevi uzrunāt</label>
            <input type="text" class="form-control input-lg" id="name_Input" name="form_name" placeholder="Tavs vārds">
            <p class="validation-box name-text"> </p>

          </div>


          <div class="form-group " id="agree-terms">
            <label class="form-check-label">
              <input id="agree-terms" type="checkbox" class="form-check-input" value="" required>
Piekrītu savu personas datu apstrādei, lai saņemtu
              informatīvus materiālus no "Super zemeņu piegādātāja SIA". Ar šo es apstiprinu, ka esmu informēts/-a, ka
              man ir tiesības
              jebkurā brīdī atsaukt savu piekrišanu datu apstrādei, tiesības pieprasīt to labošanu vai dzēšanu.
              Apzinos, ka dati tiks saglabāti un apstrādāti atbilstoši "Super zemeņu piegādātāja SIA" <span onclick="openPrivacyPolicy()">
                privātuma politikai</span>.</label>
          </div>
          <div class="button-wrapper">
            <button class="btn btn-secondary pieteikties-jaunumiem" type="submit" onclick="validateForm()">Pieteikties</button></div>

        </form>

      </div>

    </div>
  </div>
  </div>
  </div>

</section>


<section id="ourLocationSection" class="section-normal section-colored-bg">

  <div class="col-sm-12 ourLocation">

    <h2 class="section-title-colored-bg"> <i class="fas fa-map-marked-alt location-icon"></i> mēs atrodamies</h2>
    <p> Uzvara, Bauskas novads, Latvijā</p>
    </iframe>
  </div>


</section>
