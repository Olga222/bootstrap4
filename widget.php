<?php
include'header.php';
?>

    <main role="main">
      <div class="container mt-4">
     <div class="row">
       <div class="col-md-6">
         <h2> Acordion widget</h2>
         <div id="accordeon">

           <h3><a href="#">Section1</a></h3>
         <div>
         <p>
           Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Выйти использовало залетают букв, все его ее продолжил, живет проектах то коварных! Точках деревни дал маленькая путь большой, дороге всеми.
         </p>
       </div>
        <h3><a href="#">Section2</a></h3>
         <div>
         <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Которой взобравшись журчит свое, дорогу. Использовало рыбными реторический, на берегу необходимыми за океана? Осталось рыбными образ свою рукописи, жаренные встретил. Она!
         </p>
       </div>
        <h3><a href="#">Section3</a></h3>
         <div>
          <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Ему ты сих одна текста большой они он заголовок даль, единственное подзаголовок запятых города там рот. Его о, если до.</p>
        </div>
     </div>
   </div>
   <div class="col-md-6">
     <div id="tabs">
       <ul>
         <li><a href="#tab1">Tab1</a></li>
          <li><a href="#tab2">Tab2</a></li>
           <li><a href="#tab3">Tab3</a></li>
       </ul>
       <div id="tab1">
         <p>
           Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая ему одна диких злых моей, подзаголовок он, всеми рукописи рот единственное эта это ее, алфавит снова ты предупреждал текстами!
         </p>
       </div>
       <div id="tab2">
         <ul>
           <li>punkt1</li>
            <li>punkt2</li>
             <li>punkt3</li>
         </ul>
       </div>
       <div id="tab3">
         <img src="img/Desert.jpg" clas="img-fluid" alt="">
       </div>
     </div>
   </div>
 </div>
 <div class="row mt-4">
   <div class="col-md-6">
     <h2>Menu</h2>
     <ul class="menu">
       <li><a href="#">Punkt1</a></li>
        <li><a href="#">Punkt2</a></li>
         <li><a href="#">Punkt3</a>
     </ul>
     <ul>
     <li><a href="#">Podpunkt 3.1</a></li>
     <li><a href="#">Podpunkt 3.2</a></li>
   </ul>
 </li>
</ul>
   </div>
   <div class="col-md-6">
     <h2>Datepicker</h2>
     <input id="calendar" >
   </div>
 </div>
 <div class="row mt-4">
   <div class="col-md-6">
     <h2>Button</h2>
     <button id="btn4">Button</button>
     <a href="#" id="link">Link</a>
   </div>
   <div class="col-md-6">
     <h2>Dialog</h2>
     <button class="btn btn-primary btn-lg " id="btn5">Open dialog</button>
     <div id="dialog" title="Dialog window">
      <form>
        <div class="form group">
          <label for="name">Login</label>
          <input type="email" id="name">
        </div>
         <div class="form group">
          <label for="email">Email</label>
          <input type="email" id="email">
        </div>
         <input type="submit" value="Отправить" class=" btn btn-lg btn-info"> 
      </form>
      <!-- <img src="img/Chrysanthemum.jpg" width="200">
       <p>
         Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Маленькая ему одна диких злых моей, подзаголовок он, всеми рукописи рот единственное эта это ее, алфавит снова ты предупреждал текстами!

       </p> -->
     </div>
   </div>
 </div>
 <div class="row">
   <div class="col-md-6">
     <h2>Slider</h2>
     <p>
  <label for="amount">Price range:</label>
  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
</p>
    
     <div id="slider"></div>
   </div>
 </div>
</div>

     <!-- <div class="container mt-4 text-center">
       <div class="row">
       <div class="col-md-12 mt-4">
         <h2 class="text-center">Effekts</h2>
       </div>
     </div> -->
     <div class="row">
       <div class="col-md-4 mt-4 ">
        <div class="div1"></div>
        <button id="btn1" class="btn btn-lg btn-warning mt-4">Bounse effekt</button>
     </div>
<div class="col-md-4 mt-4">
  <div class="div2"></div>
        <button id="btn2" class="btn btn-lg btn-warning mt-4">Explode effekt</button>
     </div>
  <div class="col-md-4 mt-4">
  <div class="div3"></div>
        <button id="btn3" class="btn btn-lg btn-warning mt-4">Pulsate effekt</button>
     </div>
 </div>
 <div class="row mt-4">
   <div class="col-md-12">
     <h2 class="text-center">Show/Hide</h2>
   </div>
 </div>
 <div class="row mt-4">
  <div class="col-md-6">
    <div class="divshow"></div>
    <button id="btnshow" class=" btn btn-lg btn-danger mt-4">Show div</button>
  </div>
  <div class="col-md-6">
    <div class="divhide"></div>
    <button id="btnhide" class=" btn btn-lg btn-danger mt-4">Hide div</button>
  </div>
 </div>
 <div class="row mt-4">
  <div class="col-md-12">
    <h2>Add/remove</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <img src="img/Desert.jpg" class="img-fluid" alt="" id="pic1">
    <button id="btnadd" class="btn btn-lg btn-info mt-4">Add class</button>
  </div>
   <div class="col-md-6">
    <img src="img/Chrysanthemum.jpg" class="img-fluid img-circle" alt="" id="pic2">
    <button id="btnremove" class="btn btn-lg btn-info mt-4">Remove class</button>
    </div>
  </div>
  <div class="row">
   <div class="col-md-6">
    <div class="divtext">
      <p class="abzac">
        Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Свое собрал маленький деревни единственное, они, снова! Большого решила образ грустный лучше, меня однажды, последний несколько до оксмокс журчит алфавит.
      </p>
    </div>
    <button class="btn btn-lg btn-default" id="switchbtn">Switch class</button>
     
   </div>
<div class="col-md-6">
  <h2 class="text-center">Color Animate</h2>
  <div class="anim">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat et explicabo illum animi nulla deserunt amet, error deleniti esse doloribus.</div>
  <button class="btn btn-lg btn-primary" id="animbtn">Color animate</button>
  
</div>
 </div>
</div>
      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->

<?php
include'footer.php';
?>
      <!-- FOOTER -->
    