<?php include 'partials/header.php'; ?>

<section class="poles container">

    <article>
        <hr>
        <h2>Poles</h2>
        <img src="img/poles.jpg" alt="">
    </article>

    <article>
        <h2>Poles</h2>
        <p class='price'> &#36; 50</p>
        <p class='productDescription'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad qui, magni consectetur ut repudiandae, ab laboriosam fugit aspernatur nulla, sequi eveniet mollitia molestiae. Temporibus aut in molestiae natus omnis esse reprehenderit saepe eaque, accusamus beatae error similique suscipit ex totam? Ad alias quos dolore aliquam in corporis quibusdam delectus pariatur!</p>
        
        <form action="/action_page.php">
  <label for="quantity">Quantity :</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5">
  <input type="submit" value="Order now">
</form>
    
    <div class='category'>
    <hr>
    <p>Category: <span>Men</span>, <span>Poles</span>, <span>Women</span> </p>
    <hr>
    </div>

    <p>Share: &nbsp;  <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-pinterest"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a></p>
    
    </article>
</section>



<?php include 'partials/footer.php'; ?>