<?php
/*
Este archivo simplemente cierra las etiquetas abiertas en encabezado.php
*/
?>    

</main>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Información de contacto</h3>
        <p>123 Calle Falsa</p>
        <p>Ciudad, Estado</p>
        <p>Teléfono: 123-456-7890</p>
      </div>
      <div class="col-md-4">
        <h3>Enlaces rápidos</h3>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Acerca de</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Síguenos</h3>
        <ul class="social-media">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

</body>
<style>
    footer {
  background-color: #1d1d1d;
  color: #fff;
  padding: 50px 0;
  font-size: 18px;
  line-height: 1.5;
}

footer h3 {
  font-size: 24px;
  margin-bottom: 20px;
}

footer ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

footer ul li {
  margin-bottom: 10px;
}

footer ul li a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

footer ul li a:hover {
  color: #f7c08a;
}

.social-media {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

.social-media li {
  margin-right: 10px;
}

.social-media li:last-child {
  margin-right: 0;
}

.social-media li a {
  display: block;
  width: 40px;
  height: 40px;
  background-color: #f7c08a;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  transition: transform 0.3s ease;
}

.social-media li a:hover {
  transform: translateY(-5px);
}

</style>
</html>