<section class="top-banner-section grid content-center justify-center">
  <!-- The CSS grid area that displays the image (layer 1) -->
  <div class="banner-image-div">
    <img class="banner-image" src="<?php the_field('page_hero_image');  ?>" alt="Banner Image" />
  </div>
  <!-- The CSS grid area that displays the semi-transparent gradient overlay (layer 2) -->
  <div class="banner-overlay-div"></div>
  <!-- The CSS grid area that displays the content (layer 3) -->
  <div class="banner-text-div lg:px-8 px-4">
    <span class="banner-text">
      <h1 class="text-3xl"><?php echo esc_html(get_field('page_title')); ?></h1>
    </span>
  </div>
</section>

<style>
    .top-banner-section {
  display: grid;
  grid-template-columns: 1fr; 
  grid-template-rows: 350px; 
  grid-column-gap: 0px;
  grid-row-gap: 0px;
  align-content: center;
  justify-content: center;

  .banner-image-div {
    grid-area: 1 / 1 / 2 / 2;
  } 
  .banner-overlay-div {
    grid-area: 1 / 1 / 2 / 2;
  } 
  .banner-text-div {
    grid-area: 1 / 1 / 2 / 2;
  } 
}


.banner-image {
  display: grid;
  min-width: 350px; 
  width: 100%;
  height: 100%;
  object-fit: cover; 
}


.banner-overlay-div {
  display: grid;
  max-width: 100%;
  background: black;
  background: linear-gradient(
    60deg,
    rgba(0, 0, 0, 0.7777485994397759) 30%,
    rgba(255, 255, 255, 0) 100%
  );
}


.banner-text-div {
  display: grid;
  align-items: center;
  margin-left: 15px;
  margin-right: 15px;
}


.banner-h1-text {
  font-size: calc(10pt + 0.15vw);
  letter-spacing: 0.05em;
  font-weight: bolder;
  text-transform: uppercase;
  color: white;
}

.banner-body-text {
  font-size: calc(10pt + 0.15vw);
  margin-top: 0.5em;
  color: white;
  text-decoration: none;

  &:hover {
    color: white;
  }
  &:visited {
    color: white;
  }
  &:active {
    color: white;
  }
}

.banner-btn {
  margin-top: 1em;
}

.banner-btn-item {
  font-size: calc(8pt + 0.15vw); 
  padding-top: calc(0.5em + 0.08vw);
  padding-bottom: calc(0.5em + 0.08vw);
  padding-left: calc(0.5em + 0.08vw);
  padding-right: calc(0.5em + 0.08vw);
  color: blue;
  background-color: white;
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
  border: 1px solid white;

  &:link {
    text-decoration: none;
  }
  &:visited {
    text-decoration: none;
  }
}


</style>