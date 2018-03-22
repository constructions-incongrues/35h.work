<?php
/* Template Name: FAQ Participer */
?>

<?php get_header(); ?>


    <nav class="faqNav">
        <h1><?php the_title(); ?></h1>
        <a href="/questions/"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="transparent" stroke="#000"><path d="M0,0L40,40M40,0L0,40"/></svg></a>
    </nav>

    <div class="contentFAQParticiper">
        <div class="wrapperFAQParticiper faq-rectangle ">
          <section>
             <!--<div class="box1"><div style="font-size:32px;">A qui s'adresse 35h ?</div></div>
            <div class="box2"><div style="font-size:32px;">A des jeunes artistes et curateurs</div></div>-->
	    <div class="box1"><img src="/wp-content/themes/35h/image/faq/participer/01/Question_01.png" alt=""></div> 
            <div class="box2"><img src="/wp-content/themes/35h/image/faq/participer/01/Reponse_01.png" alt=""></div>
            <div class="box3"><img src="/wp-content/themes/35h/image/faq/participer/02/Question_02.png" alt=""></div> 
            <div class="box4"><img src="/wp-content/themes/35h/image/faq/participer/02/Reponse_02.png" alt=""></div>
            <div class="box5"><img src="/wp-content/themes/35h/image/faq/participer/03/Question_03.png" alt=""></div> 
            <div class="box6"><img src="/wp-content/themes/35h/image/faq/participer/03/Reponse_03.png" alt=""></div>
            <div class="box7"><img src="/wp-content/themes/35h/image/faq/participer/04/Question_04.png" alt=""></div> 
            <div class="box8"><img src="/wp-content/themes/35h/image/faq/participer/04/Reponse_04.png" alt=""></div>
            <div class="box9"><img src="/wp-content/themes/35h/image/faq/participer/05/Question_05.png" alt=""></div> 
            <div class="box10"><img src="/wp-content/themes/35h/image/faq/participer/05/Reponse_05.png" alt=""></div>
            <div class="box11"><img src="/wp-content/themes/35h/image/faq/participer/06/Question_06.png" alt=""></div> 
            <div class="box12"><img src="/wp-content/themes/35h/image/faq/participer/06/Reponse_06.png" alt=""></div>
            <div class="box13"><img src="/wp-content/themes/35h/image/faq/participer/07/Question_07.png" alt=""></div> 
            <div class="box14"><img src="/wp-content/themes/35h/image/faq/participer/07/Reponse_07.png" alt=""></div>
            <div class="box15"><img src="/wp-content/themes/35h/image/faq/participer/08/Question_08.png" alt=""></div> 
            <div class="box16"><img src="/wp-content/themes/35h/image/faq/participer/08/Reponse_08.png" alt=""></div>
            <div class="box17"><img src="/wp-content/themes/35h/image/faq/participer/09/Question_09.png" alt=""></div> 
            <div class="box18"><img src="/wp-content/themes/35h/image/faq/participer/09/Reponse_09.png" alt=""></div> <!-- commenter -->
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
    $box8 = $('.box8'),
    $box9 = $('.box9'),
    $box10 = $('.box10'),
    $box11 = $('.box11'),
    $box12 = $('.box12'),
    $box13 = $('.box13'),
    $box14 = $('.box14'),
    $box15 = $('.box15'),
    $box16 = $('.box16'),
    $box17 = $('.box17'),
    $box18 = $('.box18');

new ScrollScene ({duration: 18000, offset: 0}).addTo(controller)
  .setTween(
    new TimelineMax()
      .add( TweenMax.to($box1, 1, { top: '41%', marginTop : 0, opacity: 1}),0)
      .add( TweenMax.to($box2, 1, { bottom: '41%', marginBottom : 0, opacity:1, delay:0}),0)  
      .add( TweenMax.to($box1, 1, { top: -100, opacity:0, delay:2 } ),1)
      .add( TweenMax.to($box2, 1, { bottom: -100, opacity:0, delay:2 }),1)
  
      .add( TweenMax.to($box3, 1, { top: '38%', marginTop : 0, opacity: 1, delay:2}),2)
      .add( TweenMax.to($box4, 1, { bottom: '38%', marginBottom : 0, opacity:1, delay:2}),2)  
      .add( TweenMax.to($box3, 1, { top: -100, opacity:0, delay:4 } ),3)
      .add( TweenMax.to($box4, 1, { bottom: -100, opacity:0, delay:4 }),3)
  
      .add( TweenMax.to($box5, 1, { top: '36%', marginTop : 0, opacity: 1, delay:4}),4)
      .add( TweenMax.to($box6, 1, { bottom: '36%', marginBottom : 0, opacity:1, delay:4}),4)  
      .add( TweenMax.to($box5, 1, { top: -100, opacity:0, delay:6 } ),5)
      .add( TweenMax.to($box6, 1, { bottom: -100, opacity:0, delay:6 }),5)
  
      .add( TweenMax.to($box7, 1, { top: '31%', marginTop : 0, opacity: 1, delay:6}),6)
      .add( TweenMax.to($box8, 1, { bottom: '31%', marginBottom : 0, opacity:1, delay:6}),6)  
      .add( TweenMax.to($box7, 1, { top: -100, opacity:0, delay:8 } ),7)
      .add( TweenMax.to($box8, 1, { bottom: -100, opacity:0, delay:8 }),7)
  
      .add( TweenMax.to($box9, 1, { top: '39%', marginTop : 0, opacity: 1, delay:8}),8)
      .add( TweenMax.to($box10, 1, { bottom: '39%', marginBottom : 0, opacity:1, delay:8}),8)  
      .add( TweenMax.to($box9, 1, { top: -100, opacity:0, delay:10} ),9)
      .add( TweenMax.to($box10, 1, { bottom: -100, opacity:0, delay:10}),9)
  
      .add( TweenMax.to($box11, 1, { top: '29%', marginTop : 0, opacity: 1, delay:10}),10)
      .add( TweenMax.to($box12, 1, { bottom: '29%', marginBottom : 0, opacity:1, delay:10}),10)  
      .add( TweenMax.to($box11, 1, { top: -100, opacity:0, delay:12}),11)
      .add( TweenMax.to($box12, 1, { bottom: -100, opacity:0, delay:12}),11)
  
      .add( TweenMax.to($box13, 1, { top: '35%', marginTop : 0, opacity: 1, delay:12}),12)
      .add( TweenMax.to($box14, 1, { bottom: '35%', marginBottom : 0, opacity:1, delay:12}),12)  
      .add( TweenMax.to($box13, 1, { top: -100, opacity:0, delay:14 }),13)
      .add( TweenMax.to($box14, 1, { bottom: -100, opacity:0, delay:14}),13)
  
      .add( TweenMax.to($box15, 1, { top: '39%', marginTop : 0, opacity: 1, delay:14}),14)
      .add( TweenMax.to($box16, 1, { bottom: '39%', marginBottom : 0, opacity:1, delay:14}),14)  
      .add( TweenMax.to($box15, 1, { top: -100, opacity:0, delay:16 }),15)
      .add( TweenMax.to($box16, 1, { bottom: -100, opacity:0, delay:16}),15)
  
      .add( TweenMax.to($box17, 1, { top: '29%', marginTop : 0, opacity: 1, delay:16}),16)
      .add( TweenMax.to($box18, 1, { bottom: '29%', marginBottom : 0, opacity:1, delay:16}),16)  
      .add( TweenMax.to($box17, 1, { top: -100, opacity:0, delay:18}),17)
      .add( TweenMax.to($box18, 1, { bottom: -100, opacity:0, delay:18}),17)
  )

</script>


<?php get_footer(); ?>