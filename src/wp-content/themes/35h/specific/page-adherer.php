<?php
/* Template Name: FAQ Adherer */
?>

<?php get_header(); ?>

    <nav class="faqNav">
        <h1><?php the_title(); ?></h1>
        <a href="/questions/"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="transparent" stroke="#000"><path d="M0,0L40,40M40,0L0,40"/></svg></a>
    </nav>

    <div class="contentFAQAdherer">
        <div class="wrapperFAQAdherer faq-diamond">
          <section>
           <div class="box1"><img src="/wp-content/themes/35h/image/faq/adherer/01/Question_01.png" alt=""></div> 
            <div class="box2"><img src="/wp-content/themes/35h/image/faq/adherer/01/Reponse_01.png" alt=""></div>
            <div class="box3"><img src="/wp-content/themes/35h/image/faq/adherer/02/Question_02.png" alt=""></div> 
            <div class="box4"><img src="/wp-content/themes/35h/image/faq/adherer/02/Reponse_02.png" alt=""></div>
            <div class="box5"><img src="/wp-content/themes/35h/image/faq/adherer/03/Question_03.png" alt=""></div> 
            <div class="box6"><img src="/wp-content/themes/35h/image/faq/adherer/03/Reponse_03.png" alt=""></div>
            <div class="box7"><img src="/wp-content/themes/35h/image/faq/adherer/04/Question_04.png" alt=""></div> 
            <div class="box8"><img src="/wp-content/themes/35h/image/faq/adherer/04/Reponse_04.png" alt=""></div>
        </section> 

    </div>
</div>


<script>

    var controller = new ScrollMagic(),
    $box1 = $('.box1'),
    $box2 = $('.box2'),
    $box3 = $('.box3'),
    $box4 = $('.box4'),
    $box5 = $('.box5'),
    $box6 = $('.box6'),
    $box7 = $('.box7'),
    $box8 = $('.box8');

new ScrollScene ({duration: 8000, offset: 0}).addTo(controller)
  .setTween(
    new TimelineMax()
      .add( TweenMax.to($box1, 1, { top: '22%', marginTop : 0, opacity: 1}),0)
      .add( TweenMax.to($box2, 1, { bottom: '22%', marginBottom : 0, opacity:1, delay:0}),0)  
      .add( TweenMax.to($box1, 1, { top: -100, opacity:0, delay:2 } ),1)
      .add( TweenMax.to($box2, 1, { bottom: -100, opacity:0, delay:2 }),1)
  
      .add( TweenMax.to($box3, 1, { top: '22%', marginTop : 0, opacity: 1, delay:2}),2)
      .add( TweenMax.to($box4, 1, { bottom: '22%', marginBottom : 0, opacity:1, delay:2}),2)  
      .add( TweenMax.to($box3, 1, { top: -100, opacity:0, delay:4 } ),3)
      .add( TweenMax.to($box4, 1, { bottom: -100, opacity:0, delay:4 }),3)
  
      .add( TweenMax.to($box5, 1, { top: '30%', marginTop : 0, opacity: 1, delay:4}),4)
      .add( TweenMax.to($box6, 1, { bottom: '30%', marginBottom : 0, opacity:1, delay:4}),4)  
      .add( TweenMax.to($box5, 1, { top: -100, opacity:0, delay:6 } ),5)
      .add( TweenMax.to($box6, 1, { bottom: -100, opacity:0, delay:6 }),5)
  
      .add( TweenMax.to($box7, 1, { top: '25%', marginTop : 0, opacity: 1, delay:6}),6)
      .add( TweenMax.to($box8, 1, { bottom: '25%', marginBottom : 0, opacity:1, delay:6}),6)  
      .add( TweenMax.to($box7, 1, { top: -100, opacity:0, delay:8 } ),7)
      .add( TweenMax.to($box8, 1, { bottom: -100, opacity:0, delay:8 }),7)
  )

</script>

<?php get_footer(); ?>